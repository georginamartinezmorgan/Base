<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Facultad;

class FacultadController extends Controller
{

    public function index(){
        $table_facultad = Facultad::paginate(7);
        return view('raizFacultad')->with('facultad',$table_facultad);
    }


    public function show($id){
        $estudiantes = Estudiantes::findOrFail($id);
        return view('EstudianteIndividual')->with('estudiantes',$estudiantes);


    }


    public function  create(){
        return view('FormularioEstudiante');
    }



    public function store(Request $_request){
        
        $nuevoestudiante = new Estudiantes();

        $nuevoestudiante->nombre=$_request->input('nombre');
        $nuevoestudiante->Apellido=$_request->input('apellido');
        $nuevoestudiante->nota=$_request->input('nota');
        $nuevoestudiante->Identidad=$_request->input('identidad');
        $nuevoestudiante->Cuenta=$_request->input('cuenta');

        $nuevoestudiante->Fecha_Nacimiento =('20000512');

        $create = $nuevoestudiante->save();

        if($create){
            return redirect()->route('estudiantes.index')->with('mensaje','El estudiante fue creado exitosamente');
        }else{
          
          
            //error
        }

        //validar
        $_request->validate(['nombre'=>'required|alpha',
        'Apellido'=>'required|alpha',
        'nota'=>'required|numeric|min:0|max:100',
        'Identidad'=>'required|unique:estudiantes,Identidad',
        'Cuenta'=>'required|numeric||unique:estudiantes,Cuenta',

        ]);




    }
    


    public function edit($id){
        $estudiantes = Estudiantes::findOrFail($id);
        return view('FormularioEditarEstudiantes')->with('estudiante',$estudiantes);

    }


    public function update(Request $_request,$id){
        
        $estudiantes = Estudiantes::findOrFail($id);

        $estudiantes->nombre=$_request->input('nombre');
        $estudiantes->Apellido=$_request->input('apellido');
        $estudiantes->nota=$_request->input('nota');
        $estudiantes->Identidad=$_request->input('identidad');
        $estudiantes->Cuenta=$_request->input('cuenta');

        $estudiantes->Fecha_Nacimiento =('20000512');

        $create = $estudiantes->save();

        if($create){
            return redirect()->route('estudiantes.index')->with('mensaje','El estudiante ha sido modifcado exitosamente');
        }else{
          
          
            //error
        }

        //validar
        $_request->validate(['nombre'=>'required|alpha',
        'Apellido'=>'required|alpha',
        'nota'=>'required|numeric|min:0|max:100',
        'Identidad'=>'required|unique:estudiantes,Identidad',
        'Cuenta'=>'required|numeric||unique:estudiantes,Cuenta',

        ]);




    }


    public function delete($id){
        Estudiantes:: destroy($id);


        return redirect('/estudiantes')->with('mensaje','Estudiantes borrado completamente');
    }

}
