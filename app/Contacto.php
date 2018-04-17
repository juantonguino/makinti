<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'contacto';

    public function taller(){
        return $this->belongsTo('App\Taller');        
    }
}
