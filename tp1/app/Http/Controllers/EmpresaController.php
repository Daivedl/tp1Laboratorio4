<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empresa;

class EmpresaController extends Controller
{
    public function validar (Request $req){
        $this->validate($req,[
            "denominacion" => "required | string | min:1 | max:128",
            "telefono" => "required | string | min:10 | max:50",
            "horarioAtencion" => "required | string | min:6 | max:256",
            "quienesSomos" => "required | string | min:1 | max:1024",
            "latitud" => "required | numeric | between:-50.000000,50.000000",
            "longitud" => "required | numeric | between:-50.000000,50.000000",
            "domicilio" => "required | string | min:3 | max:256",
            "email" => "required | string | min:10 | max:75"
            
        ]);
    }
}
