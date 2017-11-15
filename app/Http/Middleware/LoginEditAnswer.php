<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use App\Answer;

class LoginEditAnswer
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
        $answer_id = $request->route()->parameter('answer_id');
        $answer = Answer::find($answer_id);
        if(Auth::id()==$answer->user_id){
            return $next($request);
        }
        return redirect('/');
        
    }
}
