<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\entradas_detalles;
use App\entradas as entra;
class entradas extends Controller
{
    //
    public function devolverEntrada($id)
    {
    	
    	$detalles=entradas_detalles::with("libro")->where("Claveent",$id)->get();
    	$entrada=entra::with("catalogoTipoEntrada",
"catalogoProveedor")->where("id_entrada",$id)->get();
    	 // dd($entrada);
    	return view("ingresarLibro/devolverEntradaDetalle",compact("detalles","entrada"));
    }
}
