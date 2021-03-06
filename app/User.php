<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    public function events(){
        return $this->belongsToMany('Event', 'attendants');
    }

    public function comments(){
        return $this->hasMany('App\Comment');
    }

    public function myevents(){
        return $this->hasMany('App\Event');
    }

    public function profile(){
        return $this->hasOne('App\Profile');
    }
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
}
