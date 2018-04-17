<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'producto';

    public function artesano(){
        return $this->belongsTo('App\Artesano');
    }

    public function compra(){
        return $this->hasMany('App\Compra');
    }

    public function oferta(){
        return $this->hasMany('App\Oferta');
    }
}
