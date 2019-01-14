<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carrera;
use Validator;
use Illuminate\Support\Facades\Session as Session;

class CarreraController extends Controller
{
    public function index(){
        $carreras = Carrera::all();
        return view('carrera.vertodos',['carreras' => $carreras]);
    }

    public function edit($id){
        $carrera = Carrera::find($id);
        return view('carrera.editar',['carrera' => $carrera]);
    }

    public function new(Request $request){
        $nombre = $request->nombre;
    
        //Validaciones
        $validator = Validator::make($request->all(), [
            'nombre' => ['required', 'string', 'max:150']
        ]);

        if ($validator->fails()) {
            return view('carrera.registrar')->withErrors($validator);
        }else{
            $data = new Carrera;
            $data->nombre = $nombre;   
            $data->save();
            session()->flash('message', '¡Carrera registrada!');
            return Redirect()->Route('carreras.index');
        }
    }

    public function save(Request $request){
        $id = $request->id;
        $nombre = $request->nombre;
    
        //Validaciones
        $validator = Validator::make($request->all(), [
            'id' => ['required'],
            'nombre' => ['required', 'string', 'max:150']
        ]);

        if ($validator->fails()) {
            if($id == ''){
                session()->flash('messageerror', '¡Error al buscar la carrera a editar!');
                return Redirect()->Route('carreras.index');
            }else{
                $data = Carrera::find($id);
                return view('carrera.editar',['carrera' => $data])->withErrors($validator);
            }
        }else{
            $data = Carrera::find($id);
            $data->nombre = $nombre;   
            $data->save();
            session()->flash('message', '¡Carrera guardada!');
            return Redirect()->Route('carreras.index');
        }
    }

    public function delete($id){
        $carrera = Carrera::find($id);
        $carrera->delete();
        session()->flash('message', '¡Carrera Eliminada!');
        return Redirect()->Route('carreras.index');
    }
}
