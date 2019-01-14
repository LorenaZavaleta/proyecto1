@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4>Edici&oacute;n de Carrera</h4>
                </div>

                <div class="panel-body">
                    <form class="form-horizontal" action="{{ route('carrera.save') }}" method="POST">
                        {{ csrf_field() }}
                        <input id="id" type="hidden" name="id" value="{{ $carrera->id }}">

                        <div class="panel panel-success">
                            <div class="panel-heading"><b>Información de la carrera</b></div>
                            <div class="panel-body">
                                <div class="form-group">
                                    <label for="nombre" class="col-md-4 control-label">Nombre</label>
                                    <div class="col-md-6">
                                        <input id="nombre" type="text" class="form-control" name="nombre" value="{{ $carrera->nombre }}" placeholder="Nombre de la carrera">
                                        @if ($errors->has('nombre'))
                                            <div class="alert alert-danger" role="alert">
                                                {{ $errors->first('nombre') }}
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