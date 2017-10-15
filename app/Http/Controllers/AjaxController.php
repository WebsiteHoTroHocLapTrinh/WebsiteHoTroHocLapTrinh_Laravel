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
				<td><a onclick="return confirm('."'Bạn có chắc là muốn xóa không?'".')" href="admin/comment/delete/'.$cmt->id.'"><i style="font-size: 40px;" class="fa fa-trash-o"></i></a></td>
			</tr>
			';
		}
	}

	public function getCommentsOfAnswer($idAnswer) {
		$comments = Answer::find($idAnswer)->comments;
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
				<td><a onclick="return confirm('."'Bạn có chắc là muốn xóa không?'".')" href="admin/comment/delete/'.$cmt->id.'"><i style="font-size: 40px;" class="fa fa-trash-o"></i></a></td>
			</tr>
			';
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
				# code...
				break;
		}
		if ($value) {
			$object->active = true;;
		}
		else {
			$object->active = false;
		}
		
		$object->save();
	}
}
