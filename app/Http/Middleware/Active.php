<?php

namespace App\Http\Middleware;

use Closure;
use App\Question;

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
                
                default:
                    # code...
                    break;
            }
        }
        if ($object->active) {
            return $next($request);
        }
        return redirect(route('404'));
    }
}
