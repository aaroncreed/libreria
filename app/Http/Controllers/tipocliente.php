<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tipocliente extends Controller
{
    //
        //
        public function __construct()
    {
        $this->middleware('auth');
    }

     public function obtenertipocliente($id)
    {
    	$tipocliente=\App\tipocliente::where("id_tipoCliente",$id)->get();

    	return response()->json([

    		"uss"=>$tipocliente
    	]);
    }
    public function ingresartipocliente(Request $request)
    {
    	$tipocliente=\App\tipocliente::create([
'TipoCli'=>$request->TipoCli,
'Desctipo'=>$request->Desctipo,
'Usralta'=>\Auth::User()->id_usuario ,
"estatusm"=>1,
    	]);

    	return response()->json([

    		"uss"=>$tipocliente
    	]);
    }
    public function actualizar(Request $request)
    {

    	$tipocliente=\App\tipocliente::where("id_tipoCliente",$request->id_tipoCliente)->update([
 'TipoCli'=>$request->TipoCli,
'Desctipo'=>$request->Desctipo,
'Usralta'=>\Auth::User()->id_usuario ,
"estatusm"=>1,
    	]);

    	return response()->json([

    		"uss"=>$tipocliente
    	]);
    }
    public function baja($id)
    {
    	$tipocliente=\App\tipocliente::where("id_tipoCliente",$id)->update([
'estatusm'=>0
    	]);

    	return response()->json([

    		"uss"=>$tipocliente
    	]);
    }
}
