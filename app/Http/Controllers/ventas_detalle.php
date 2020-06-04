<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ventas;

class ventas_detalle extends Controller
{
    //
    public function reporteVenta($inicio,$fin,$proveedores)
    {
    	
    	 //  "fechainicio" => "2020-04-15"
      // "fechafin" => "2020-04-17"
      // "proveedor" 
    	$proveedor=$proveedores;
    	$from = date($inicio);
		$to = date($fin);
    // dd($proveedor,$from,$to);
    	$entrada=ventas::with("detalleVentaLibro","tipoCliente")->whereBetween('Fecventa', [$from, $to])->get();
    

    	$filtered = $entrada->filter(function ($value, $key) use($proveedor) {

   return $value->detalleVentaLibro[0]->libro[0]->Clavecasedit==$proveedor;
});
        $resultado= !empty($proveedor) && $proveedor!="" ? $filtered : $entrada;
        // dd($filtered);
        $cantidad=0;
        $total=0;
        $subtotal=0;
        $descuento=0;
        $pagar=0;
           $data = [
          'title' => 'Reporte de venta',
          'heading' => 'Reporte de Venata',
          'content' => $resultado,  
          // 'cantidad'=> $cantidad,  
          // 'total' => $total,
          // 'descuento'=>$descuento,
          // 'subtotal'=>$subtotal,
          // 'pagar'=>$pagar
            ];
// return view('ingresarLibro.pdf.reporteSalida',compact("data"));
            // dd($filtered);
        $pdf = \PDF::loadView('ingresarLibro.pdf.reporteVentas', $data);
return $pdf->download(''.$inicio.'.pdf');
    }
}
