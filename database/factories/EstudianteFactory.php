<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class|App|Estudiantes::class,function(Faker $faker) {
    return [
        'nombre' => $faker->FirtName,
        'Apellido' => $faker ->lastName,
        'nota'=> $faker ->numberBetween(0,100),
        'Fecha_Nacimiento' => $faker ->dateTimeBetween('-40 years','-16 years'),
        'Identidad' => $faker ->numerify('####') . $faker-> numberBetween(1950, 2005). $faker->numerify('####'),
        'Cuenta' => $faker -> numberBetween(2007,2020) . $faker -> numerify('####')

    ];
});
