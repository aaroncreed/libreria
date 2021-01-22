<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class clientes extends Controller
{
        public function __construct()
    {
        $this->middleware('auth');
    }

    //
    public function obtenerClientes($id)
    {
    	$clientes=\App\clientes::where("id_claveCliente",$id)->get();

    	return response()->json([

    		"uss"=>$clientes
    	]);
    }
      public function obtenerClientesTodos()
    {
        $clientes=\App\clientes::get();

   foreach ($clientes as $key => $value) {
        // dd($editorial[$key]->estatusm);
        $clientes[$key]->estatusm=$value->estatusm==1 ? "Activo" : "Baja";
      }
      return response()->json(
   $clientes
 
);
    }
    public function ingresarclientes(Request $request)
    {
    	$clientes=\App\clientes::create([
    		 'Razsocial'=>$request->Razsocial,
 'Apepat'=>$request->Apepat,
 'Apemat'=>$request->Apemat,
'Nombre'=>$request->Nombre,
'Domicilio'=>$request->Domicilio,
'Codpostal'=>$request->Codpostal,
'Municipio'=>$request->Municipio,
'Colonia'=>$request->Colonia,
'Estado'=>$request->Estado,
'Telefono'=>$request->Telefono,
'RFC'=>$request->RFC,
'Email'=>$request->Email,
'Fecalta'=>\Carbon\Carbon::now()->format('Y-m-d'),
'Fecultventa'=>$request->Fecultventa,
'Diascre'=>$request->Diascre,
'Limitecre'=>$request->Limitecre,
'estatusm'=>1
    	]);

    	return response()->json([

    		"uss"=>$clientes
    	]);
    }
    public function actualizar(Request $request)
    {

    	$clientes=\App\clientes::where("id_claveCliente",$request->id_claveCliente)->update([
    		 'Razsocial'=>$request->Razsocial,
 'Apepat'=>$request->Apepat,
 'Apemat'=>$request->Apemat,
'Nombre'=>$request->Nombre,
'Domicilio'=>$request->Domicilio,
'Codpostal'=>$request->Codpostal,
'Municipio'=>$request->Municipio,
'Colonia'=>$request->Colonia,
'Estado'=>$request->Estado,
'Telefono'=>$request->Telefono,
'RFC'=>$request->RFC,
'Email'=>$request->Email,
'Fecalta'=>\Carbon\Carbon::now()->format('Y-m-d'),
'Fecultventa'=>$request->Fecultventa,
'Diascre'=>$request->Diascre,
'Limitecre'=>$request->Limitecre,
'estatusm'=>1
    	]);

    	return response()->json([

    		"uss"=>$clientes
    	]);
    }
    public function baja($id)
    {
    	$clientes=\App\clientes::where("id_claveCliente",$id)->update([
'estatusm'=>0
    	]);

    	return response()->json([

    		"uss"=>$clientes
    	]);
    }
}
