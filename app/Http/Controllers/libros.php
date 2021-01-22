<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\libros as Literal;
use App\tipocliente;
use App\tipocobro;
use App\casaeditorial;
use App\proveedor;
use App\entradas;
use App\entradas_detalles;
use App\tipoentrada;
use App\ventas_detalle;
use App\ventas;
use App\cobroventa;
use mysql_xdevapi\Exception;
use DB;
class libros extends Controller
{
    //
        public function __construct()
    {
        $this->middleware('auth');
    }


    function maxValueInArray($array, $keyToSearch)
{
    $currentMax = NULL;
    $valorCompleto=[];
    foreach($array as $arr)
    {
        foreach($arr as $key => $value)
        {
            if ($key == $keyToSearch && ($value >= $currentMax))
            {
                $currentMax = $value;
                $valorCompleto=$arr;
            }
        }
    }

    return $valorCompleto;
}

     public function menu()
    {

        $casaeditorial= casaeditorial::orderBy("Desccasedit","ASC")->get();
        $ventas= ventas::orderBy("id_venta","desc")->limit("5")->get();
        $ventash= ventas::orderBy("id_venta","desc")->get();
        // $ventas_detalle =   ventas_detalle::with("venta","libro") ->orderBy("Clavevent","desc")->orderBy("fk_libro","desc")->get();        
$librosVendidos=[];
        $librosNuevos=Literal::orderBy("id_libro","desc")->limit("5")->get();

        $libro=Literal::with("detalleVenta")->orderBy("id_libro","desc")->get();
 
foreach ($libro as $key => $value) {
    # code...
  
   $cantidad=0;
foreach ($value->detalleVenta as $k => $val) {
    # code...
    $cantidad+=$val->Cantidad;
}


    $librosVendidos[$key]=(object) [
 "Codbarras" => $value->Codbarras,
    "Clavecasedit" => $value->Clavecasedit,
    "Titulo" =>$value->Titulo,
      "Cantidad" => $cantidad
];

}

$elMasvendido = $this->maxValueInArray($librosVendidos, "Cantidad");
//  dd($elMasvendido,
// $ventas,
// $librosNuevos);

        return view('ingresarLibro/menu',compact("elMasvendido","ventas","ventash","librosNuevos","casaeditorial"));
    }
    public function index()
    {
         $libros= Literal::orderBy("id_libro","desc")->get();
    	return view('ingresarLibro/libroMenu',compact("libros"));
    }
    public function nuevo()
    {
        $libro=null;
        return view('ingresarLibro/libroNuevo',compact("libro"));
    }

    public function editar($id)
    {
        $libro=Literal::where("id_libro",$id)->first();
        // dd($id,$libro);
        return view('ingresarLibro/libroNuevo',compact("libro"));
    }




