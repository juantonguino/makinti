<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Oferta extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'oferta';

    public function producto(){
        return $this->belongsTo('App\Producto');
    }

    public function compra(){
        return $this->hasMany('App\Compra');
    }
}
