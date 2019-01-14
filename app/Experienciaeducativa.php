<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Experienciaeducativa extends Model
{
    protected $table = 'experienciaeducativa';
    public $timestamps = false;

    public function horarios(){
        return $this->hasMany('App\Horario','horario');
    }

    public function carrera_r(){
        return $this->belongsTo('App\Carrera','carrera');
    }
}
