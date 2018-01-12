<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Activity;
use App\Question;
use App\Documentation;
use App\Tag;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;


class ActivityController extends Controller
{
    //Admin
    public function getActivity() {
    	$new_question = Question::where('is_new', true)->count();
    	$new_documentation = Documentation::where('is_new', true)->count();
    	$new_tag = Tag::where('is_new', true)->count();
    	$new_user = User::where('is_new', true)->count();
    	$activities_admin = Activity::where('type','=', 2)->orderByDesc('created_at')->get();
        $activities_user = Activity::where('type', '=', 1)->orderByDesc('created_at')->get();

    	return view('admin.index', ['activities_admin' => $activities_admin, 'activities_user' => $activities_user, 
    		'new_question' => $new_question, 
    		'new_documentation' => $new_documentation, 
    		'new_tag' => $new_tag, 
    		'new_user' => $new_user,]);
    }

    public function getListActivity(Request $request) {
        $collection = Auth::user()->activities->where('active', true)->where('type', 1)->sortByDesc('created_at');
        $activities = $this->paginate($collection, 10, $request->page,['path' => LengthAwarePaginator::resolveCurrentPath()]);
        return view('activity.list_activity', ['activities' => $activities]);
    }

    public function paginate($items, $perPage = 5, $page = null, $options = [])
    {
        $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
        $items = $items instanceof Collection ? $items : Collection::make($items);
        return new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, $options);
    }
}
