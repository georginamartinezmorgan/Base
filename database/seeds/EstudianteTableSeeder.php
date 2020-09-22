<?php
use Illuminate\Database\Seeder;
use App\Estudiantes;
use Illuminate\Support\Facades\DB;

class EstudianteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()

    {
        /*DB::table('estudiantes')->insert([
            'nombre' => 'Gustavo' ,
            'Apellido' =>'Barahona',
            'nota'=>'78',
            'Fecha_Nacimiento' => '19970506',
            'Identidad'=>'090819976457',
            'Cuenta'=>'2015678900'

        ]);*/

/*
        DB::table('estudiantes')->insert([
            'nombre' => 'Melida' ,
            'Apellido' =>'Chacon',
            'nota'=>'77',
            'Fecha_Nacimiento' => '19890420',
            'Identidad'=>'080419896341',
            'Cuenta'=>'2010233142512'

        ]);

        */

      /*  DB::table('estudiantes')->insert([
            'nombre' => 'Luis' ,
            'Apellido' =>'Lopez',
            'nota'=>'97',
            'Fecha_Nacimiento' => '19950321',
            'Identidad'=>'07031995636',
            'Cuenta'=>'2014233044632'

        ]);

*/
       

        factory(Estudiantes::class,80)->create();
        
    }
}
