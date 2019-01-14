@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4>Registrar nueva Experiencia Educativa</h4>
                </div>

                <div class="panel-body">
                    <form class="form-horizontal" action="{{ route('experiencia.new') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="panel panel-success">
                            <div class="panel-heading"><b>Información de la Experiencia Educativa</b></div>
                            <div class="panel-body">
                                <div class="form-group">
                                    <label for="nombre" class="col-md-4 control-label">NRC</label>
                                    <div class="col-md-6">
                                        <input id="id" type="text" class="form-control" name="id" value="{{ old('id') }}" placeholder="NRC (id)" required>
                                        @if ($errors->has('id'))
                                            <div class="alert alert-danger" role="alert">
                                                {{ $errors->first('id') }}
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="nombre" class="col-md-4 control-label">Nombre</label>
                                    <div class="col-md-6">
                                        <input id="nombre" type="text" class="form-control" name="nombre" value="{{ old('nombre') }}" placeholder="Nombre de la experiencia educativa" required>
                                        @if ($errors->has('nombre'))
                                            <div class="alert alert-danger" role="alert">
                                                {{ $errors->first('nombre') }}
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="carrera" class="col-md-4 control-label">Carrera</label>
                                    <div class="col-md-6">
                                        <select name="carrera" id="carrera" class="form-control" required>
                                            <option value="0" disabled selected>Selecciona una carrera</option>
                                            @foreach($carreras as $carrera)
                                                <option value="{{ $carrera->id }}">{{ $carrera->nombre }}</option>
                                            @endforeach
                                        </select>
                                        @if ($errors->has('carrera'))
                                            <div class="alert alert-danger" role="alert">
                                                {{ $errors->first('carrera') }}
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class='col-sm-6'>
                                <button type="submit" class='btn btn-primary'>Guardar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection