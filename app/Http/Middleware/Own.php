<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use App\Answer;
use App\Question;

class Own
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $object_id = $request->route()->parameters();
        foreach ($object_id as $key => $value) {
            switch ($key) {
                case 'question_id':
                    $object = Question::find($value);
                    break;
                case 'answer_id':
                    $object = Answer::find($value);
                    break;
                default:
                    # code...
                    break;
            }
        }
        if ($object->user_id == Auth::id()) {
            return $next($request);
        }
        return redirect(route('404'));
    }
}
