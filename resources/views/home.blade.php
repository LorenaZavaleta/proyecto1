@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-success" align="center">
                <div class="card-header">Bienvenido(a) {{$usuario->nombre}}</div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <main class="py-4">
        @yield('content')
    </main>
</div>
@endsection
