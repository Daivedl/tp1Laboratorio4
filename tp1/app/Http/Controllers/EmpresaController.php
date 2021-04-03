<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Empresa;
use App\Models\Noticia;

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
    public function inicio(){
        $empresas=Empresa::all();
        $vac=compact('empresas');
        return view("index",$vac);
        
    }
    public function detalleId($id){
        $empresas=Empresa::find($id);
        $vac = compact("empresas");
        return view("home",$vac);
    }
    public function show(Empresa $empresa)
    {
        return view('home')->with('empresa', $empresa);
    }

   
    public function edit(Empresa $empresa)
    {
        return view('empresa.editar')->with('empresa',$empresa);
    }

   
    public function update(Request $request, Empresa $empresa)
    {
        $this->validar($request);
        $empresa->denominacion = $request['denominacion'];
        $empresa->telefono = $request['telefono'];
        $empresa->horarioAtencion = $request['horarioAtencion'];
        $empresa->quienesSomos = $request['quienesSomos'];
        $empresa->latitud = $request['latitud'];
        $empresa->longitud = $request['longitud'];
        $empresa->domicilio = $request['domicilio'];
        $empresa->email = $request['email'];
        $empresa->save();
        return redirect('/');
    }

   
    public function destroy(Empresa $empresa)
    {
        $empresa->delete();
        return redirect('/');
    }
    
}
