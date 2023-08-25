<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sala extends Model
{
    protected $table = 'salas';

    public function registros()
    {
        return $this->hasMany(RegistroDeteccion::class);
    }
}
