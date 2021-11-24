<?php

namespace App\Http\Controllers;
use App\Models\Clients;

use Illuminate\Http\Request;

class ConsultasController extends Controller
{
    public function consultas(){

        $consultas = Clients::where("sexo" , "M")->get();

        echo $consultas;
    }
}
