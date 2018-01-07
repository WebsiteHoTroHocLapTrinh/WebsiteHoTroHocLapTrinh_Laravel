<?php

namespace App\Http\Middleware;

use Closure;
use App\Question;
use App\Documentation;
use Auth;

class Active
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
                case 'documentation_id':
                    $object = Documentation::find($value);
                    break;
                default:
                    # code...
                    break;
            }
        }
        if ($object != null) {
            if ($object->active || $object->user_id == Auth::id()) {
                return $next($request);
            }
        }
        
        return redirect(route('404'));
    }
}
