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

	public function getTabQuestion($tab_id){
		//get data
		$ListQuestion = Question::where('active',1)->get();
		$SortByAnswer = Question::with('answers')->where('active',1)->get()->sortByDesc(function($SortByAnswer)
        {
            return $SortByAnswer->answers->where('active',1)->count();
        });

		//Sort
		if($tab_id == 1)
			$list = $ListQuestion->sortByDesc('id');
		if($tab_id == 2)
			$list = $ListQuestion->sortByDesc('view');
		if($tab_id == 3)
			$list = $SortByAnswer;
		if($tab_id == 4)
			$list = $ListQuestion->sortByDesc('point_rating');
		
		///
		foreach($list as $lt){
			//time
			$date1 = $lt->created_at;
	        $date2 = Carbon::now();
	        $interval = $date1->diff($date2);
	        if($interval->y!=0) 
	            $time= $interval->y . " năm trước"; 
	        elseif ($interval->m!=0)
	            $time= $interval->m . " tháng trước";
	        elseif ($interval->d!=0)
	            $time= $interval->d . " ngày trước";
	        elseif($interval->h!=0)
	            $time= $interval->h . " giờ trước";
	        elseif($interval->i!=0)
	            $time= $interval->i . " phút trước";
	        else
	            $time=" just now";

	        echo '
			<div class="question-summary">
                <div class="row">
                    <div class="statistic col-lg-4">
                        <div class="count-views">
                            <span>'.$lt->view.'</span>
                            <div>lượt xem</div>
                        </div>
                        <div class="count-answers answered">
                            <span>'.count($lt->answers->where('active',1)).'</span>
                            <div>câu trả lời</div>
                        </div>
                        <div class="count-votes">
                            <span>'.$lt->point_rating.'</span>
                            <div>bình chọn</div>
                        </div>
                    </div>
                    <div class="summary col-lg-8">
                        <div class="summary-title">
                            <div class="summary-title">
                                <h6><a href="question/detail/qs_'.$lt->id.'">'.$lt->title.'</a></h6>
                            </div>
                        </div>
                        <div class="row">
                         <div class="list-tag col-lg-8">';
                            foreach($lt->tags as $tag_new){
                            echo '<p class="tag">'.$tag_new->name.'</p>';
                        	}
                            
                        echo'</div>
                        <div class="started col-lg-4">
                            <p class="user"><a href="user/info/user_'.$lt->user_id.'">'.$lt->user->name.'</a></p>
                            <p class="action">đã hỏi</p>
                            <p class="time">'.$time.'</p>
                        </div>
                    </div>
                </div>
            </div>
            </div>
		';
		
		}
		
	}
}
