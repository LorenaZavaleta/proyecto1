<?php

//Ruta para vistas estaticas
Route::get('/', function () {
    return view('welcome');
})->name('index.1');

Route::get('/registro',function (){
    return view('auth\register');
})->name('registro')->middleware('session');

Route::get('/login',function (){
    return view('auth\login');
})->name('login')->middleware('login');

//Rutas para salones
Route::get('/salones','SalonController@index')->name('salones.index');
Route::post('/salones','SalonController@diahora')->name('salones.query');
Route::get('/salon/{id}','SalonController@get')->name('salones.get');
Route::get('/salon/{id}/{dia}/{hora}','SalonController@salondiahora')->name('salon.query');

//Rutas para usuarios
Route::post('/usuario','UsuarioController@new')->name('usuarios.new')->middleware('session');
Route::post('/usuario/auth','UsuarioController@auth')->name('usuarios.auth');
Route::get('/usuario/exit','UsuarioController@exit')->name('usuarios.exit')->middleware('session');

//Rutas para carreras
Route::get('/carreras','CarreraController@index')->name('carreras.index')->middleware('session');
route::get('/carreras/new',function (){ return view('carrera.registrar');})->name('carreras.new')->middleware('session');
Route::post('/carrera','CarreraController@new')->name('carrera.new')->middleware('session');
Route::get('/carrera/eliminar/{id}','CarreraController@delete')->name('carrera.delete')->middleware('session');
Route::get('/carrera/editar/{id}','CarreraController@edit')->name('carrera.edit')->middleware('session');
Route::post('/carrera/editar','CarreraController@save')->name('carrera.save')->middleware('session');

//Rutas para Experiencia Educativa
Route::get('/experienciaseducativas','ExperienciaeducativaController@index')->name('experiencias.index')->middleware('session');
route::get('/experienciaseducativas/new','ExperienciaeducativaController@vistanuevo')->name('experiencias.new')->middleware('session');
Route::post('/experienciaeducativa','ExperienciaeducativaController@new')->name('experiencia.new')->middleware('session');
Route::get('/experienciaeducativa/eliminar/{id}','ExperienciaeducativaController@delete')->name('experiencia.delete')->middleware('session');
Route::get('/experienciaeducativa/editar/{id}','ExperienciaeducativaController@edit')->name('experiencia.edit')->middleware('session');
Route::post('/experienciaeducativa/editar','ExperienciaeducativaController@save')->name('experiencia.save')->middleware('session');

//Rutas para Horarios
Route::get('/horarios','HorarioController@index')->name('horarios.index')->middleware('session');
route::get('/horarios/new','HorarioController@vistanuevo')->name('horarios.new')->middleware('session');
Route::post('/horario','HorarioController@new')->name('horario.new')->middleware('session');
Route::get('/horario/eliminar/{id}','HorarioController@delete')->name('horario.delete')->middleware('session');



/***************************************/
//  Viejas rutas
/*
Route::get('/salones', 'SalonController@index')->name('salones_index');
Route::get('/salones/{registro}/mostrar', 'SalonController@show')->name('salones_show');
Route::get('/registro', 'Auth\RegisterController@index')->name('register')->middleware('auth');
//Route::get('/registro', 'Auth\RegisterController@index')->name('register');
Route::post('/registro', 'Auth\RegisterController@register')->name('register');
Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

/*RUTAS PARA LOS HORARIOS
/*Consulta de horarios
Route::get('/horario', 'HorarioController@index')->name('horario_index')->middleware('auth');
/*Registro de horarios
Route::get('/horario/registrar', 'HorarioController@create')->name('horario_create')->middleware('auth');
/*Creación de horarios
Route::post('/horario', 'HorarioController@store')->name('horario_store')->middleware('auth');
/*Edición de horarios
Route::get('/horario/{registro}/editar', 'HorarioController@edit')->name('horario_edit')->middleware('auth');
Route::put('/horario/{registro}', 'HorarioController@update')->name('horario_update')->middleware('auth');
Route::get('/horario/{id}', 'HorarioController@show')->name('horario_show')->middleware('auth');

/*RUTAS PARA LAS RESERVACIONES
/*Consulta de reservaciones
Route::get('reservacion', 'ReservacionController@index')->name('reservacion_index')->middleware('auth');
/*Registro de reservaciones
Route::get('/reservacion/registrar', 'ReservacionController@create')->name('reservacion_create')->middleware('auth');
/*Creación de reservaciones
Route::post('/reservacion', 'ReservacionController@store')->name('reservacion_store')->middleware('auth');
/*Edición de reservaciones
Route::get('/reservacion/{registro}/editar', 'ReservacionController@edit')->name('reservacion_edit')->middleware('auth');
Route::put('/reservacion/{registro}', 'ReservacionController@update')->name('reservacion_update')->middleware('auth');
Route::get('/home', 'HomeController@index')->name('home');
*/