@extends('alumnos.layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Agregar nuevo alumno</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('alumnos.index') }}"> Volver</a>
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger alert-dismissible mt-3">
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        <strong>Whoops!</strong> Hay problemas con los datos ingresados.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('alumnos.store') }}" method="POST">
    @csrf

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nombres:</strong>
                <input type="text" name="nombre" class="form-control" value="{{old('nombre')}}" placeholder="Nombres">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Apellidos:</strong>
                <input type="text" name="apellido" class="form-control" value="{{old('apellido')}}" placeholder="Apellidos">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Edad:</strong>
                <input type="number" name="edad" class="form-control" value="{{old('edad')}}" placeholder="Edad">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
    </div>
   
</form>
@endsection