<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\medidas as unidadesMedicion;

class medidas extends Controller
{
    //
        public function __construct()
    {
        $this->middleware('auth');
    }

    public function obtenermedidasg($id)
    {
	$medidas=\App\medidas::where("id_medida",$id)->get();
	  	return response()->json([
   "uss"=>$medidas
 
]);
    }
    public function medidasTodas()
    {
            $medidas=\App\medidas::get();
            
 foreach ($medidas as $key => $value) {
        // dd($editorial[$key]->estatusm);
        $medidas[$key]->estatusm=$value->estatusm==1 ? "Activo" : "Baja";
      }
      return response()->json(
   $medidas
 
);
    }


     public function obtenerMedidas()
    {
	$medidas=unidadesMedicion::obtenerMedidas();
	  	return response()->json([
   "medidas"=>$medidas
 
]);
    }
    public function ingresarmedidas(Request $request)
{
$medidas=\App\medidas::create([
"Clavemed"=>$request->Clavemed,
 "Descmed"=>$request->Descmed,
 
"estatusm"=>1
]);

 	return response()->json([
 		"uss"=>$medidas

 	]);
}
public function actualizar(Request $request)
{

$medidas=\App\medidas::where("id_medida",$request->id_medida)->update(

[
"Clavemed"=>$request->Clavemed,
 "Descmed"=>$request->Descmed,
"estatusm"=>1

]
)

;

 	return response()->json([
 		"uss"=>$medidas

 	]);


}
public function baja($id)
{
	$medidas=\App\medidas::where("id_medida",$id)->update(

[

"estatusm"=>0

]
)

;

 	return response()->json([
 		"uss"=>$medidas

 	]);

}
}
