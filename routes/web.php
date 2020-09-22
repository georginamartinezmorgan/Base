<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('plantilla', function () {
    return view('Plantilla/plantilla');
});





//Grupo de rutas  para estudiante
Route::get('/facultad','FaculController@index')->name('facultad.index');

Route::get('/profesor','ProfesorController@index')->name('profesor.index');

Route::get('/estudiantes','Estudiante@index')->name('estudiantes.index');

Route::get('/estudiantes/{id}','Estudiante@show')->name('estudiantes.show')->where('id', '[0-9]+');


Route::get('/estudiantes/crear','Estudiante@create')->name('estudiante.crear');
Route::post('estudiantes/crear','Estudiante@store')->name('estudiante.guardar');


Route::get('/estudiantes/{id}/editar','Estudiante@edit') ->name('estudiante.editar') -> where('id' ,'[0-9]+');

Route::put('/estudiantes/{id}/editar','Estudiante@update')->name('estudiante.update') -> where('id' ,'[0-9]+');


Route::delete('/estudiantes/{id}/borrar','Estudiante@delete')->name('estudiante.borrar')->where('id','[0-9]+');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/empleado','EmpleadoController@index')->name('empleado.index');