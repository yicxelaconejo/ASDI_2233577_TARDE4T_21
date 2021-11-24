<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    public function Create (){
        return view('Estudiante');


    }

    public function Estudiante (Request $request){
        $nombre= $request->nombre;
        $primer_parcial= $request->primer_parcial;
        $examen_final= $request->examen_final;

        $calificacion= $primer_parcial * 0.4 + $examen_final *0.6 ;
        if($calificacion>=4.5){
           echo "Aprobo";
        }else{
            echo "reprobo";
        }
        return view('resul_estudiante',compact('nombre','calificacion', ));
    }
}
