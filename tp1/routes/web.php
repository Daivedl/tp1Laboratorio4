<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\NoticiaController;
use App\Models\Empresa;
use App\Models\Noticia;



Route::get('/', [EmpresaController::class,'inicio']);
Route::get('/home/{id}',[EmpresaController::class,'detalleId']);
Route::get('/home', function (){
    return view('home');
});
Route::get('/detalle', function (){
    return view('detalle');
});
Route::get('/buscador',function(){
    return view('buscador');
});
