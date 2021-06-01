@extends('welcome')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Editar cargo</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('cargo.index') }}"> atras</a>
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

<form action="{{ route('cargo.update',$cargo->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="nombre">Nombre</label>
        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre"  value="{{ $cargo->nombre }}">
    </div>
    <div class="form-group">
        <label for="descripcion">Descripcion</label>
        <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Descripcion"  value="{{ $cargo->descripcion }}">
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">Editar</button>
    </div>

</form>
@endsection