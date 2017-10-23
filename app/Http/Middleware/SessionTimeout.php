<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Session\Store;
use DateTime;
use Carbon\Carbon;
use Cache;

class SessionTimeout
{
    protected $session;
    protected $timeout=360; //6 minutes
    public function __construct(Store $session){
        $this->session=$session;
    }
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
       
        if(Auth::check()) {
             // check session
            if(!$this->session->has('lastActivityTime'))
                $this->session->put('lastActivityTime',time());
            elseif(time() - $this->session->get('lastActivityTime') > $this->getTimeOut()){
                $this->session->forget('lastActivityTime');
                Auth::logout();
                return redirect('login')->withErrors(['Bạn đã không hoạt động một thời gian']);
            }
            $this->session->put('lastActivityTime',time());

            //update activity
            Auth::user()->last_activity_time = new DateTime();
            Auth::user()->save();

            //put Cache
            $expiresAt = Carbon::now()->addMinutes(5); //5 minutes
            Cache::put('user-is-online-' . Auth::user()->id, true, $expiresAt);
        }
        
        return $next($request);
    }
 
    protected function getTimeOut()
    {
        return (env('TIMEOUT')) ?: $this->timeout;
    }
}
