<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\entradas_detalles;
class entradas extends Controller
{
    //
    public function devolverEntrada($id)
    {
    	
    	$detalles=entradas_detalles::with("libro")->where("Claveent",$id)->get();

    	
    	return view("ingresarLibro/devolverEntradaDetalle"compact("detalles"));
    }
}
