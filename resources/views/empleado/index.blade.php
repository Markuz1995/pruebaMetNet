@extends('welcome')

@section('content')
<a href="{{ route('empleado.create') }}" class="btn btn-primary">Crear empleado</a>
<br>
<br>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Nombres</th>
      <th scope="col">Apellidos</th>
      <th scope="col">Cedula</th>
      <th scope="col">Telefono</th>
      <th scope="col">Empresa</th>
      <th scope="col">Cargo</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
    @foreach($empleados as $empleado)
    <tr>
      <th scope="row"> {{ $empleado->nombres }} </th>
      <td>{{ $empleado->apellidos }} </td>
      <td>{{ $empleado->cedula }} </td>
      <td>{{ $empleado->telefono }} </td>
      <td>{{  $empleado->empresa->nombre }} </td>
      <td>{{ $empleado->cargo->nombre }} </td>
      <td>
        <form action="{{ route('empleado.destroy',$empleado->id) }}" method="POST">
          <a class="btn btn-info" href="{{ route('empleado.show',$empleado->id) }}">Mostrar</a>
          <a class="btn btn-primary" href="{{ route('empleado.edit',$empleado->id) }}">Editar</a>
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger">Eliminar</button>
        </form>
      </td>
    </tr>
    @endforeach()

  </tbody>
</table>
@endsection('content')