<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\devolucion;
use App\libros;
use App\entradas_detalles as dettt;
use DB;

class entradas_detalle extends Controller
{
    //
    public function realizarDevolucion(Request $request)
    {
    	
$factura=json_decode($request->factura);
$partes=json_decode($request->partes);
$cantidad=json_encode($request->cantidad);



 //  console.log(elemento.value,elemento.parentElement.parentElement.cells[5].innerText);
 //   let cantidad=parseFloat(fila[3].firstElementChild.value) * parseFloat(fila[5].innerText);
 // let subtotal=parseFloat($("#subtotal").text());
 // $("#subtotal").text((subtotal+cantidad).toFixed(2));


// let partes=$("#articulosFacturaForm").serializeArray()
// console.log(partes);
// $articulos={};
// dd($factura);
// $partes->devolverEntrada
// $partes->existenciaDevolver
// $partes->precio
try {
	 \DB::beginTransaction();
	for ($i=0; $i <count($partes->devolverEntrada) ; $i++) { 
	# code...
	devolucion::create([
"fk_emtrada_detalle"=>$partes->devolverEntrada[$i], "cantidad"=>$partes->existenciaDevolver[$i], "fechaDevolucion"=>\Carbon\Carbon::parse($factura->fechaRecepcion)->format('Y-m-d'), "quien"=>\Auth::user()->id_usuario, "dinero"=>$partes->precio[$i]
	]);

	$detalle=dettt::with("libro")->where("id_detallleEntrada",$partes->devolverEntrada[$i])->get();
	
$actual	= $detalle[0]->libro->Existencia - $partes->existenciaDevolver[$i];
	libros::where('id_libro', $detalle[0]->libro->id_libro)
          
          ->update(['Existencia' => $actual ]);
}


  DB::commit();
} catch (\Exception  $e) {
	   DB::rollBack();
	  return response()->json([
"ok"=>false,
"mensaje"=>$e->getMessage()
]);
}


 return response()->json([
"ok"=>true
]);


// for (ar in partes) {


//       if(articulos.hasOwnProperty(""+partes[ar].name+""))        
//       {
      
//            articulos[""+partes[ar].name+""].push(partes[ar].value)
//         }else{
//                   articulos[""+partes[ar].name+""]=[partes[ar].value]
//         }
       
//             // formData.append("productos", "Groucho");
//         }

//         console.log(articulos);
// let sumar=0;
//  $("#subtotal").text(0);
// // for (art in articulos) {
// // console.log(articulos["precio"],art);
// for (var i = articulos["precio"].length - 1; i >= 0; i--) {
//   // articulos["precio"][i]
//   // articulos["existenciaDevolver"][i]

//    let cantidad=parseFloat( articulos["precio"][i]) * parseFloat(articulos["existenciaDevolver"][i]);
//  let subtotal=parseFloat($("#subtotal").text());
//  $("#subtotal").text((subtotal+cantidad).toFixed(2));


 // console.log( articulos[art][i])
// }

// }



    }
}
