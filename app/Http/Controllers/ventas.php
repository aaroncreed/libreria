<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ventas as ven;
use App\ventas_detalle;
class ventas extends Controller
{
    //
    public function generarTicket($id)
    {


    	$venta=ven::where('id_venta',$id)->get();
    	$producto=ventas_detalle::with("libro")->where('Clavevent',$id)->get();
 // dd($venta,$producto);
    	return view('ingresarLibro/modal/ticketPrevisualisar',compact("producto","venta"));

    }
}
