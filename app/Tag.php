<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table = "tags";

    public function questions() {
    	return $this->morphedByMany('App\Question', 'taggable');
    }

    public function documentations() {
    	return $this->morphedByMany('App\Documentation', 'taggable');
    }

    public function users_favorited() {
        return $this->belongsToMany('App\User', 'user_favorite_tags', 'tag_id', 'user_id');
    }
         
    public function user_created() {
        return $this->belongsTo('App\User', 'user_id' ,'id');
    }
}
