<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Ejercicio2Controller extends Controller
{
    public function index(){
        return view('02_ejercicio');
    }

    public function resul_ejer2(Request $request) {
        $numero1= $request->numero1;
        $numero2= $request->numero2;
        $numero3= $request->numero3;

        $respuesta= $numero1 + $numero2;

        if($respuesta==$numero3){
            echo "son iguales";
        }else if  (($numero1 + $numero3) == $numero2){
            echo "son iguales";
        }else if  (($numero2 + $numero3) == $numero1){
            echo "son iguales";
        }else{
            echo "son distintas";
        }
        return view('02_resul',compact('respuesta'));
        }
    }


