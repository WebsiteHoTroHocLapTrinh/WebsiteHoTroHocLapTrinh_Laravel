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
			return view('admin.comment.list', ['comments' => $comments]);
		}
	}

	public function getCommentsOfDocument($idDocument) {
		$document = Documentation::find($idDocument);
		if ($document != null) {
			$comments = $document->comments->sortByDesc('created_at');
			return view('admin.comment.list', ['comments' => $comments]);
		}
	}
				

	public function getCommentsOfAnswer($idAnswer) {
		$answer = Answer::find($idAnswer);
		if ($answer != null) {
			$comments = $answer->comments->sortByDesc('created_at');
			return view('admin.comment.list', ['comments' => $comments]);
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
				if (Auth::user()->permission->key <= $object->permission->key) {
					$object = null;
				}
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
			$object->save();
		}
		
		
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
						$href = route('detail-question', ['question_id' => $qs->id, 'question_url' => $qs->title_url]);
						echo '<div class="user_active ">
						<p class="point">'.$qs->point_rating.'</p>
						<p><a href="'.$href.'">'.$qs->title.'</a></p>
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
					foreach ($answers_skip as $ans) {
						$href = route('detail-question', ['question_id' => $ans->question->id, 'question_url' => $ans->question->title_url]);
						$count_ans = count(Answer::where([['user_id', $id],['question_id', $ans->question_id]])->get());
						echo '<div class="user_active ">
						<p class="point">'.$ans->question->point_rating.'</p>
						<p><a href="'.$href.'">'.$ans->question->title.'</a></p>
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
						$href = route('detail-documentation', ['documentation_id' => $documentation->id, 'documentation_url' => $documentation->title_url]);
						echo '<div class="user_active">
						<p class="point">'.$documentation->point_rating.'</p>
						<p><a href="'.$href.'">'.$documentation->title.'</a></p>
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
