<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estudiantes extends Model
{
    
    protected $fillable = [
        'nombre', 'Apellido', 'nota' ,'Fecha_Nacimiento','Identidad','Cuenta',
  ];


}
