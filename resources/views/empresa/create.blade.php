@extends('welcome')

@section('content')
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


<form action="{{ route('empresa.store') }}" method="POST">
@csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Nit</label>
    <input type="text" class="form-control" id="nit" name="nit"  placeholder="Nit">
  </div>
  <div class="form-group">
    <label for="nombre">Nombre</label>
    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre">
  </div>
  <div class="form-group">
    <label for="direccion">Dirección</label>
    <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Dirección">
  </div>
  <div class="form-group">
    <label for="telefono">Telefono</label>
    <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Telefono">
  </div>
  <button type="submit" class="btn btn-primary">Crear</button>
</form>
@endsection('content')