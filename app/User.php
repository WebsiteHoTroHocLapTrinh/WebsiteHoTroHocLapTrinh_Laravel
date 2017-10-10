<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function permission() {
        return $this->belongsTo('App\Permission', 'permission_id', 'id');
    }

    public function questions() {
        return $this->hasMany('App\Question', 'user_id', 'id');
    }

    public function answers() {
        return $this->hasMany('App\Answer', 'user_id', 'id');
    }

    public function documentations() {
        return $this->hasMany('App\Documentation', 'user_id', 'id');
    }

    public function comments() {
        return $this->hasMany('App\Comment', 'user_id', 'id');
    }

    public function tags() {
        return $this->belongsToMany('App\Tag', 'tag_user', 'user_id', 'tag_id');
    }

    public function votes() {
        return $this->hasMany('App\Vote', 'user_id', 'id');
    }

    public function activities() {
        return $this->hasMany('App\Activity', 'user_id', 'id');
    }

    public function permission_created() {
        return $this->hasMany('App\Permission', 'user_id', 'id');
    }

    public function subject_created() {
        return $this->hasMany('App\Subject', 'user_id', 'id');
    }

    public function tag_created() {
        return $this->hasMany('App\Tag', 'user_id', 'id');
    }
}
