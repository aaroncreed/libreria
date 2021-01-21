<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class descuentos extends Controller
{
    //
 public function   obtenerdescuentos($id)
 {
 	$descuentos=\App\descuentos::where("id_descuento",$id)->get();

 	return response()->json([
 		"uss"=>$descuentos

 	]);
 }
 public function todosDescuentos()
 {
 		$descuentos=\App\descuentos::get();

 	 foreach ($descuentos as $key => $value) {
        // dd($editorial[$key]->estatusm);
        $descuentos[$key]->estatusm=$value->estatusm==1 ? "Activo" : "Baja";
      }
      return response()->json(
   $descuentos
 
);

 }

public function obetnerDescuento($id)
{
		$descuentos=\App\descuentos::where("Tipocli",$id)->get();

 	return response()->json([
 		"uss"=>$descuentos
]);
}

public function ingresardescuentos(Request $request)
{
$descuentos=\App\descuentos::create([
"TipoDesc"=>$request->TipoDesc,
 "Tipocli"=>$request->Tipocli,
 "Descuento"=>$request->Descuento,
 "Usralta"=>\Auth::User()->id_usuario,
"estatusm"=>1
]);

 	return response()->json([
 		"uss"=>$descuentos

 	]);
}
public function actualizar(Request $request)
{

$descuentos=\App\descuentos::where("id_descuento",$request->id_descuento)->update(

[
"TipoDesc"=>$request->TipoDesc,
 "Tipocli"=>$request->Tipocli,
 "Descuento"=>$request->Descuento,
 "Usralta"=>\Auth::User()->id_usuario,
 "estatusm"=>1

]
)

;

 	return response()->json([
 		"uss"=>$descuentos

 	]);


}
public function baja($id)
{
	$descuentos=\App\descuentos::where("id_descuento",$id)->update(

[

"estatusm"=>0

]
)

;

 	return response()->json([
 		"uss"=>$descuentos

 	]);

}
}
