<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\entradas_detalles;
use App\entradas as entra;
class entradas extends Controller
{
    //
        public function __construct()
    {
        $this->middleware('auth');
    }

    public function devolverEntrada($id)
    {
    	
    	$detalles=entradas_detalles::with("libro")->where("Claveent",$id)->get();
    	$entrada=entra::with("catalogoTipoEntrada",
"catalogoProveedor")->where("id_entrada",$id)->get();
    	 // dd($entrada);
    	return view("ingresarLibro/devolverEntradaDetalle",compact("detalles","entrada"));
    }

    public function reporteEntrada($id)
    {
   $entrada=entra::with("catalogoTipoEntrada","catalogoProveedor","detalleDevolucion")->where("id_entrada",$id)->get();
        // dd($entrada);
        $cantidad=0;
        $total=0;
        $subtotal=0;
        $descuento=0;
           $data = [
          'title' => 'ReporteDevolucion',
          'heading' => 'Reporte Entrada',
          'content' => $entrada,  
          'cantidad'=> $cantidad,  
          'total' => $total,
          'descuento'=>$descuento,
          'subtotal'=>$subtotal
            ];
// return view('ingresarLibro.pdf.reporteEntrada',compact("data"));

        $pdf = \PDF::loadView('ingresarLibro.pdf.reporteEntrada', $data);
return $pdf->download(''.$id.'.pdf');
    }
    public function reporteSalida($id)
    {

        $entrada=entra::with("catalogoTipoEntrada","catalogoProveedor","detalleDevolucion")->where("id_entrada",$id)->get();
        // dd($entrada);
        $cantidad=0;
        $total=0;
        $subtotal=0;
        $descuento=0;
        $pagar=0;
           $data = [
          'title' => 'ReporteDevolucion',
          'heading' => 'Reporte Devolucion',
          'content' => $entrada,  
          'cantidad'=> $cantidad,  
          'total' => $total,
          'descuento'=>$descuento,
          'subtotal'=>$subtotal,
          'pagar'=>$pagar
            ];
// return view('ingresarLibro.pdf.reporteSalida',compact("data"));
        $pdf = \PDF::loadView('ingresarLibro.pdf.reporteSalida', $data);
return $pdf->download(''.$id.'.pdf');
    }
}
