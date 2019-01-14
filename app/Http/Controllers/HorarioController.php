<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Horario;
use App\Experienciaeducativa;
use App\Salon;
use Validator;
use Illuminate\Support\Facades\Session as Session;

class HorarioController extends Controller
{
    public function index(){
        $horarios = Horario::all();            
        $arregloFinal = null;
        foreach ($horarios as $key => $horario) {
            $arregloFinal[$horario->horariocons]['nrc'] = $horario->experienciaeducativa_r->id;
            $arregloFinal[$horario->horariocons]['experienciaeducativa'] = $horario->experienciaeducativa_r->nombre;
            $arregloFinal[$horario->horariocons]['salon'] = $horario->salon;
            $arregloFinal[$horario->horariocons][$horario->dia] = [
                'horainicio' => $horario->horainicio,
                'horafin' => $horario->horafin
            ];
        }
        return view('horarios.vertodos',['horarios' => $arregloFinal]);
    }

    public function vistanuevo(){
        $experienciaseducativas = Experienciaeducativa::all();
        $salones = Salon::all();
        return view('horarios.registrar',['experienciaseducativas' => $experienciaseducativas,'salones' => $salones]); 
    }

    public function new(Request $request){
        $experienciaeducativa = $request->experienciaeducativa;
        $salon = $request->salon;
        $lhorainicio = $request->lhorainicio;
        $lhorafin = $request->lhorafin;
        $mhorainicio = $request->mhorainicio;
        $mhorafin = $request->mhorafin;
        $xhorainicio = $request->xhorainicio;
        $xhorafin = $request->xhorafin;
        $jhorainicio = $request->jhorainicio;
        $jhorafin = $request->jhorafin;
        $vhorainicio = $request->vhorainicio;
        $vhorafin = $request->vhorafin;
    
        //Validaciones
        $validator = Validator::make($request->all(), [
            'experienciaeducativa' => ['required', 'integer', 'max:999999'],
            'salon' => ['required', 'integer', 'max:200'],
            'lhorainicio' => ['required', 'string', 'max:9'],
            'lhorafin' => ['required', 'string', 'max:9'],
            'mhorainicio' => ['required', 'string', 'max:9'],
            'mhorafin' => ['required', 'string', 'max:9'],
            'xhorainicio' => ['required', 'string', 'max:9'],
            'xhorafin' => ['required', 'string', 'max:9'],
            'jhorainicio' => ['required', 'string', 'max:9'],
            'jhorafin' => ['required', 'string', 'max:9'],
            'vhorainicio' => ['required', 'string', 'max:9'],
            'vhorafin' => ['required', 'string', 'max:9']
        ]);

        if ($validator->fails()) {
            $experienciaseducativas = Experienciaeducativa::all();
            $salones = Salon::all();
            return view('horarios.registrar',['experienciaseducativas' => $experienciaseducativas,'salones' => $salones])->withErrors($validator);
        }else{
            $horariocons = intval(Horario::orderBy('horariocons', 'desc')->first()->horariocons);
            $horariocons++;
            if ($lhorainicio != '0' && $lhorafin != '0') {
                $lr = new Horario;
                $lr->horariocons = $horariocons;
                $lr->experienciaeducativa = $experienciaeducativa;
                $lr->salon = $salon;
                $lr->horainicio = $lhorainicio;
                $lr->horafin = $lhorafin;
                $lr->dia = 'L';
                $lr->save();
            }
            if ($mhorainicio != '0' && $mhorafin != '0') {
                $mr = new Horario;
                $mr->horariocons = $horariocons;
                $mr->experienciaeducativa = $experienciaeducativa;
                $mr->salon = $salon;
                $mr->horainicio = $mhorainicio;
                $mr->horafin = $mhorafin;
                $mr->dia = 'M';
                $mr->save();
            }
            if ($xhorainicio != '0' && $xhorafin != '0') {
                $xr = new Horario;
                $xr->horariocons = $horariocons;
                $xr->experienciaeducativa = $experienciaeducativa;
                $xr->salon = $salon;
                $xr->horainicio = $xhorainicio;
                $xr->horafin = $xhorafin;
                $xr->dia = 'X';
                $xr->save();
            }
            if ($jhorainicio != '0' && $jhorafin != '0') {
                $jr = new Horario;
                $jr->horariocons = $horariocons;
                $jr->experienciaeducativa = $experienciaeducativa;
                $jr->salon = $salon;
                $jr->horainicio = $jhorainicio;
                $jr->horafin = $jhorafin;
                $jr->dia = 'J';
                $jr->save();
            }
            if ($vhorainicio != '0' && $vhorafin != '0') {
                $vr = new Horario;
                $vr->horariocons = $horariocons;
                $vr->experienciaeducativa = $experienciaeducativa;
                $vr->salon = $salon;
                $vr->horainicio = $vhorainicio;
                $vr->horafin = $vhorafin;
                $vr->dia = 'V';
                $vr->save();
            }
            session()->flash('message', '¡Horario registrado exitosamente!');
            return Redirect()->Route('horarios.index');
        }
    }

    public function delete($id){
        $horarios = Horario::where('horariocons',$id)->get();
        foreach ($horarios as $key => $horario) {
            $horario->delete();
        }        
        session()->flash('message', '¡horario Eliminado!');
        return Redirect()->Route('horarios.index');
    }
}
