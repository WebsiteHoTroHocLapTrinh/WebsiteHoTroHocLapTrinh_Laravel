<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Validator;
use DateTime;
use Carbon\Carbon;
use App\Permission;
use App\User;
use App\Tag;
use App\Question;
use App\Answer;
use App\Taggable;
use App\Documentation;
use App\Comment;
use App\Subject;
use App\Activity;
use App\Ping;
use App\Vote;
use App\PasswordReset;

class AjaxController extends Controller
{
	public function getCommentsOfQuestion($idQuestion) {
		$question = Question::find($idQuestion);
		if ($question != null) {
			$comments = $question->comments->sortByDesc('created_at');
			foreach ($comments as $cmt) {
				echo '
				<tr>
					<td>
						<div class="id">'.$cmt->id.'</div>'
						.(($cmt->is_new) ? '<p style="padding-top: 10px;"><span style="padding: 5px;" class="label label-success">Mới</span></p>' : "").
					'</td>
					<td>'.$cmt->content.'</td>
					<td>'.$cmt->user->name.'</td>
					<td>'.$cmt->created_at.'</td>
					<td>'.$cmt->updated_at.'</td>
					<td>
						<label class="switch">
							<input type="checkbox" '
							.(($cmt->active) ? "checked" : "").'>
							<span class="slider round"></span>
						</label>
					</td>
					<td><a onclick="return confirm('."'Bạn có chắc là muốn xóa không?'".')" href="admin/comment/delete/'.$cmt->id.'"><i style="font-size: 40px;" class="fa fa-trash-o"></i></a></td>
				</tr>
				';
			}
		}
	}

	public function getCommentsOfDocument($idDocument) {
		$document = Documentation::find($idDocument);
		if ($document != null) {
			$comments = $document->comments->sortByDesc('created_at');
			foreach($comments as $cmt){
				echo '
					<tr>
					<td>
						<div class="id">'.$cmt->id.'</div>'
						.(($cmt->is_new) ? '<p style="padding-top: 10px;"><span style="padding: 5px;" class="label label-success">Mới</span></p>' : "").
					'</td>
					<td>'.$cmt->content.'</td>
					<td>'.$cmt->user->name.'</td>
					<td>'.$cmt->created_at.'</td>
					<td>'.$cmt->updated_at.'</td>
					<td>
						<label class="switch">
							<input type="checkbox" '
							.(($cmt->active) ? "checked" : "").'>
							<span class="slider round"></span>
						</label>
					</td>
					<td><a onclick="return confirm('."'Bạn có chắc là muốn xóa không?'".')" href="admin/comment/delete/'.$cmt->id.'"><i style="font-size: 40px;" class="fa fa-trash-o"></i></a></td>
				</tr>
				';
			}
		}
	}
				

	public function getCommentsOfAnswer($idAnswer) {
		$answer = Answer::find($idAnswer);
		if ($answer != null) {
			$comments = $answer->comments->sortByDesc('created_at');
			foreach ($comments as $cmt) {
				echo '
				<tr>
					<td>
						<div class="id">'.$cmt->id.'</div>'
						.(($cmt->is_new) ? '<p style="padding-top: 10px;"><span style="padding: 5px;" class="label label-success">Mới</span></p>' : "").
					'</td>
					<td>'.$cmt->content.'</td>
					<td>'.$cmt->user->name.'</td>
					<td>'.$cmt->created_at.'</td>
					<td>'.$cmt->updated_at.'</td>
					<td>
						<label class="switch">
							<input type="checkbox" '
							.(($cmt->active) ? "checked" : "").'>
							<span class="slider round"></span>
						</label>
					</td>
					<td><a onclick="return confirm('."'Bạn có chắc là muốn xóa không?'".')" href="admin/comment/delete/'.$cmt->id.'"><i style="font-size: 40px;" class="fa fa-trash-o"></i></a></td>

				</tr>
				';
			}
		}
	}

	public function changeActive($type, $id, $value) {
		$object;
		switch ($type) {	//1: answer, 2:documentation, 3:permission, 4:question, 5:subject, 6:tag, 7:user, 8:comment
			case 1:
				$object = Answer::find($id);
				break;
			case 2:
				$object = Documentation::find($id);
				break;
			case 3:
				$object = Permission::find($id);
				break;
			case 4:
				$object = Question::find($id);
				break;
			case 5:
				$object = Subject::find($id);
				break;
			case 6:
				$object = Tag::find($id);
				break;
			case 7:
				$object = User::find($id);
				break;
			case 8:
				$object = Comment::find($id);
				break;
			default:
				$object = Activity::find($id);
				break;
		}
		if ($object != null) {
			if ($value) {
				$object->active = true;
			}
			else {
				$object->active = false;
			}
		}
		
		$object->save();
	}

