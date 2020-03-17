<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tipoentrada extends Model
{
    //
             protected $primaryKey = "id_tipoEntrada";
    protected $table = "tipoentrada";
    protected $fillable = [ 
"Tipoent",
"Desctipent"	,
"Usralta"	,
"estatusm"
];

 public $timestamps = false;
    public static function ingresartipoentrada()
    {
    	   // return DB::insert('insert into `casaeditorial`(`Clavecasedit`,`Desccasedit`) 
        // values (?,?)', ["123","Editorial Bersunsa"]);

    }
    public static function obtenertipoentrada()
    {
    	        return DB::select("
SELECT id_medida,Clavemed,Descmed 
FROM `medidas` ");
    }
}
