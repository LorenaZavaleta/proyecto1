@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4>Registrar nuevo horario</h4>
                </div>

                <div class="panel-body">
                    <form class="form-horizontal" action="{{ route('horario.new') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="panel panel-success">
                            <div class="panel-heading"><b>Información de Horario</b></div>
                            <div class="panel-body">
                                <div class="form-group">
                                    <label for="experienciaeducativa" class="col-md-4 control-label">Experiencia Educativa</label>
                                    <div class="col-md-6">
                                        <select name="experienciaeducativa" id="experienciaeducativa" class="form-control" required>
                                            <option value="0" disabled selected>Selecciona una experiencia educativa</option>
                                            @foreach($experienciaseducativas as $experienciaeducativa)
                                                <option value="{{ $experienciaeducativa->id }}">{{ $experienciaeducativa->id }}</option>
                                            @endforeach
                                        </select>
                                        @if ($errors->has('experienciaeducativa'))
                                            <div class="alert alert-danger" role="alert">
                                                {{ $errors->first('experienciaeducativa') }}
                                            </div>
                                        @endif
                                    </div>
                                <div class="form-group">
                                    <label for="salon" class="col-md-4 control-label">Salón</label>
                                    <div class="col-md-6">
                                        <select name="salon" id="salon" class="form-control" required>
                                            <option value="0" disabled selected>Selecciona un salón</option>
                                            @foreach($salones as $salon)
                                                <option value="{{ $salon->id }}">{{ $salon->id }}</option>
                                            @endforeach
                                        </select>
                                        @if ($errors->has('salon'))
                                            <div class="alert alert-danger" role="alert">
                                                {{ $errors->first('salon') }}
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="lunes" class="col-md-4 control-label">Lunes</label>
                                    <div class="col-md-6">
                                        Inicio
                                        <select name="lhorainicio" id="lhorainicio" class="form-control" required>
                                            <option value="0" selected>No aplica</option>                                            
                                            <option value="07:00">07:00</option>
                                            <option value="08:00">08:00</option>
                                            <option value="09:00">09:00</option>
                                            <option value="10:00">10:00</option>
                                            <option value="11:00">11:00</option>
                                            <option value="12:00">12:00</option>
                                            <option value="13:00">13:00</option>
                                            <option value="14:00">14:00</option>
                                            <option value="15:00">15:00</option>
                                            <option value="16:00">16:00</option>
                                            <option value="17:00">17:00</option>
                                            <option value="18:00">18:00</option>
                                            <option value="19:00">19:00</option>
                                            <option value="20:00">20:00</option>                                           
                                        </select>
                                        @if ($errors->has('lhorainicio'))
                                            <div class="alert alert-danger" role="alert">
                                                {{ $errors->first('lhorainicio') }}
                                            </div>
                                        @endif
                                    </div>
                                    <div class="col-md-6">
                                        Fin: 
                                        <select name="lhorafin" id="lhorafin" class="form-control" required>
                                            <option value="0" selected>No aplica</option>                                                                                        
                                            <option value="08:00">08:00</option>
                                            <option value="09:00">09:00</option>
                                            <option value="10:00">10:00</option>
                                            <option value="11:00">11:00</option>
                                            <option value="12:00">12:00</option>
                                            <option value="13:00">13:00</option>
                                            <option value="14:00">14:00</option>
                                            <option value="15:00">15:00</option>
                                            <option value="16:00">16:00</option>
                                            <option value="17:00">17:00</option>
                                            <option value="18:00">18:00</option>
                                            <option value="19:00">19:00</option>
                                            <option value="20:00">20:00</option>  
                                            <option value="21:00">21:00</option>                                         
                                        </select>
                                        @if ($errors->has('lhorafin'))
                                            <div class="alert alert-danger" role="alert">
                                                {{ $errors->first('lhorafin') }}
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="martes" class="col-md-4 control-label">Martes</label>
                                    <div class="col-md-6">
                                        Inicio
                                        <select name="mhorainicio" id="mhorainicio" class="form-control" required>
                                            <option value="0" selected>No aplica</option>                                            
                                            <option value="07:00">07:00</option>
                                            <option value="08:00">08:00</option>
                                            <option value="09:00">09:00</option>
                                            <option value="10:00">10:00</option>
                                            <option value="11:00">11:00</option>
                                            <option value="12:00">12:00</option>
                                            <option value="13:00">13:00</option>
                                            <option value="14:00">14:00</option>
                                            <option value="15:00">15:00</option>
                                            <option value="16:00">16:00</option>
                                            <option value="17:00">17:00</option>
                                            <option value="18:00">18:00</option>
                                            <option value="19:00">19:00</option>
                                            <option value="20:00">20:00</option>                                           
                                        </select>
                                        @if ($errors->has('mhorainicio'))
                                            <div class="alert alert-danger" role="alert">
                                                {{ $errors->first('mhorainicio') }}
                                            </div>
                                        @endif
                                    </div>
                                    <div class="col-md-6">
                                        Fin: 
                                        <select name="mhorafin" id="mhorafin" class="form-control" required>
                                            <option value="0" selected>No aplica</option>                                                                                        
                                            <option value="08:00">08:00</option>
                                            <option value="09:00">09:00</option>
                                            <option value="10:00">10:00</option>
                                            <option value="11:00">11:00</option>
                                            <option value="12:00">12:00</option>
                                            <option value="13:00">13:00</option>
                                            <option value="14:00">14:00</option>
                                            <option value="15:00">15:00</option>
                                            <option value="16:00">16:00</option>
                                            <option value="17:00">17:00</option>
                                            <option value="18:00">18:00</option>
                                            <option value="19:00">19:00</option>
                                            <option value="20:00">20:00</option>  
                                            <option value="21:00">21:00</option>                                         
                                        </select>
                                        @if ($errors->has('mhorafin'))
                                            <div class="alert alert-danger" role="alert">
                                                {{ $errors->first('mhorafin') }}
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="miercoles" class="col-md-4 control-label">Miercoles</label>
                                    <div class="col-md-6">
                                        Inicio
                                        <select name="xhorainicio" id="xhorainicio" class="form-control" required>
                                            <option value="0" selected>No aplica</option>                                            
                                            <option value="07:00">07:00</option>
                                            <option value="08:00">08:00</option>
                                            <option value="09:00">09:00</option>
                                            <option value="10:00">10:00</option>
                                            <option value="11:00">11:00</option>
                                            <option value="12:00">12:00</option>
                                            <option value="13:00">13:00</option>
                                            <option value="14:00">14:00</option>
                                            <option value="15:00">15:00</option>
                                            <option value="16:00">16:00</option>
                                            <option value="17:00">17:00</option>
                                            <option value="18:00">18:00</option>
                                            <option value="19:00">19:00</option>
                                            <option value="20:00">20:00</option>                                           
                                        </select>
                                        @if ($errors->has('xhorainicio'))
                                            <div class="alert alert-danger" role="alert">
                                                {{ $errors->first('xhorainicio') }}
                                            </div>
                                        @endif
                                    </div>
                                    <div class="col-md-6">
                                        Fin: 
                                        <select name="xhorafin" id="xhorafin" class="form-control" required>
                                            <option value="0" selected>No aplica</option>                                                                                        
                                            <option value="08:00">08:00</option>
                                            <option value="09:00">09:00</option>
                                            <option value="10:00">10:00</option>
                                            <option value="11:00">11:00</option>
                                            <option value="12:00">12:00</option>
                                            <option value="13:00">13:00</option>
                                            <option value="14:00">14:00</option>
                                            <option value="15:00">15:00</option>
                                            <option value="16:00">16:00</option>
                                            <option value="17:00">17:00</option>
                                            <option value="18:00">18:00</option>
                                            <option value="19:00">19:00</option>
                                            <option value="20:00">20:00</option>  
                                            <option value="21:00">21:00</option>                                         
                                        </select>
                                        @if ($errors->has('xhorafin'))
                                            <div class="alert alert-danger" role="alert">
                                                {{ $errors->first('xhorafin') }}
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="jueves" class="col-md-4 control-label">Jueves</label>
                                    <div class="col-md-6">
                                        Inicio
                                        <select name="jhorainicio" id="jhorainicio" class="form-control" required>
                                            <option value="0" selected>No aplica</option>                                            
                                            <option value="07:00">07:00</option>
                                            <option value="08:00">08:00</option>
                                            <option value="09:00">09:00</option>
                                            <option value="10:00">10:00</option>
                                            <option value="11:00">11:00</option>
                                            <option value="12:00">12:00</option>
                                            <option value="13:00">13:00</option>
                                            <option value="14:00">14:00</option>
                                            <option value="15:00">15:00</option>
                                            <option value="16:00">16:00</option>
                                            <option value="17:00">17:00</option>
                                            <option value="18:00">18:00</option>
                                            <option value="19:00">19:00</option>
                                            <option value="20:00">20:00</option>                                           
                                        </select>
                                        @if ($errors->has('jhorainicio'))
                                            <div class="alert alert-danger" role="alert">
                                                {{ $errors->first('jhorainicio') }}
                                            </div>
                                        @endif
                                    </div>
                                    <div class="col-md-6">
                                        Fin: 
                                        <select name="jhorafin" id="jhorafin" class="form-control" required>
                                            <option value="0" selected>No aplica</option>                                                                                        
                                            <option value="08:00">08:00</option>
                                            <option value="09:00">09:00</option>
                                            <option value="10:00">10:00</option>
                                            <option value="11:00">11:00</option>
                                            <option value="12:00">12:00</option>
                                            <option value="13:00">13:00</option>
                                            <option value="14:00">14:00</option>
                                            <option value="15:00">15:00</option>
                                            <option value="16:00">16:00</option>
                                            <option value="17:00">17:00</option>
                                            <option value="18:00">18:00</option>
                                            <option value="19:00">19:00</option>
                                            <option value="20:00">20:00</option>  
                                            <option value="21:00">21:00</option>                                         
                                        </select>
                                        @if ($errors->has('jhorafin'))
                                            <div class="alert alert-danger" role="alert">
                                                {{ $errors->first('jhorafin') }}
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="viernes" class="col-md-4 control-label">Viernes</label>
                                    <div class="col-md-6">
                                        Inicio
                                        <select name="vhorainicio" id="vhorainicio" class="form-control" required>
                                            <option value="0" selected>No aplica</option>                                            
                                            <option value="07:00">07:00</option>
                                            <option value="08:00">08:00</option>
                                            <option value="09:00">09:00</option>
                                            <option value="10:00">10:00</option>
                                            <option value="11:00">11:00</option>
                                            <option value="12:00">12:00</option>
                                            <option value="13:00">13:00</option>
                                            <option value="14:00">14:00</option>
                                            <option value="15:00">15:00</option>
                                            <option value="16:00">16:00</option>
                                            <option value="17:00">17:00</option>
                                            <option value="18:00">18:00</option>
                                            <option value="19:00">19:00</option>
                                            <option value="20:00">20:00</option>                                           
                                        </select>
                                        @if ($errors->has('vhorainicio'))
                                            <div class="alert alert-danger" role="alert">
                                                {{ $errors->first('vhorainicio') }}
                                            </div>
                                        @endif
                                    </div>
                                    <div class="col-md-6">
                                        Fin: 
                                        <select name="vhorafin" id="vhorafin" class="form-control" required>
                                            <option value="0" selected>No aplica</option>                                                                                        
                                            <option value="08:00">08:00</option>
                                            <option value="09:00">09:00</option>
                                            <option value="10:00">10:00</option>
                                            <option value="11:00">11:00</option>
                                            <option value="12:00">12:00</option>
                                            <option value="13:00">13:00</option>
                                            <option value="14:00">14:00</option>
                                            <option value="15:00">15:00</option>
                                            <option value="16:00">16:00</option>
                                            <option value="17:00">17:00</option>
                                            <option value="18:00">18:00</option>
                                            <option value="19:00">19:00</option>
                                            <option value="20:00">20:00</option>  
                                            <option value="21:00">21:00</option>                                         
                                        </select>
                                        @if ($errors->has('vhorafin'))
                                            <div class="alert alert-danger" role="alert">
                                                {{ $errors->first('vhorafin') }}
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