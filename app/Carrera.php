<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrera extends Model
{
    protected $table = 'carrera';
    public $timestamps = false;

    public function experienciaseducativas(){
        return $this->hasMany('App\Experienciaeducativa','carrera');
    }
}
