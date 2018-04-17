<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Regalo extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'regalo';

    public function cliente(){
        return $this->belongsTo('App\Cliente');
    }
}
