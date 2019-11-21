<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ruta extends Model
{
    protected $guarded = [];
    protected $appends = ['start'];

    public function getStartAttribute() {
        return Horario::whereRutaId($this->id)->first()->arrive_time;
    }
}
