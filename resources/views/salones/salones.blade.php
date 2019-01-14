@extends('layouts.app')

@section('content')
<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="text-center mx-auto">
                <h1 class="subheading">Salones MSICU</h1>
            </div>
        </div>
        <div class="col-md-6">
        <form class="form-inline" action="{{ route('salones.query') }}" method="POST">
        {{ csrf_field() }}
            <div class="input-group mb-2 mr-sm-2">
                <label for="dia/hora" class="control-label">Consultar otra dia/hora</label>
            </div>
            <div class="input-group mb-2 mr-sm-2">
                <select name="dia" id="dia" class="form-control" required>                                           
                    <option value="L">Lunes</option>
                    <option value="M">Martes</option>
                    <option value="X">Miércoles</option>
                    <option value="J">Jueves</option>
                    <option value="V">Viernes</option>                                         
                </select>
            </div>
            <div class="input-group mb-2 mr-sm-2">
                <select name="hora" id="hora" class="form-control" required>                                                         
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
            </div>
            <button type="submit" class="btn btn-primary mb-2">Consultar</button>
        </form>
        </div>
    </div>
</div>

<hr>

<!-- Gestión de camas -->
<div class="container">
    <div class="row">
        <div class="col-md-4 order-md-1 mb-4">
            <table class="table">
                <tbody>
                    <tr>
                        <td><b>Estado de sal&oacute;n</b></td>
                    </tr>
                    <tr>
                        <td><button type="button" class="btn btn-success btn-sm">&nbsp;</button> - Disponible</td>
                    </tr>
                    <tr>
                        <td><button type="button" class="btn btn-danger btn-sm">&nbsp;</button> - No disponible</td>
                    </tr>
                    <tr>
                        <td><button type="button" class="btn btn-secondary btn-sm">&nbsp;</button> - Ocupado</td>
                    </tr>
                    <tr>
                        <td><button type="button" class="btn btn-warning btn-sm">&nbsp;</button> - Reservado</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-md-8 order-md-2">
            <table class="table">
                <tbody align="center">
                    <tr>
                        <td>
                            <button onclick="window.location.href='{{ route('salones.get', ['id' => 113]) }}'" type="button" class="btn btn-{{ $salones->where('id', 113)->first()->class }} btn-sm">Sal&oacute;n <br> 113</button>
                        </td>
                        <td colspan="6">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>
                            <button onclick="window.location.href='{{ route('salones.get', ['id' => 112]) }}'" type="button" class="btn btn-{{ $salones->where('id', 112)->first()->class }} btn-sm">Sal&oacute;n <br> 112</button>
                        </td>
                        <td colspan="6">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>
                            <button onclick="window.location.href='{{ route('salones.get', ['id' => 111]) }}'" type="button" class="btn btn-{{ $salones->where('id', 111)->first()->class }} btn-sm">Sal&oacute;n <br> 111</button>
                        </td>
                        <td colspan="6">&nbsp;</td>
                    </tr>
                    <tr>
                        <td colspan="7">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="btn-group-vertical">
                                <button type="button" class="btn btn-secondary disabled btn-sm">Sal&oacute;n <br> S/N</button>
                                <button type="button" class="btn btn-primary btn-sm" disabled>Ba&ntilde;o Mujeres</button>
                            </div>
                        </td>
                        <td colspan="6">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="btn-group-vertical">
                                <button onclick="window.location.href='{{ route('salones.get', ['id' => 108]) }}'" type="button" class="btn btn-{{ $salones->where('id', 108)->first()->class }} btn-sm">Sal&oacute;n <br> 108</button>
                                <button type="button" class="btn btn-primary btn-sm" disabled>Ba&ntilde;o Hombres</button>
                            </div>
                        </td>
                        <td colspan="5">&nbsp;</td>
                        <td>
                            <button onclick="window.location.href='{{ route('salones.get', ['id' => 107]) }}'" type="button" class="btn btn-{{ $salones->where('id', 107)->first()->class }} btn-sm">Sal&oacute;n <br> 107</button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <button onclick="window.location.href='{{ route('salones.get', ['id' => 106]) }}'" type="button" class="btn btn-{{ $salones->where('id', 106)->first()->class }} btn-sm">Sal&oacute;n <br> 106</button>
                        </td>
                        <td>
                            <button onclick="window.location.href='{{ route('salones.get', ['id' => 105]) }}'" type="button" class="btn btn-{{ $salones->where('id', 105)->first()->class }} btn-sm">Sal&oacute;n <br> 105</button>
                        </td>
                        <td>
                            <button onclick="window.location.href='{{ route('salones.get', ['id' => 104]) }}'" type="button" class="btn btn-{{ $salones->where('id', 104)->first()->class }} btn-sm">Sal&oacute;n <br> 104</button>
                        </td>
                        <td>&nbsp;</td>
                        <td>
                            <button onclick="window.location.href='{{ route('salones.get', ['id' => 103]) }}'"  type="button" class="btn btn-{{ $salones->where('id', 103)->first()->class }} btn-sm">Sal&oacute;n <br> 103</button>
                        </td>
                        <td>
                            <button onclick="window.location.href='{{ route('salones.get', ['id' => 102]) }}'"  type="button" class="btn btn-{{ $salones->where('id', 102)->first()->class }} btn-sm">Sal&oacute;n <br> 102</button>
                        </td>
                        <td>
                            <button onclick="window.location.href='{{ route('salones.get', ['id' => 101]) }}'" type="button" class="btn btn-{{ $salones->where('id', 101)->first()->class }} btn-sm">Sal&oacute;n <br> 101</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection