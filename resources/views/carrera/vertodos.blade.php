@extends('layouts.app')

@section('content')
<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-10">
            <div class="text-center mx-auto">
                <h1 class="subheading">Carreras Registradas</h1>
            </div>
        </div>
        <div class="col-2">
            <a href="{{ route('carreras.new') }}" class="btn btn-success">Nuevo</a>
        </div>
    </div>
</div>

<hr>

<!-- Tabla horarios -->
<div class="container">
    <div class="table table-responsive">
        <table class="table table-striped table-hover">
            <thead>
                <tr class="info">
                    <th>ID</th>
                    <th>Carrera</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($carreras as $carrera)
                <tr>
                    <td>{{ $carrera->id }}</td>                    
                    <td>{{ $carrera->nombre }}</td>
                    <td>
                        <small>
                            <a href="{{ route('carrera.edit', ['id' => $carrera->id]) }}" class="btn btn-primary btn-sm">Actualizar</a>
                        </small>
                        <small>
                            <a href="{{ route('carrera.delete', ['id' => $carrera->id]) }}" class="btn btn-danger btn-sm">Eliminar</a>
                        </small>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>
@endsection