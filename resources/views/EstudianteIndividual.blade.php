@extends('Plantilla.plantilla')

<style>



</style>
@section('titulo','Estudiante')

@section('contenido')
<h1>Detalle del Estudiante {{ $estudiantes->nombre}}</h1>
<table class="table" Border=2px   style="width: 600px;"  style="margin: 0 auto;">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Campo</th>
      <th scope="col">Valor</th>
    </tr>
  </thead>
  <tbody>
    <tr class="table-info" >
      <th scope="row">Nombre</th>
      <td>{{ $estudiantes->nombre }}</td>
    </tr>

    <tr class="table-info">
      <th scope="row">Apellido</th>
      <td>{{ $estudiantes->Apellido }}</td>
    </tr>
    <tr class="table-info">
      <th scope="row">Nota</th>
      <td>{{ $estudiantes->nota }}</td>
    </tr>

    <tr class="table-info">
      <th scope="row">Fecha Nacimiento</th>
      <td>{{ $estudiantes->Fecha_Nacimiento }}</td>
    </tr>

    <tr class="table-info">
      <th scope="row">Identidad</th>
      <td>{{ $estudiantes->Identidad}}</td>
    </tr>

    <tr class="table-info">
      <th scope="row">Numero de Cuenta</th>
      <td>{{ $estudiantes->Cuenta }}</td>
    </tr>

  </tbody>
</table>  

<a class="btn btn-primary" href="{{route('estudiantes.index')}}">Volver</a>
@endsection


