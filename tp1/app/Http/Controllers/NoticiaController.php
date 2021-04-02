<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empresa;
use App\Models\Noticia;


class NoticiaController extends Controller
{
    public function index(Empresa $empresa){
        return view('noticia.lista',compact('empresa'))
        ->with('noticias',Noticia::where('empresa_id','=',$empresa->id)->orderBy('fecha','desc')
        ->paginate(5));
    }

    public function create(Empresa $empresa)
    {
        return view('noticia.edicion',compact('empresa'));
    }
}
