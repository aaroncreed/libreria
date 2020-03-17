<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\casaeditorial as editorial;
class casaeditorial extends Controller
{
    //
    public function ingresarEditorial()
    {
editorial::ingresarNuevo();
    }
    public function obtenerEditorial()
    {
    	$editorial=editorial::obtenerCasaEditorialTodas();

    	return response()->json([
   "editorial"=>$editorial
 
]);
    	
    }

    public function obtenerEditorialEspecifica($id)
    {

        $editorial=editorial::where("id_casaEditorial",$id)->get();
// dd($editorial);
        return response()->json([
   "uss"=>$editorial
 
]);
    }

    public function ingresarcasaeditorial(Request $request)
    {
     


  $editorial=  editorial::create([
   "Clavecasedit" =>$request->Clavecasedit,
      "Desccasedit" => $request->Desccasedit,
      "estatusm"=>1
    ]);
    return response()->json([
   "uss"=>$editorial
 
]);
    }

    public function cambiarEstatus($id)
    {
     $editorial=   editorial::where("id_casaEditorial",$id)->update(["estatusm"=>2]);
      return response()->json([
   "uss"=>$editorial
 
]);

    }
    public function actualizar(Request $request)
    {
        $editorial=   editorial::where("id_casaEditorial",$request->id_casaEditorial)->update([   "Clavecasedit" =>$request->Clavecasedit,
      "Desccasedit" => $request->Desccasedit]);
      return response()->json([
   "uss"=>$editorial   
   ]);
    }
}
