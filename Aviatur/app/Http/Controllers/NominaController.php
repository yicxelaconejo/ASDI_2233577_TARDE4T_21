<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NominaController extends Controller
{
    public function Create (){
        return view('Nomina');
    }

    public function Nomina (request $request){
        $Nombre= $request->Nombre;
        $Salario= $request->Salario;

        $Bono= $Salario * 0.7 + $Salario;
        return view('resul_nomina',compact('Nombre','Bono'));
    }
}
