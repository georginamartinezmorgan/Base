<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facultad extends Model
{
    protected $fillable = [
        'Codigo', 'Descripcion', 'CantidadEdificios' ,'NombreDecano'
  ];
}
