<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\devolucion;
use App\libros;
use App\entradas_detalles as dettt;
use App\entradas;
use DB;

class entradas_detalle extends Controller
{
	    public function __construct()
    {
        $this->middleware('auth');
    }

    //
    public function realizarDevolucion(Request $request)
    {
    	
$factura=json_decode($request->factura);
$partes=json_decode($request->partes);
$cantidad=json_encode($request->cantidad);

// dd($partes,$cantidad,$factura);

 //  console.log(elemento.value,elemento.parentElement.parentElement.cells[5].innerText);
 //   let cantidad=parseFloat(fila[3].firstElementChild.value) * parseFloat(fila[5].innerText);
 // let subtotal=parseFloat($("#subtotal").text());
 // $("#subtotal").text((subtotal+cantidad).toFixed(2));


// let partes=$("#articulosFacturaForm").serializeArray()
// console.log(partes);
// $articulos={};
// dd($partes);
// $partes->devolverEntrada
// $partes->existenciaDevolver
// $partes->precio
try {
	 \DB::beginTransaction();
	for ($i=0; $i <count($partes->devolverEntrada) ; $i++) { 
	# code...
	devolucion::create([
"fk_emtrada_detalle"=>$partes->devolverEntrada[$i], "cantidad"=>$partes->existenciaDevolver[$i], "fechaDevolucion"=>\Carbon\Carbon::parse($factura->fechaRecepcion)->format('Y-m-d'), "quien"=>\Auth::user()->id_usuario, "dinero"=>$partes->precio[$i] * ($partes->entrada[$i] - $partes->existenciaDevolver[$i])
	]);

	$detalle=dettt::with("libro","entrada")->where("id_detallleEntrada",$partes->devolverEntrada[$i])->get();
	

$actual	= $detalle[0]->libro->Existencia - $partes->existenciaDevolver[$i];

entradas::where("id_entrada",$detalle[0]->Claveent)->update(["estatusEntrada"=>1]);
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
