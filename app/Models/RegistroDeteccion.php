<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RegistroDeteccion extends Model
{
    protected $table = 'registros_deteccion';

    public function sala()
    {
        return $this->belongsTo(Sala::class);
    }
}

