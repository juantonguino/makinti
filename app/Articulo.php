<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'articulo';

    public function artesano(){
        return $this->belongsTo('App\Artesano');
    }

    public function comentario(){
        return $this->hasMany('App\Comentario');
    }
}
