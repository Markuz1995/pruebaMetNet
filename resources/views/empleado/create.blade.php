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


<form action="{{ route('empleado.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="nombres">Nombres</label>
        <input type="text" class="form-control" id="nombres" name="nombres" placeholder="Nombres">
    </div>
    <div class="form-group">
        <label for="apellidos">Apellidos</label>
        <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Apellidos">
    </div>
    <div class="form-group">
        <label for="cedula">Cedula</label>
        <input type="text" class="form-control" id="cedula" name="cedula" placeholder="Cedula">
    </div>
    <div class="form-group">
        <label for="telefono">Telefono</label>
        <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Telefono">
    </div>
    <div class="form-group">
        <label for="direccion">Dirección</label>
        <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Dirección">
    </div>

    <div class="input-group mb-3">
        <label for="empresa">Empresa</label>
        <select class="custom-select" id="empresa" name="empresa_id">
            <option selected>Seleccione...</option>
            @foreach($empresas as $empresa)
                <option value="{{ $empresa->id }}"> {{ $empresa->nombre }}</option>
            @endforeach
        </select>
    </div>
    <div class="input-group mb-3">
        <label for="cargo">Cargo</label>
        <select class="custom-select" id="cargo" name="cargo_id">
            <option selected>Seleccione...</option>
            @foreach($cargos as $cargo)
                <option value="{{ $cargo->id }}"> {{ $cargo->nombre }}</option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Crear</button>
</form>
@endsection('content')