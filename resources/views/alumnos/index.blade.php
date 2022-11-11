@extends('alumnos.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Listado de Alumnos</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('alumnos.create') }}"> Crear nuevo alumno</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))

        <div class="alert alert-success alert-dismissible mt-3 ">
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            <p>{{ $message }}</p> 
        </div>
    @endif
   
    <table class="table table-bordered mt-3">
        <tr>
            <th>No</th>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Edad</th>
            <th width="280px">Opciones</th>
        </tr>
        @foreach ($alumnos as $alumno)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $alumno->nombre }}</td>
            <td>{{ $alumno->apellido }}</td>
            <td>{{ $alumno->edad }}</td>
            <td>
                <form action="{{ route('alumnos.destroy',$alumno->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('alumnos.show',$alumno->id) }}">Mostrar</a>
    
                    <a class="btn btn-primary" href="{{ route('alumnos.edit',$alumno->id) }}">Editar</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $alumnos->links() !!}
      
@endsection