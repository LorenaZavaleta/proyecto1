<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    protected $table = 'horario';
    public $timestamps = false;

    public function salon(){
        return $this->belongsTo('App\Salon','horario');
    }

    public function experienciaeducativa_r(){
        return $this->belongsTo('App\Experienciaeducativa','experienciaeducativa');
    }
}
