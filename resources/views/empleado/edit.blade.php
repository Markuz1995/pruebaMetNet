@extends('welcome')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Editar Empleado</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('empleado.index') }}"> atras</a>
        </div>
    </div>
</div>

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

<form action="{{ route('empleado.update',$empleado->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="nombres">Nombres</label>
        <input type="text" class="form-control" id="nombres" name="nombres" value="{{ $empleado->nombres }}" placeholder="Nombres">
    </div>
    <div class="form-group">
        <label for="apellidos">Apellidos</label>
        <input type="text" class="form-control" id="apellidos" name="apellidos" value="{{ $empleado->apellidos }}" placeholder="Apellidos">
    </div>
    <div class="form-group">
        <label for="cedula">Cedula</label>
        <input type="text" class="form-control" id="cedula" name="cedula" value="{{ $empleado->cedula }}" placeholder="Cedula">
    </div>
    <div class="form-group">
        <label for="telefono">Telefono</label>
        <input type="text" class="form-control" id="telefono" name="telefono" value="{{ $empleado->telefono }}" placeholder="Telefono">
    </div>
    <div class="form-group">
        <label for="direccion">Dirección</label>
        <input type="text" class="form-control" id="direccion" name="direccion" value="{{ $empleado->direccion }}" placeholder="Dirección">
    </div>

    <div class="input-group mb-3">
        <label for="empresa">Empresa</label>
        <select class="custom-select" id="empresa" name="empresa_id">
            @foreach($empresas as $empresa)
                @if($empresa->id == $empleado->empresa_id)
                    <option value="{{ $empresa->id }}" selected> {{ $empresa->nombre }}</option>
                @else
                    <option value="{{ $empresa->id }}" > {{ $empresa->nombre }}</option>
                @endif
            @endforeach
        </select>
    </div>
    <div class="input-group mb-3">
        <label for="cargo">Cargo</label>
        <select class="custom-select" id="cargo" name="cargo_id">
            <option selected>Seleccione...</option>
            @foreach($cargos as $cargo)
                @if($cargo->id == $empleado->cargo_id)
                    <option value="{{ $cargo->id }}" selected> {{ $cargo->nombre }}</option>
                @else
                    <option value="{{ $cargo->id }}"> {{ $cargo->nombre }}</option>
                @endif
            @endforeach
        </select>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">Editar</button>
    </div>

</form>
@endsection