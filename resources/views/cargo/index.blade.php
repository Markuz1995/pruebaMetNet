@extends('welcome')

@section('content')
<a href="{{ route('cargo.create') }}" class="btn btn-primary">Crear cargo</a>
<br>
<br>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Descricion</th>
    </tr>
  </thead>
  <tbody>
    @foreach($cargos as $cargo)
    <tr>
      <td>{{ $cargo->nombre }} </td>
      <td>{{ $cargo->descripcion }} </td>
      <td>
        <form action="{{ route('cargo.destroy',$cargo->id) }}" method="POST">
          <a class="btn btn-info" href="{{ route('cargo.show',$cargo->id) }}">Mostrar</a>
          <a class="btn btn-primary" href="{{ route('cargo.edit',$cargo->id) }}">Editar</a>
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger">Eliminar</button>
        </form>
      </td>
    </tr>
    @endforeach

  </tbody>
</table>
@endsection('content')