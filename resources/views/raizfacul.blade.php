@extends ('Plantilla.Madre')

@section('titulo','Lista de Facultades')

@section('contenido')

<br>
<br>
<h1>Facultades</h1>

<table class="table  table-striped" Border=2px  style="width: 900px;" >
  <thead class="thead-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Codigo</th>
      <th scope="col">Descripcion</th>
      <th scope="col">CantidadEdificios</th>
      <th scope="col">Nombrede Decenso</th>
      
  </thead>
  <tbody>
  @forelse($faculs as $facultad)
    <tr  class="table-info">
      <th   scope="row">{{ $facultad->id }}</th>
      <td > {{ $facultad-> Codigo}}</td>
      <td>{{ $facultad-> Descripcion }}</td>
      <td >{{ $facultad-> CantidadEdificios }}</td>
      <td >{{ $facultad-> NombreDecano}}</td>
    
    </tr>
    @empty
    <tr class="table-info">

      <td colspan="4">No hay Estudiantes</td>
      
    </tr>
    @endforelse
    
  </tbody>
</table>  

{{ @faculs->links() }}
@endsection
