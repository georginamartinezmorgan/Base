@extends ('Plantilla.Madre')

@section('titulo','Lista de Estudiantes')

@section('contenido')

@if(session('mensaje'))
<div  class="alert alert-success">
      {{ session('mensaje')}}

 </div>
 @endif

<br>
<br>
<h1>Profesores <a class="btn btn-info" href="/profesor/crear">Nuevo</a></h1>

<table class="table  table-striped" Border=2px  style="width: 900px;" >
  <thead class="thead-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nombre</th>
      <th scope="col">Identidad</th>
      <th scope="col">Profesion</th>
      <th scope="col">Tipo de Contrato</th>
      <th scope="col">Ver</th>
      <th scope="col">Editar</th>
      <th scope="col">Borrar</th>

      
  </thead>
  <tbody>
  @forelse($profesors as $profesor)
    <tr  class="table-info">
      <th   scope="row">{{ $profesor->id }}</th>
      <td>{{ $profesor->nombre }}</td>
      <td >{{ $profesor->identidad}}</td>
      <td >{{ $profesor->profesion }}</td>
      <td >{{ $profesor->tipoContrato }}</td>
    <td><a  class="btn btn-info"    href="/estudiantes/{{ $estudiante->id}}">Ver</a></td>

    <td><a  class="btn btn-info"    href="/estudiantes/{{ $estudiante->id}}/editar">Editar</a></td>
    <td>
    
    <form action="{{route('estudiante.borrar',['id'=> $estudiante-> id])}} "   method="POST">
     @csrf
     @method('delete')
     <input type="submit" value="Eliminar" class="btn btn-danger">
    </form>
    </td>

    </tr>
    @empty
    <tr class="table-info">

      <td colspan="4">No hay Estudiantes</td>
      
    </tr>
    @endforelse
    
  </tbody>
</table>  

{{ $profesors->links() }}
@endsection

