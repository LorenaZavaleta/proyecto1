@extends('layouts.app')

@section('content')
<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-10">
            <div class="text-center mx-auto">
                <h1 class="subheading">Experiencias Educativas Registradas</h1>
            </div>
        </div>
        <div class="col-2">
            <a href="{{ route('experiencias.new') }}" class="btn btn-success">Nuevo</a>
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
                    <th>Nombre</th>
                    <th>Carrera</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($experienciaseducativas as $experienciaeducativa)
                <tr>
                    <td>{{ $experienciaeducativa->id }}</td>                    
                    <td>{{ $experienciaeducativa->nombre }}</td>
                    <td>{{ $experienciaeducativa->carrera_r->nombre }}</td>
                    <td>
                        <small>
                            <a href="{{ route('experiencia.edit', ['id' => $experienciaeducativa->id]) }}" class="btn btn-primary btn-sm">Actualizar</a>
                        </small>
                        <small>
                            <a href="{{ route('experiencia.delete', ['id' => $experienciaeducativa->id]) }}" class="btn btn-danger btn-sm">Eliminar</a>
                        </small>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>
@endsection