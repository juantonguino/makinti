<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Taller extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'taller';

    public function artesano(){
        return $this->hasMany('App\Artesano');
    }

    public function contacto(){
        return $this->hasMany('App\Contacto');
    }

    public function evento(){
        return $this->hasMany('App\Evento');
    }
}
