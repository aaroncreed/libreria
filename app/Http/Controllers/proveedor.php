<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class proveedor extends Controller
{
    //
        public function __construct()
    {
        $this->middleware('auth');
    }

     public function obtenerproveedor($id)
    {
    	$proveedor=\App\proveedor::where("id_proveedor",$id)->get();

    	return response()->json([

    		"uss"=>$proveedor
    	]);
    }
    public function proveedorTodas()
    {
        $proveedor=\App\proveedor::get();

             foreach ($proveedor as $key => $value) {
        // dd($editorial[$key]->estatusm);
        $proveedor[$key]->estatusm=$value->estatusm==1 ? "Activo" : "Baja";
      }
      return response()->json(
   $proveedor
 
);
    }
    public function ingresarproveedor(Request $request)
    {
    	$proveedor=\App\proveedor::create([
 "Claveprov"=>$request->Claveprov,
"Empresa"=>$request->Empresa,
"Contacto"=>$request->Contacto,
"Domicilio"=>$request->Domicilio,
"Codpostal"=>$request->Codpostal,
"Municipio"=>$request->Municipio,
"Ciudad"=>$request->Ciudad,
"Estado"=>$request->Estado,
"Telefono"=>$request->Telefono,
"RFC"=>$request->RFC,
"Curp"=>$request->Curp,
"Email"=>$request->Emailp,
"Fecultcomp"=>$request->Fecultcomp,
"Montoactual"=>$request->Montoactual,
"Fecalta"=>\Carbon\Carbon::now()->format('Y-m-d'),
"estatusm"=>1,
    	]);

    	return response()->json([

    		"uss"=>$proveedor,
            "donde"=>"#proveedor"

    	]);
    }
    public function actualizar(Request $request)
    {

    	$proveedor=\App\proveedor::where("id_proveedor",$request->id_proveedor)->update([
   "Claveprov"=>$request->Claveprov,
"Empresa"=>$request->Empresa,
"Contacto"=>$request->Contacto,
"Domicilio"=>$request->Domicilio,
"Codpostal"=>$request->Codpostal,
"Municipio"=>$request->Municipio,
"Ciudad"=>$request->Ciudad,
"Estado"=>$request->Estado,
"Telefono"=>$request->Telefono,
"RFC"=>$request->RFC,
"Curp"=>$request->Curp,
"Email"=>$request->Emailp,
"Fecultcomp"=>$request->Fecultcomp,
"Montoactual"=>$request->Montoactual,
"Fecalta"=>\Carbon\Carbon::now()->format('Y-m-d'),
"estatusm"=>1,
    	]);

    	return response()->json([

    		"uss"=>$proveedor,
            "donde"=>"#proveedor"
    	]);
    }
    public function baja($id)
    {
    	$proveedor=\App\proveedor::where("id_proveedor",$id)->update([
'estatusm'=>0
    	]);

    	return response()->json([

    		"uss"=>$proveedor,
            "donde"=>"#proveedor"
    	]);
    }
}
