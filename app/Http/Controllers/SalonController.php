<?php

namespace App\Http\Controllers;

use App\Salon;
use Illuminate\Http\Request;
use Carbon\Carbon;

class SalonController extends Controller
{
    //Muestra la información en general de los salones
    public function index(){
        $salones = Salon::all();
        $ct = Carbon::now();
        $ct->setTimezone('America/Mexico_City');
        $dia = ''; // L = Lunes, M = Martes, X = Miercoles, J = Jueves, V = Viernes
        //switch (1) {
        switch ($ct->dayOfWeek) {
            case 1:
                $dia = 'L';
                break;
            case 2:
                $dia = 'M';
                break;
            case 3:
                $dia = 'X';
                break;    
            case 4:
                $dia = 'J';
                break;
            case 5:
                $dia = 'V';
                break;
        }
        foreach ($salones as $index => $salon) {
            $horarios = $salon->horarios()->where('dia',$dia)->where('horainicio','<=',$ct->hour.':'.$ct->minute)->where('horafin','>',$ct->hour.':'.$ct->minute)->get();
            if (count($horarios)>0) {
                $salon->estado = 'O';
                $salon->class = 'secondary disabled';
            }else{
                $salon->estado = 'D';
                $salon->class = 'success enabled';
            }
        }
        return view('salones.salones')->with(['salones' => $salones]);
    }

    //Para consulta de otros dias horas
    public function diahora(Request $request){
        $dia = $request->dia;
        $hora = $request->hora;

        $salones = Salon::all();        
        foreach ($salones as $index => $salon) {
            $horarios = $salon->horarios()->where('dia',$dia)->where('horainicio','<=',$hora)->where('horafin','>',$hora)->get();
            if (count($horarios)>0) {
                $salon->estado = 'O';
                $salon->class = 'secondary disabled';
            }else{
                $salon->estado = 'D';
                $salon->class = 'success enabled';
            }
        }
        return view('salones.salonesquery')->with(['salones' => $salones,'dia' => $dia, 'hora' => $hora]);
    }

    //Muestra la información de un salón en especifico
    public function get($id){
        $salon = Salon::find($id);
        $ct = Carbon::now();
        $ct->setTimezone('America/Mexico_City');
        $dia = ''; // L = Lunes, M = Martes, X = Miercoles, J = Jueves, V = Viernes
        //switch (1) {
        switch ($ct->dayOfWeek) {
            case 1:
                $dia = 'L';
                break;
            case 2:
                $dia = 'M';
                break;
            case 3:
                $dia = 'X';
                break;    
            case 4:
                $dia = 'J';
                break;
            case 5:
                $dia = 'V';
                break;
        }
        $horarios = $salon->horarios()->where('dia',$dia)->where('horainicio','<=',$ct->hour.':'.$ct->minute)->where('horafin','>',$ct->hour.':'.$ct->minute)->get();
        if (count($horarios)>0) {
            $salon->estado = 'O';
            $salon->class = 'secondary';
        }else{
            $salon->estado = 'D';
            $salon->class = 'success';
        }
        return view('salones.salon_show')->with(['salon' => $salon]);
    }

    //Muestra la información de un salón en especifico por dia y hora especifico
    public function salondiahora($id,$dia,$hora){
        $salon = Salon::find($id);        
        $horarios = $salon->horarios()->where('dia',$dia)->where('horainicio','<=',$hora)->where('horafin','>',$hora)->get();
        if (count($horarios)>0) {
            $salon->estado = 'O';
            $salon->class = 'secondary';
        }else{
            $salon->estado = 'D';
            $salon->class = 'success';
        }
        return view('salones.salon_showquery')->with(['salon' => $salon,'dia' => $dia, 'hora' => $hora]);
    }
}
