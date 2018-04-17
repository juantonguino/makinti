<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artesano extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'artesano';

    public function user(){
        return $this->belongsTo('App\User');        
    }

    public function taller(){
        return $this->belongsTo('App\Taller');
    }

    public function articulo(){
        return $this->hasMany('App\Articulo');
    }

    public function producto(){
        return $this->hasMany('App\Producto');
    }
}