	public function dismissNew($type, $id) {
		$object;
		switch ($type) {	//1: answer, 2:documentation, 3:permission, 4:question, 5:subject, 6:tag, 7:user, 8:comment
			case 1:
				$object = Answer::find($id);
				break;
			case 2:
				$object = Documentation::find($id);
				break;
			case 3:
				$object = Permission::find($id);
				break;
			case 4:
				$object = Question::find($id);
				break;
			case 5:
				$object = Subject::find($id);
				break;
			case 6:
				$object = Tag::find($id);
				break;
			case 7:
				$object = User::find($id);
				break;
			case 8:
				$object = Comment::find($id);
				break;
			default:
				$object = Activity::find($id);
				break;
		}
		if ($object != null) {
			$object->is_new = false;
		
			$object->save();
		}
		
	}

	public function getMore($type, $id){
		switch ($type) {
			case 'question':{
				$questions = Question::where('user_id', $id);
				$count = count($questions->get());
				if(($count-3)>0){
					$questions_skip = $questions->get()->splice(3);
					foreach ($questions_skip as $qs) {
						echo '<div class="user_active ">
						<p class="point">'.$qs->point_rating.'</p>
						<p><a href="question/detail-question/'.$qs->id.'">'.$qs->title.'</a></p>
						<p class=" date float-right text-muted">'.date('d-m-Y h:i:s', strtotime($qs->created_at)).'</p>
						</div>';
					}
				}
			}break;
			case 'answers':{
				$answers = Answer::where('user_id', $id)->groupBy('question_id');
				$count = count($answers->get());
				if(($count-3)>0){
					$answers_skip = $answers->orderBy('id', 'desc')->get()->splice(3);
					foreach ($answers_skip as $qs) {
						$count_ans = count(Answer::where([['user_id', $id],['question_id', $qs->question_id]])->get());
						echo '<div class="user_active ">
						<p class="point">'.$qs->question->point_rating.'</p>
						<p><a href="question/detail-question/'.$qs->question->id.'">'.$qs->question->title.'</a></p>
						<p class=" date float-right text-muted">'.$count_ans.'</p>
						</div>';
					}
				}
			}break;
			case 'documentations':{
				$documentations = Documentation::where('user_id', $id);
				$count = count($documentations->get());
				if(($count-3)>0){
					$documentations_skip = $documentations->orderBy('id', 'desc')->get()->splice(3);
					foreach($documentations_skip as $documentation){
						echo '<div class="user_active">
						<p class="point">'.$documentation->point_rating.'</p>
						<p><a href="">'.$documentation->title.'</a></p>
						<p class=" date float-right text-muted">'.date('d-m-Y h:i:s',strtotime($documentation->created_at)).'</p>
						</div>';
					}
				}
			}break;
			
			default:{
				//tag
				$tagQuestions =  Question::join('taggables','questions.id','=','taggables.taggable_id')->
				where([['questions.user_id', $id],['taggable_type','App\Question']])->
				join('tags', 'taggables.tag_id','=','tags.id')->
				selectRaw('tags.id, tags.name, taggables.id AS taggable_id');

				$tagDocuments = Documentation::join('taggables','documentations.id','=','taggables.taggable_id')->
				where([['documentations.user_id', $id],['taggable_type','App\Documentation']])->
				join('tags', 'taggables.tag_id','=','tags.id')->
				selectRaw('tags.id, tags.name, taggables.id AS taggable_id');

				$result_group = $tagQuestions->get()->merge($tagDocuments->get())->sortByDesc('id');
				$result_all = $tagDocuments->union($tagQuestions)->get();

				if((count($result_group)-3)>0){
					$result_skip = $result_group->splice(3);
					foreach($result_skip as $rs_skip){
						$count_tag = count($result_all->where('id',$rs_skip->id));
						echo '<div class="user_active">
						<p class="tags">'.$rs_skip->name.'</p>
						<p class="count_tag">x'.$count_tag.'</p>
					</div>';
					}
				}

			}break;
		}
		
	}
}