    public function devoluciones()
    {
        $entradas=entradas::with("detalles","catalogoTipoEntrada","catalogoProveedor")->get();
         // dd($entradas);
        return view('ingresarLibro/devolverLibro',compact("entradas"));
    }
    public function ingresar()
    {
                $proveedor=proveedor::get();
$libros=Literal::get();
// $tipocliente=tipocliente::get();
$tipoentrada=tipoentrada::get(); 


        return view('ingresarLibro/ingresarLibros',compact("libros","proveedor","tipoentrada"));
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

    public function actualizar(Request $Request)
    {

        $input = $Request->all();

            $Request->file('fotoportada')!=null ? $Request->file('fotoportada')->storeAs(
    'public/portadas/'.$input["Codbarras"], $Request->file('fotoportada')->getClientOriginalName()
) : "";
            $path =   $Request->file('fotoportada')!=null ?
    'portadas/'.$input["Codbarras"]."/".$Request->file('fotoportada')->getClientOriginalName() : false;

         // dd($input);
            // dd($input["fotoportada"]->getClientOriginalName(),$path);
    Literal::editarLibro($input,$path);


return response()->json(["mes"=>"ok"]);

    }

    public function guardar(Request $Request)
    {
    	$input = $Request->all();

        	$Request->file('fotoportada')!=null ? $Request->file('fotoportada')->storeAs(
    'public/portadas/'.$input["Codbarras"], $Request->file('fotoportada')->getClientOriginalName()
) : "";
            $path = $Request->file('fotoportada')!=null ?
    'portadas/'.$input["Codbarras"]."/".$Request->file('fotoportada')->getClientOriginalName() : "";

    	 // dd($input);
    		// dd($input["fotoportada"]->getClientOriginalName(),$path);
Literal::ingresarLibro($input,$path);

return response()->json(["mes"=>"ok"]);


    }
    public function ticket($valor,$valor2)
    {
            $producto=json_decode(base64_decode($valor));
            $venta=json_decode(base64_decode($valor2));
         
            foreach ($producto as $key => $value) {
                # code...
                $libro=explode("-", $value->articulo);
                $libroEncontrado=Literal::where("id_libro",$libro[0])->first();
          
                    $producto[$key]->titulo=$libroEncontrado->Titulo;
            }
               // dd($producto,$venta);
        return view('ingresarLibro/modal/ticket',compact("producto","venta"));
    }

    public function verificarExistenciaFinal(Request $request)
    {
        //  dd($request);

        // "pagos" => "[{"tipoPago":"TC BANAMEX","monto":"1156","tarjetaChequeNumero":"asd34","fechaVencimiento":"1/9/2020"},{"tipoPago":"Efectivo","monto":"700","tarjetaChequeNumero":"","fechaVencimiento":""}]"
        try{
 DB::beginTransaction();
//        dd(count($articulos),$articulos,"wtf");
        $articulos=json_decode($request->productos);
        $pagos=json_decode($request->pagos);
        $venta=json_decode($request->venta);
            foreach ($articulos as $ky=>$art)
            {
//        dd($ky,$art);
                $articulo=explode("-",$art->articulo);

                $valor=  Literal::verificarExistencia($art->cantidad->cantidad,$articulo[0]);

                if($valor["resultado"])
                {
                    $articulos[$ky]->ok=$valor;
                }else{

                    throw new \Exception("No se cuenta Con la existencia Solicitada de ".$art->cantidad." del libro: ".$articulo[1]."; solo Existen:".$valor["total"]);
                }

//            $articulos[$ky]->append(json_encode(["ok"=>$valor]));
//            array_push($articulos[$ky],json_encode(["ok"=>$valor]));

            }

   // dd($articulos,"twf");
            $guardarVenta=[];
            foreach ($venta as $ven => $ta) {
                # code...
         
                       $guardarVenta[$ven]=ventas::create([
        'Usrventa'=>\Auth::User()->id_usuario,
        'Subtotal'=> $ta->subtotal,
        'IVA'=> 16,
        'Totalventa'=> $ta->total,
        'Cobrado'=> $ta->cambio,
        'Descuento'=> $ta->descuento,
        'Tipocli'=> $ta->tipocliente,
        'Credencial'=> $ta->credencial,
        'Nombrecli'=> $ta->nombrecliente,
        'Dependencia'=> $ta->dependencia,
        
    ]);
            }

     
     
            foreach ($pagos as $key => $value) {
                # code...
                // [{"tipoPago":"TC BANCOME","monto":"1252.80","tarjetaChequeNumero":"0899009","fechaVencimiento":"1/9/2020"}]
               $cobro= tipocobro::where("Desccobro","like",$value->tipoPago)->get();
                    cobroventa::create([
        'fk_venta'=> $guardarVenta[0]->id_venta , 
        'TipoCobro'=>$cobro[0]->id_tipoCobro,
        'Monto'=>$value->monto,
        'detallepago'=>$value->tarjetaChequeNumero,
        'fechavencimiento'=>\Carbon\Carbon::parse($value->fechaVencimiento)->format("Y-m-d")
    ]);
            }
        foreach ($articulos as $arti => $culos) {
            # code...


           $articulo=explode("-",$culos->articulo);
                 ventas_detalle::create(['Clavevent'=> $guardarVenta[0]->id_venta ,'CodigoBar'=>$articulo[1],'Cantidad'=>$culos->cantidad->cantidad,
                    // 'Clavecasa',
                    'Precioventa'=>$culos->cantidad->total,'Costo'=>$culos->cantidad->precio,'Descuento'=>$culos->cantidad->descuento,'IVA'=>16,'Claveprov','fk_libro'=>$articulo[0]]);
        }
   
     
            $cobro=Literal::Cobrar($articulos);
DB::commit();
            return response()->json(["resultado"=>$cobro]);
        }catch (\Exception $e)
        {
DB::rollBack();
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

        $valor=  Literal::verificarExistencia($art->cantidad->cantidad,$articulo[0]);

        if($valor["resultado"])
        {
            $articulos[$ky]->ok=$valor;
        }else{

            throw new \Exception("No se cuenta Con la existencia Solicitada del libro '".$articulo[1]."'', por la cantidad de: ".$art->cantidad->cantidad."; solo Existen: '".$valor["total"]."' en total");
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

    public function guardarEntrada(Request $request)
    {
        // dd(json_decode($request->factura));
        // dd(json_decode($request->partes));
$id_factura=0;


try {
 DB::beginTransaction();

$factura=json_decode($request->factura);
$entradas=json_decode($request->partes);


$numeroEntradas=0;
$arreglo=[];
foreach ($entradas as $key => $value) {
    # code...
$numeroEntradas=count($value);
$arreglo[$key]=$value;

}

// abort(403, 'Unauthorized action.');

  $flight = entradas::create([
"ClaveEnt"=>"",
 "Fecrecepcion"=>\Carbon\Carbon::parse($factura->fechaRecepcion)->format('Y-m-d'),
 "Fecenvio"=>\Carbon\Carbon::parse($factura->fechaEnvio)->format('Y-m-d'),
 "Totalfac"=>$factura->totalFactura, 
"Referencia"=>$factura->Referencia,
 "Clavetipent"=>$factura->tipoEntrada,
 "Observaciones"=>$factura->Observacion,
 "Claveprov"=>$factura->Proveedor,
 "Usrrecibio"=>"",
 "Fecfiniquito"=>\Carbon\Carbon::today('America/Mexico_City')->format('Y-m-d'),
 "fecfinconsigna"=>\Carbon\Carbon::parse($factura->fechaConsignacion)->format('Y-m-d'),
 "Usralta"=>""

  ]);
  $hoy=\Carbon\Carbon::today('America/Mexico_City')->format('Y-m-d');
  $flight->ClaveEnt=$flight->id_entrada."-".$hoy;
  $flight->save();
  $id_factura=$flight->id_entrada;

for ($i=0; $i < count($value); $i++) { 
    $entradas_detalles = new entradas_detalles;
    $entradas_detalles->Claveent=$flight->id_entrada;
  
    # code...
        // dd($key,$value[$i]);
$colofon=$entradas->fechaColofonArticulo[$i]!="" ? $entradas->fechaColofonArticulo[$i]: null;
$entradas_detalles = entradas_detalles::create(["Claveent"=>$flight->id_entrada, 
    "Codigobarr"=>intval($entradas->pk_libro[$i]), 
    "Cantidad"   =>intval($entradas->cantidadArticulo[$i]), 
    "Preciolista"=>floatval($entradas->precioUnitarioProducto[$i]),
     "Descprov" =>floatval($entradas->descuentoCompraArticulo[$i]), 
     "Claveprov"=>floatval($entradas->descuentoVentaArticulo[$i])
     , "Observación"=>$entradas->ObservacionArticulo[$i]
     , "fechaColofon"=>$colofon]);









 $entradas_detalles->save();


 $libro = Literal::where('id_libro', intval($entradas->pk_libro[$i]))->first();
$libro->Existencia+=intval($entradas->cantidadArticulo[$i]);
$libro->Costo=floatval($entradas->descuentoCompraArticulo[$i]);
$libro->Preciolista=floatval($entradas->precioUnitarioProducto[$i]);
$libro->Descuento=floatval($entradas->descuentoVentaArticulo[$i]);

 $libro->save();
    
}
  DB::commit();
    
} catch (\Exception $e) {
    DB::rollBack();
    return response()->json([
"ok"=>false,
"mensaje"=>$e->getMessage(),
"id"=>$id_factura
]);


}

return response()->json([
"ok"=>true,
"mensaje"=>"todoCorrecto",
"id"=>$id_factura
]);

 // $entrada = entradas_detalles::create(["Claveent", "Codigobarr", "Cantidad", "Preciolista", "Descprov", "Claveprov", "Observación", "fechaColofon"]





    }
}
