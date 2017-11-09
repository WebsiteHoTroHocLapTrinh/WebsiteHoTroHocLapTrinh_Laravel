<?php

namespace App\Http\Middleware;

use Closure;

class Comment
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
        if(Auth::check()){
            return $next($request);
        }
        return redirect('user.login')->with('thonbao', 'Bạn phải đăng nhập để được bình luận bài viết này');
    }
}
