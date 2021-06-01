@extends('welcome')

@section('content')
<a href="{{ route('empresa.create') }}" class="btn btn-primary">Crear empresa</a>
<br>
<br>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Nit</th>
      <th scope="col">Nombre</th>
      <th scope="col">Dirección</th>
      <th scope="col">Telefono</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
    @foreach($empresas as $empresa)
    <tr>
      <th scope="row"> {{ $empresa->nit }} </th>
      <td>{{ $empresa->nombre }} </td>
      <td>{{ $empresa->direccion }} </td>
      <td>{{ $empresa->telefono }} </td>
      <td>
        <form action="{{ route('empresa.destroy',$empresa->id) }}" method="POST">
          <a class="btn btn-info" href="{{ route('empresa.show',$empresa->id) }}">Mostrar</a>
          <a class="btn btn-primary" href="{{ route('empresa.edit',$empresa->id) }}">Editar</a>
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