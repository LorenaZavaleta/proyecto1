<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Salon extends Model
{
    protected $table = 'salon';
    public $timestamps = false;

    public function horarios(){
        return $this->hasMany('App\Horario','salon');
    }
}
