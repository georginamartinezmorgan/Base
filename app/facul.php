<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class facul extends Model
{
    protected $fillable = [
        'Codigo', 'Descripcion', 'CantidadEdificios' ,'NombreDecano'
  ];
}
