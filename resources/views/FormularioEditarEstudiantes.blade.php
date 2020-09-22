@extends('Plantilla.plantilla')
<html>

<head>


@section('titulo','Formulario Editar Estudiante')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

</head>
<body>
@section('contenido')

<br>
<br>
<br>
<h1>Estudiante</h1>



<form action= "{{route('estudiante.update',['id'=> $estudiante-> id])}} "  method="POST">
@method('put')
@csrf

<div class="form-group   col-md-2">

<label for="nombre" class="col-sm-2 col-form-label">Nombre</label>
<input type="text" class="form-control" name="nombre" id="nombre" value="{{ $estudiante->nombre }}"
placeholder="Nombre del Estudiante">
</div>


<div class="form-group  col-md-2">

<label for="apellido" class="col-sm-2 col-form-label">Apellido</label>
<input type="text" class="form-control" name="apellido" id="apellido"  value="{{ $estudiante->Apellido }}"
 placeholder="Apellido DEL EStudiante">
</div>


<div class="form-group  col-md-2">

<label for="nota" class="col-sm-2 col-form-label">Nota</label>
<input type="number" class="form-control" name="nota" id="nota"  value="{{ $estudiante->nota }}"
placeholder="1-100">
</div>

<div class="form-group  col-md-2">

<label for="nota"  class="col-sm-2 col-form-label">Identidad</label>
<input type="text" class="form-control" name="identidad" id="identidad" value="{{ $estudiante->Identidad }}"
 placeholder="0000-0000-0000">
</div>

<div class="form-group col-md-2">

<label for="nota"class="col-sm-2 col-form-label">Cuenta</label>
<input type="number" class="form-control" name="cuenta" id="cuenta"  value="{{ $estudiante->Cuenta }}"
placeholder="###########">
</div>

<br><button type="submit"  class="btn btn-primary ">Guardar</button>
  <input type="reset" class="btn btn-danger">

  <a class="btn btn-primary" href="{{route('estudiantes.index')}}">Volver</a>


</form>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>


@endsection

</html>