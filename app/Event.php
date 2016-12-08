<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public function category(){

    	return $this->belongsTo('App\Category');
    }

    public function users(){

    	return $this->belongsToMany('App\User', 'attendants');
    }

    public function comments(){

    	return $this->hasMany('App\Comment');
    }
    public function creator(){

    	return $this->belongsTo('App\User');
    }
}
