<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class medidas extends Model
{
    //
    
         protected $primaryKey = "id_medida";
    protected $table = "medidas";
    protected $fillable = ["Clavemed","Descmed"];
public $timestamps = false;

    public static function ingresarMedida()
    {
    	   // return DB::insert('insert into `casaeditorial`(`Clavecasedit`,`Desccasedit`) 
        // values (?,?)', ["123","Editorial Bersunsa"]);

    }
    public static function obtenerMedidas()
    {
    	        return DB::select("
SELECT id_medida,Clavemed,Descmed 
FROM `medidas` ");
    }
}
