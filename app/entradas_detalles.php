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

	public function libro()
	{
		return $this->belongsTo("App\libros","Codigobarr");
	}
	public function entrada()
	{
		return $this->belongsTo("App\\entradas","Claveent");
	}
	public function devolucion()
	{
		return $this->hasMany("App\devolucion","fk_emtrada_detalle","id_detallleEntrada");
	}
}
