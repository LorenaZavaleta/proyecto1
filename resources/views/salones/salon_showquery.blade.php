@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card border-{{ $salon->class }} text-center">
          <div class="card-header text-{{ $salon->class }}">
            Información de Sal&oacute;n <b>{{ $salon->id }} ({{ $dia }}/{{ $hora }})</b>
          </div>
          <div class="card-body text-{{ $salon->class }}">
            <p><font size=4><b>Estado:</b> 
              @if ($salon->estado == 'D')
                Disponible
              @endif
              @if ($salon->estado == 'O')
                Ocupado
              @endif
              @if ($salon->estado == 'R')
                Reservado
              @endif
              @if ($salon->estado == 'X')
                No disonible
              @endif
            </font></p>
            <p><font size=4><b>Intensidad de internet:</b> {{ $salon->intensidad }}</font></p>
            <p><font size=4><b>Conectores de luz:</b> {{ $salon->conectores }}</font></p>
            <p><font size=4><b>Lugares:</b> {{ $salon->lugares }}</font></p>
          </div>
          <div class="card-footer">
            <button type="button" class="btn btn-danger" onclick="window.location.href='{{ route('salones.index') }}'">Volver</button>
          </div>
        </div>
    </div>
  </div>
</div>
@endsection