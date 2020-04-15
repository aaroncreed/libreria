<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ventas;

class ventas_detalle extends Controller
{
    //
    public function reporteVenta(Request $request)
    {
    	
    	 //  "fechainicio" => "2020-04-15"
      // "fechafin" => "2020-04-17"
      // "proveedor" 
    	$proveedor=$request->proveedor;
    	$from = date($request->fechainicio);
		$to = date($request->fechafin);
    	$entrada=ventas::with("detalleVentaLibro","tipoCliente")->whereBetween('Fecventa', [$from, $to])->get();
    	
    	$filtered = $entrada->filter(function ($value, $key) use($proveedor) {

   return $value->detalleVentaLibro[0]->libro[0]->Clavecasedit==$proveedor;
});
        // dd($filtered);
        $cantidad=0;
        $total=0;
        $subtotal=0;
        $descuento=0;
        $pagar=0;
           $data = [
          'title' => 'Reporte de venta',
          'heading' => 'Reporte de Venata',
          'content' => $filtered,  
          // 'cantidad'=> $cantidad,  
          // 'total' => $total,
          // 'descuento'=>$descuento,
          // 'subtotal'=>$subtotal,
          // 'pagar'=>$pagar
            ];
// return view('ingresarLibro.pdf.reporteSalida',compact("data"));
        $pdf = \PDF::loadView('ingresarLibro.pdf.reporteVentas', $data);
return $pdf->download(''.$request->fechainicio.'.pdf');
    }
}
