<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'compra';

    public function cliente(){
        return $this->belongsTo('App\Cliente');
    }

    public function oferta(){
        return $this->belongsTo('App\Oferta');
    }

    public function producto(){
        return $this->belongsTo('App\Producto');
    }
}
