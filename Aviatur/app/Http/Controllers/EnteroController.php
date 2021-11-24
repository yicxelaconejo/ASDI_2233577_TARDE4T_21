<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EnteroController extends Controller
{
    public function index(){
        return view('Entero');
    }
    public function Entero(Request $request) {
        $numero= $request->numero;


        $suma= $numero * ($numero + 1) /2;
        return view('resul_entero',compact('numero','suma'));
    }
}
