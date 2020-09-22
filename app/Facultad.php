<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facultad extends Model
{
    protected $fillable = [
        'Codigo1', 'Descripcion', 'CantidadEdificios' ,'NombreDecano'
  ];
}
