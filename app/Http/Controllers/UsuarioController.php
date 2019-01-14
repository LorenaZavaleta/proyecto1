<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;
use Validator;
use Hash;
use Illuminate\Support\Facades\Session as Session;

class UsuarioController extends Controller
{
    //Metodo de loggeo
    public function auth(Request $request){
        $usuario = $request->usuario;
        $password = $request->password;

        //Validaciones
        $validator = Validator::make($request->all(), [
            'usuario' => ['required', 'string', 'max:20','exists:usuarios'],
            'password' => ['required', 'string', 'min:6'],
        ]);

        if ($validator->fails()) {
            return view('auth.login')->withErrors($validator);
        }else{
            $usuario = Usuario::where('usuario',$usuario)->first();

            if(Hash::check($password,$usuario->password)){
                Session::put('id',$usuario->id);
                Session::put('nombre',$usuario->nombre);
                Session::put('tipo',$usuario->tipo); 
                Session::put('logged', true);                
                return redirect()->Route('salones.index');
            }else {
                session()->flash('messageerror', '¡Contraseña incorrecta!');
                return view('auth.login');
            }            
        }
    }

    //Cierra la sesión
    public function exit(){
        Session::flush();
        return redirect()->route('salones.index');
    }

    //Registra un nuevo usuario
    public function new(Request $request){
        $nombre = $request->nombre;
        $password = $request->password;
        $tipo = $request->tipo;
        $usuario = $request->usuario;
        
        //Validaciones
        $validator = Validator::make($request->all(), [
            'nombre' => ['required', 'string', 'max:150'],
            'tipo' => ['required', 'string', 'max:20'],
            'usuario' => ['required', 'string', 'max:20', 'unique:usuarios'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);

        if ($validator->fails()) {
            return view('auth.register')->withErrors($validator);
        }else{
            $data = new Usuario;
            $data->nombre = $nombre;
            $data->password = bcrypt($password);
            $data->tipo = $tipo;
            $data->usuario = $usuario;        
            $data->save();
            session()->flash('message', '¡Usuario registrado!');
            return view('auth.register');
        }
    }

    
}
