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

    public function isAdmin(){
        return $this->rol=='admin';
    }

    public function isClient(){
        return $this->rol=='client';
    }

    public function isArtisan(){
        return $this->rol=='artisan';
    }

    public function artesano(){
        return $this->hasMany('App\Artesano');
    }
    public function cliente(){
        return $this->hasMany('App\Cliente');
    }
}
