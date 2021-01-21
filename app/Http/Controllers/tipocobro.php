<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tipocobro extends Controller
{
    //
        public function __construct()
    {
        $this->middleware('auth');
    }

        public function obtenertipocobro($id)
    {
    	$tipocobro=\App\tipocobro::where("id_tipoCobro",$id)->get();

    	return response()->json([

    		"uss"=>$tipocobro
    	]);
    }
    public function tipocobroTablaTodas()
    {
            $tipocobro=\App\tipocobro::get();

     
             foreach ($tipocobro as $key => $value) {
        // dd($editorial[$key]->estatusm);
        $tipocobro[$key]->estatusm=$value->estatusm==1 ? "Activo" : "Baja";
      }
      return response()->json(
   $tipocobro
 
);
    }
    public function ingresartipocobro(Request $request)
    {
    	$tipocobro=\App\tipocobro::create([
'TipoCobro'=>$request->TipoCobro,
'Desccobro'=>$request->Desccobro,
'Usralta'=>\Auth::User()->id_usuario ,
"estatusm"=>1,
    	]);

    	return response()->json([

    		"uss"=>$tipocobro
    	]);
    }
    public function actualizar(Request $request)
    {

    	$tipocobro=\App\tipocobro::where("id_tipoCobro",$request->id_tipoCobro)->update([
 'TipoCobro'=>$request->TipoCobro,
'Desccobro'=>$request->Desccobro,
'Usralta'=>\Auth::User()->id_usuario ,
"estatusm"=>1,
    	]);

    	return response()->json([

    		"uss"=>$tipocobro
    	]);
    }
    public function baja($id)
    {
    	$tipocobro=\App\tipocobro::where("id_tipoCobro",$id)->update([
'estatusm'=>0
    	]);

    	return response()->json([

    		"uss"=>$tipocobro
    	]);
    }
}
