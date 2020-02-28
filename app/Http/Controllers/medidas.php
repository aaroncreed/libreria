<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\medidas as unidadesMedicion;

class medidas extends Controller
{
    //
    public function obtenerMedidas()
    {
	$medidas=unidadesMedicion::obtenerMedidas();
	  	return response()->json([
   "medidas"=>$medidas
 
]);
    }
}
