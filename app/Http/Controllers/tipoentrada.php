<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tipoentrada extends Controller
{
    //
        public function __construct()
    {
        $this->middleware('auth');
    }

            public function obtenertipoentrada($id)
    {
    	$tipoentrada=\App\tipoentrada::where("id_tipoEntrada",$id)->get();

    	return response()->json([

    		"uss"=>$tipoentrada
    	]);
    }
    public function ingresartipoentrada(Request $request)
    {
    	$tipoentrada=\App\tipoentrada::create([
'Tipoent'=>$request->Tipoent,
'Desctipent'=>$request->Desctipent,
'Usralta'=>\Auth::User()->id_usuario ,
"estatusm"=>1,
    	]);

    	return response()->json([

    		"uss"=>$tipoentrada
    	]);
    }
    public function actualizar(Request $request)
    {

    	$tipoentrada=\App\tipoentrada::where("id_tipoEntrada",$request->id_tipoEntrada)->update([
'Tipoent'=>$request->Tipoent,
'Desctipent'=>$request->Desctipent,
'Usralta'=>\Auth::User()->id_usuario ,
"estatusm"=>1,
    	]);

    	return response()->json([

    		"uss"=>$tipoentrada
    	]);
    }
    public function baja($id)
    {
    	$tipoentrada=\App\tipoentrada::where("id_tipoEntrada",$id)->update([
'estatusm'=>0
    	]);

    	return response()->json([

    		"uss"=>$tipoentrada
    	]);
    }
}
