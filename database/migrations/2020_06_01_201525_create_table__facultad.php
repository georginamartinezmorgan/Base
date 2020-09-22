<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableFacultad extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table__facultad', function (Blueprint $table) {
            $table->id();
            $table->Integer('Codigo')->unique;
            $table->text('Descripcion');
            $table->Integer('CantidadEdificios');
            $table->string('NombreDescano');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table__facultad');
    }
}
