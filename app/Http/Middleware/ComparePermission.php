<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use App\User;
use App\Permission;

class ComparePermission
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
        $user_target = User::find($request->route()->parameter('idUser'));

        if (Auth::user()->permission->key > $user_target->permission->key) {
            return $next($request);
        }
        return redirect()->back();
    }
}
