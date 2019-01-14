<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Experienciaeducativa;
use App\Carrera;
use Validator;
use Illuminate\Support\Facades\Session as Session;

class ExperienciaeducativaController extends Controller
{
    public function index(){
        $experienciaseducativas = Experienciaeducativa::with('carrera_r')->get();            
        return view('experienciaeducativa.vertodos',['experienciaseducativas' => $experienciaseducativas]);
    }

    public function vistanuevo(){
        $carreras = Carrera::all();
        return view('experienciaeducativa.registrar',['carreras' => $carreras]); 
    }

    public function edit($id){
        $experienciaeducativa = Experienciaeducativa::find($id);
        $carreras = Carrera::all();
        return view('experienciaeducativa.editar',['experienciaeducativa' => $experienciaeducativa,'carreras' => $carreras]);
    }

    public function new(Request $request){
        $id = $request->id;
        $nombre = $request->nombre;
        $carrera = $request->carrera;

    
        //Validaciones
        $validator = Validator::make($request->all(), [
            'id' => ['required', 'integer', 'max:999999'],
            'nombre' => ['required', 'string', 'max:150'],
            'carrera' => ['required', 'integer']
        ]);

        if ($validator->fails()) {
            $carreras = Carrera::all();
            return view('experienciaeducativa.registrar',['carreras' => $carreras])->withErrors($validator);
        }else{
            $data = new Experienciaeducativa;
            $data->id = $id;
            $data->nombre = $nombre;   
            $data->carrera = $carrera;
            $data->save();
            session()->flash('message', '¡Experiencia educativa registrada!');
            return Redirect()->Route('experiencias.index');
        }
    }

    public function save(Request $request){
        $id = $request->id;
        $idold = $request->id_old;
        $nombre = $request->nombre;
        $carrera = $request->carrera;
    
        //Validaciones
        $validator = Validator::make($request->all(), [
            'id' => ['required', 'integer', 'max:999999'],
            'nombre' => ['required', 'string', 'max:150'],
            'carrera' => ['required', 'integer']
        ]);

        if ($validator->fails()) {
            $carreras = Carrera::all();
            if($id == ''){
                session()->flash('messageerror', '¡Error al buscar la experiencia educativa a editar!');
                return Redirect()->Route('experiencias.index');
            }else{
                $data = Experienciaeducativa::find($idold);
                return view('experienciaeducativa.editar',['experienciaeducativa' => $data, 'carreras' => $carreras])->withErrors($validator);
            }
        }else{
            $data = Experienciaeducativa::find($idold);
            $data->id = $id;
            $data->nombre = $nombre;   
            $data->carrera = $carrera;   
            $data->save();
            session()->flash('message', '¡Carrera guardada!');
            return Redirect()->Route('experiencias.index');
        }
    }

    public function delete($id){
        $carrera = Experienciaeducativa::find($id);
        $carrera->delete();
        session()->flash('message', '¡Experiencia educativa Eliminada!');
        return Redirect()->Route('experiencias.index');
    }
}
