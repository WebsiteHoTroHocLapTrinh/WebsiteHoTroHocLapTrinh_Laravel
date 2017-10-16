<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Permission;
use App\User;
use App\Tag;
use App\Question;
use App\Answer;
use App\Taggable;
use App\Documentation;
use App\Comment;
use App\UserFavoriteTag;
use App\PasswordReset;
use App\Activity;
use App\Ping;
use App\Subject;
use App\Vote;

class AjaxController extends Controller
{
	public function getCommentsOfQuestion($idQuestion) {
		$comments = Question::find($idQuestion)->comments;
		foreach ($comments as $cmt) {
			echo '
			<tr>
				<td>'.$cmt->id.'</td>
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
				<td><a onclick="return confirm('."'Bạn có chắc là muốn xóa không?'".')" href=""><i style="font-size: 40px;" class="fa fa-trash-o"></i></a></td>
			</tr>
			';
		}
	}

	public function getCommentsOfDocument($idDocument)
	{
		$comments = Documentation::find($idDocument)->comments;
		foreach($comments as $cmt){
			echo '
				<tr>
				<td>'.$cmt->id.'</td>
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
				<td><a onclick="return confirm('."'Bạn có chắc là muốn xóa không?'".')" href=""><i style="font-size: 40px;" class="fa fa-trash-o"></i></a></td>
			</tr>
			';
		}
	}
}
