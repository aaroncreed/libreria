<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class libros extends Model
{
    //
      protected $primaryKey = "id_libro";
    protected $table = "libros";
    protected $fillable = [

  "Codbarras" ,
  "Clavecasedit" ,
  "Titulo" ,
  "Autor" ,
  "ClaveInterna" ,
  "ISBN" ,
  "Inventariable",
  "Claveunimed" ,
  "Existencia" ,
  "Puntoreorden" ,
  "Costo" ,
  "Preciolista" ,
  "Peso" ,
  "Numeropag" ,
  "fechaColofon" ,
  "Tema" ,
  "fecalta" ,
  "Descuento" ,
  "Ultimoprov" ,
  "Sinopsis" ,
  "Ubicacion" ,
  "Usralta" ,
  "fotoportada"
    ];

    public $timestamps = false;

    public static function obtenerCasaEditorialTodas()
    {
        return DB::select("
SELECT *
FROM `libros` ");
    }
    public static function  verificarExistencia($cantidad,$articulo)
    {

        $libro=DB::select("
SELECT *
FROM `libros` where `id_libro`= ? ",[$articulo]);
        $existenciaActual=$libro[0]->Existencia;
//        dd($existenciaActual,$cantidad);
        $total=$existenciaActual- $cantidad;
$resultado=[
    "resultado"=>$total>-1 ? true:false, "total"=>$total>-1 ? $total:$existenciaActual
    ];
        return $resultado;

    }

    public static function Cobrar($articulos)
    {

//        array:1 [
//        0 => {#257
//        +"cantidad": 3
//        +"articulo": "2-asdasd"
//        +"ok": array:2 [
//            "resultado" => true
//      "total" => 0
//    ]
//  }
//]




        foreach ($articulos as $key=>$art)
        {

                $articulo=explode("-",$art->articulo);
            DB::update('update libros set Existencia = ? where id_libro= ?', [$art->ok["total"],$articulo[0]]);
        }

          return $articulos;

    }
    public static function editarLibro($arreglo,$path)
    {

      $dato=[
        "Codbarras" => $arreglo["Codbarras" ],
"Clavecasedit" => 
  $arreglo["Clavecasedit"],
"Titulo" =>
  $arreglo["Titulo" ],
"Autor" =>  $arreglo["Autor" ],
"ClaveInterna" => $arreglo["ClaveInterna" ],
"ISBN" =>$arreglo["ISBN" ],
"Inventariable"=> $arreglo["Inventariable"] , 
"Claveunimed" => $arreglo["Claveunimed"],
"Existencia" =>
  $arreglo["Existencia" ],
"Puntoreorden" => $arreglo["Puntoreorden" ],
"Costo" =>  $arreglo["Costo" ],
"Preciolista" =>  $arreglo["Preciolista" ],
"Peso" =>  $arreglo["Peso" ],
"Numeropag" => $arreglo["Numeropag" ],
// "fechaColofon" =>  $arreglo["fechaColofon" ],
"Tema" =>  $arreglo["Tema" ],
// "fecalta" =>  $arreglo["fecalta" ],
"Descuento" =>  $arreglo["Descuento" ],
"Ultimoprov" =>
  $arreglo["Ultimoprov" ],
"Sinopsis" =>  $arreglo["Sinopsis" ],
"Ubicacion" =>  $arreglo["Ubicacion" ],
// "Usralta" =>  $arreglo["Usralta" ],
"fotoportada"=>  $path

      ];
      $otro=[
        "Codbarras" => $arreglo["Codbarras" ],
"Clavecasedit" => 
  $arreglo["Clavecasedit"],
"Titulo" =>
  $arreglo["Titulo" ],
"Autor" =>  $arreglo["Autor" ],
"ClaveInterna" => $arreglo["ClaveInterna" ],
"ISBN" =>$arreglo["ISBN" ],
"Inventariable"=> $arreglo["Inventariable"] , 
"Claveunimed" => $arreglo["Claveunimed"],
"Existencia" =>
  $arreglo["Existencia" ],
"Puntoreorden" => $arreglo["Puntoreorden" ],
"Costo" =>  $arreglo["Costo" ],
"Preciolista" =>  $arreglo["Preciolista" ],
"Peso" =>  $arreglo["Peso" ],
"Numeropag" => $arreglo["Numeropag" ],
// "fechaColofon" =>  $arreglo["fechaColofon" ],
"Tema" =>  $arreglo["Tema" ],
// "fecalta" =>  $arreglo["fecalta" ],
"Descuento" =>  $arreglo["Descuento" ],
"Ultimoprov" =>
  $arreglo["Ultimoprov" ],
"Sinopsis" =>  $arreglo["Sinopsis" ],
"Ubicacion" =>  $arreglo["Ubicacion" ],
// "Usralta" =>  $arreglo["Usralta" ],
// "fotoportada"=>  $path

      ];
            $direccion=$path!=false? $dato : $otro;
      return DB::table('libros')->where('id_libro',$arreglo["id_libro"])->update($direccion);

    }
    public static function ingresarLibro($arreglo,$path)
    {
        return DB::insert('insert into `libros`(
 `Codbarras` ,
  `Clavecasedit` ,
  `Titulo` ,
  `Autor` ,
  `ClaveInterna` ,
  `ISBN` ,
  `Inventariable`, 
  `Claveunimed` ,
  `Existencia` ,
  `Puntoreorden` ,
  `Costo` ,
  `Preciolista` ,
  `Peso` ,
  `Numeropag` ,
  `fechaColofon` ,
  `Tema` ,
  `fecalta` ,
  `Descuento` ,
  `Ultimoprov` ,
  `Sinopsis` ,
  `Ubicacion` ,
  `Usralta` ,
  `fotoportada`

        	) 
        values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)', [
  $arreglo["Codbarras" ],
  $arreglo["Clavecasedit"],
  $arreglo["Titulo" ],
  $arreglo["Autor" ],
  $arreglo["ClaveInterna" ],
  $arreglo["ISBN" ],
  $arreglo["Inventariable"] ==true ? 1 : 0,
  $arreglo["Claveunimed"],
  $arreglo["Existencia" ],
  $arreglo["Puntoreorden" ],
  $arreglo["Costo" ],
  $arreglo["Preciolista" ],
  $arreglo["Peso" ],
  $arreglo["Numeropag" ],
  $arreglo["fechaColofon" ],
  $arreglo["Tema" ],
  $arreglo["fecalta" ],
  $arreglo["Descuento" ],
  $arreglo["Ultimoprov" ],
  $arreglo["Sinopsis" ],
  $arreglo["Ubicacion" ],
  $arreglo["Usralta" ],
  $path

        ]);
    }

     public function detalleVenta()
    {
        return $this->hasMany("App\\ventas_detalle","fk_libro","id_libro");
    }

    public function casaedit()
    {
      return $this->hasOne("App\casaeditorial","id_casaEditorial","Clavecasedit");
    }
}
