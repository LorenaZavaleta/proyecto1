@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4>Edici&oacute;n de Experiencia Educativa</h4>
                </div>

                <div class="panel-body">
                    <form class="form-horizontal" action="{{ route('experiencia.save') }}" method="POST">
                        {{ csrf_field() }}
                        <input id="id_old" type="hidden" name="id_old" value="{{ $experienciaeducativa->id }}">
                        <div class="panel panel-success">
                            <div class="panel-heading"><b>Información de la Experiencia educativa</b></div>
                            <div class="panel-body">
                                <div class="form-group">
                                    <label for="nombre" class="col-md-4 control-label">NRC</label>
                                    <div class="col-md-6">
                                        <input id="id" type="text" class="form-control" name="id" value="{{ $experienciaeducativa->id }}" placeholder="NRC (id)" required>
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
                                        <input id="nombre" type="text" class="form-control" name="nombre" value="{{ $experienciaeducativa->nombre }}" placeholder="Nombre de la experiencia educativa">
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
                                            <option value="0" disabled>Selecciona una carrera</option>
                                            @foreach($carreras as $carrera)
                                                <option value="{{ $carrera->id }}" @if ($carrera->id == $experienciaeducativa->carrera) selected @endif >{{ $carrera->nombre }}</option>
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