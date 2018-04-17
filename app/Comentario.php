<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'comentario';

    public function articulo(){
        return $this->belongsTo('App\Articulo');
    }

    public function cliente(){
        return $this->belongsTo('App\Cliente');
    }
}
