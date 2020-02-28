<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\libros as Literal;
use App\tipocliente;
use App\tipocobro;
use App\casaeditorial;
use mysql_xdevapi\Exception;

class libros extends Controller
{
    //
    public function index()
    {
    	return view('ingresarLibro/libro');
    }
    public function vender()
    {
    	$casaeditorial=casaeditorial::get();
$libros=Literal::get();
$tipocliente=tipocliente::get();
$tipocobro=tipocobro::get();
 // dd($libros,$tipocliente,$tipocobro,$casaeditorial);

    	return view('ingresarLibro/venderLibro',compact("libros","tipocliente","tipocobro","casaeditorial"));
    }

    public function conf()
    {
    	 $tipopre =\App\tipoprecio::with("pesp","amenu")->orderBy("id_tipoprecio","asc")->get();
    $senesp  =\App\senesp::orderBy("id_senesp","asc")->get();
    $menu =\App\menu::with("tipoa","tipopre")->get();
    $tipoart  =\App\tipoart::orderBy("id_tipoart","asc")->get();
    $mesas =\App\mesas::where('estatusm',1)->orderBy("id_mesa","desc")->get();

        // dd("entre",$mesas);

     // dd($menu);
    $art="empiezo";
    return view("conf",compact("mesas","menu","tipopre","senesp","tipoart","art"));
    }
    public function guardar(Request $Request)
    {
    	$input = $Request->all();

        	$path = $Request->file('fotoportada')!=null ? $Request->file('fotoportada')->storeAs(
    'portadas/'.$input["Codbarras"], $Request->file('fotoportada')->getClientOriginalName()
) : "";
    	 // dd($input);
    		// dd($input["fotoportada"]->getClientOriginalName(),$path);
Literal::ingresarLibro($input,$path);


    }
    public function ticket()
    {
        return view('ingresarLibro/modal/ticket');
    }

    public function verificarExistenciaFinal(Request $request)
    {
        $articulos=json_decode($request->productos);
        try{

//        dd(count($articulos),$articulos,"wtf");

            foreach ($articulos as $ky=>$art)
            {
//        dd($ky,$art);
                $articulo=explode("-",$art->articulo);

                $valor=  Literal::verificarExistencia($art->cantidad,$articulo[0]);

                if($valor["resultado"])
                {
                    $articulos[$ky]->ok=$valor;
                }else{

                    throw new \Exception("No se cuenta Con la existencia Solicitada de ".$art->cantidad." del libro: ".$articulo[1]."; solo Existen:".$valor["total"]);
                }

//            $articulos[$ky]->append(json_encode(["ok"=>$valor]));
//            array_push($articulos[$ky],json_encode(["ok"=>$valor]));

            }

//    dd($articulos,"twf");
            $cobro=Literal::Cobrar($articulos);

            return response()->json(["resultado"=>$cobro]);
        }catch (\Exception $e)
        {

            return response()->json(["resultado"=>$e->getMessage()]);
        }


    }


    public function  verificarExistencia(Request $request)
    {
        $articulos=json_decode($request->productos);
try{

//        dd(count($articulos),$articulos,"wtf");

    foreach ($articulos as $ky=>$art)
    {
//        dd($ky,$art);
        $articulo=explode("-",$art->articulo);

        $valor=  Literal::verificarExistencia($art->cantidad,$articulo[0]);

        if($valor["resultado"])
        {
            $articulos[$ky]->ok=$valor;
        }else{

            throw new \Exception("No se cuenta Con la existencia Solicitada de ".$art->cantidad." del libro: ".$articulo[1]."; solo Existen:".$valor["total"]);
        }

//            $articulos[$ky]->append(json_encode(["ok"=>$valor]));
//            array_push($articulos[$ky],json_encode(["ok"=>$valor]));

    }

//    dd($articulos,"twf");
//    $cobro=Literal::Cobrar($articulos);

    return response()->json(["resultado"=>$articulos]);
}catch (\Exception $e)
        {
//            dd($e->getMessage());
            return response()->json(["resultado"=>$e->getMessage()]);
        }


    }
}
