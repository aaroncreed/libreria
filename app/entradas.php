<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class entradas extends Model
{
    //
            protected $primaryKey = "id_entrada";
    protected $table = "entradas";
    protected $fillable = [ "ClaveEnt", "Fecrecepcion", "Fecenvio", "Totalfac", "Referencia", "Clavetipent", "Observaciones", "Claveprov", "Usrrecibio", "Fecfiniquito", "fecfinconsigna", "Usralta"];

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
    public function detalles()
    {
        return $this->hasMany("App\\entradas_detalles","Claveent","id_entrada")->with("libro");
    }
    public function catalogoTipoEntrada()
    {
        return $this->belongsTo("App\\tipoentrada","Clavetipent");
    }
    public function catalogoProveedor()
    {
        return $this->belongsTo("App\proveedor","Claveprov");
    }
}
