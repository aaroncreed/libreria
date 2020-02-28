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
}
