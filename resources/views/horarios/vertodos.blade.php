@extends('layouts.app')

@section('content')
<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-10">
            <div class="text-center mx-auto">
                <h1 class="subheading">Horarios Registrados</h1>
            </div>
        </div>
        <div class="col-2">
            <a href="{{ route('horarios.new') }}" class="btn btn-success">Nuevo</a>
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
                    <th>NRC</th>
                    <th>Experiencia Educativa</th>
                    <th>Salón</th>
                    <th>Lunes</th>
                    <th>Martes</th>
                    <th>Miercoles</th>
                    <th>Jueves</th>
                    <th>Viernes</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($horarios as $key => $horario)
                <tr>
                    <td>{{ $key }}</td> 
                    <td>{{ $horario['nrc']}}</td>       
                    <td>{{ $horario['experienciaeducativa'] }}</td>
                    <td>{{ $horario['salon'] }}</td>
                    @if (array_key_exists('L',$horario))
                        <td>{{ $horario['L']['horainicio'].'-'.$horario['L']['horafin'] }}</td>
                    @else
                        <td>NA</td>
                    @endif
                    @if (array_key_exists('M',$horario))
                        <td>{{ $horario['M']['horainicio'].'-'.$horario['M']['horafin'] }}</td>
                    @else
                        <td>NA</td>
                    @endif
                    @if (array_key_exists('X',$horario))
                        <td>{{ $horario['X']['horainicio'].'-'.$horario['X']['horafin'] }}</td>
                    @else
                        <td>NA</td>
                    @endif
                    @if (array_key_exists('J',$horario))
                        <td>{{ $horario['J']['horainicio'].'-'.$horario['J']['horafin'] }}</td>
                    @else
                        <td>NA</td>
                    @endif
                    @if (array_key_exists('V',$horario))
                        <td>{{ $horario['V']['horainicio'].'-'.$horario['V']['horafin'] }}</td>
                    @else
                        <td>NA</td>
                    @endif                 
                    <td>                        
                        <small>
                            <a href="{{ route('horario.delete',['id' => $key]) }}" class="btn btn-danger btn-sm">Eliminar</a>
                        </small>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>
@endsection