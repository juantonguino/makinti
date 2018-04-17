<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'evento';

    public function taller(){
        return $this->belongsTo('App\Taller');
    }
}
