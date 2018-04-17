<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'cliente';

    public function user(){
        return $this->belongsTo('App\User');        
    }

    public function regalo(){
        return $this->hasMany('App\Regalo');        
    }

    public function comentario(){
        return $this->hasMany('App\Comentario');        
    }

    public function compra(){
        return $this->hasMany('App\Compra');
    }
}
