<?php

namespace App\Providers;

use Illuminate\Support\Facades\Event;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Session\Store;
use Session;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'App\Events\Event' => [
            'App\Listeners\EventListener',
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();
        //
        Event::listen('question.view', function ($question) {
           if(!Session::has('lastViewQuestion-'.$question->id)){
                Session::put('lastViewQuestion-'.$question->id, time());
                $question->increment('view');
                return;
           }

           if(time() - Session::get('lastViewQuestion-'.$question->id) > 60 ){
                $question->increment('view');
                Session::put('lastViewQuestion-'.$question->id, time());
           }
            
        });
    }
}
