<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class casaeditorial extends Model
{
    //
      protected $primaryKey = "id_casaEditorial";
    protected $table = "casaeditorial";
    protected $fillable = [
        'Clavecasedit', 'Desccasedit',
    ];

    public $timestamps = false;

    public static function obtenerCasaEditorialTodas()
    {
        return DB::select("
SELECT id_casaEditorial,Clavecasedit,Desccasedit
FROM `casaeditorial` ");
    }


    public static function ingresarNuevo()
    {
        return DB::insert('insert into `casaeditorial`(`Clavecasedit`,`Desccasedit`) 
        values (?,?)', ["123","Editorial Bersunsa"]);
    }
}
