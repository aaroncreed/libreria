<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class proveedor extends Model
{
    //

         protected $primaryKey = "id_proveedor";
    protected $table = "proveedor";
    protected $fillable = [ 
"Claveprov",
"Empresa"	,
"Contacto"	,
"Domicilio"	,
"Codpostal"	,
"Municipio"	,
"Ciudad"	,
"Estado"	,
	"Telefono"	,
	"RFC"	,
	"Curp"	,
	"Email"	,
	"Fecultcomp",
	"Montoactual"	,
	"Fecalta",
"estatusm"];

public $timestamps = false;
    public static function ingresarProveedor()
    {
    	   // return DB::insert('insert into `casaeditorial`(`Clavecasedit`,`Desccasedit`) 
        // values (?,?)', ["123","Editorial Bersunsa"]);

    }
    public static function obtenerProveedor()
    {
    	        return DB::select("
SELECT id_medida,Clavemed,Descmed 
FROM `medidas` ");
    }


}
