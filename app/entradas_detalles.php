<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class entradas_detalles extends Model
{
    //
       protected $primaryKey = "id_detallleEntrada";
    protected $table = "entradas_detalle";
    protected $fillable = [ "Claveent", "Codigobarr", "Cantidad", "Preciolista", "Descprov", "Claveprov", "Observación", "fechaColofon"];

public $timestamps = false;
}
