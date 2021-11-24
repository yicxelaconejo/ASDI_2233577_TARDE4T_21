<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CilindroController extends Controller
{
    public function Create (){
        return view('Cilindro');
    }

    public function Cilindro (request $request){
        $r= $request->r;
        $h= $request->h;

        $v=3.1416 * ($r^2)* $h;
        $a=2 * 3.1416 * $r * ($r+$h);
        return view('resul_cilindro',compact('v','a'));
    }
}
