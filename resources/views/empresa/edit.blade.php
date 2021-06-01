@extends('welcome')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Editar Empresa</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('empresa.index') }}"> atras</a>
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

<form action="{{ route('empresa.update',$empresa->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="exampleInputEmail1">Nit</label>
        <input type="text" class="form-control" id="nit" name="nit" placeholder="Nit"  value="{{ $empresa->nit }}">
    </div>
    <div class="form-group">
        <label for="nombre">Nombre</label>
        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre"  value="{{ $empresa->nombre }}">
    </div>
    <div class="form-group">
        <label for="direccion">Dirección</label>
        <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Dirección"  value="{{ $empresa->direccion }}">
    </div>
    <div class="form-group">
        <label for="telefono">Telefono</label>
        <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Telefono"  value="{{ $empresa->telefono }}">
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">Editar</button>
    </div>

</form>
@endsection