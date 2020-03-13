<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class devolucion extends Model
{
    //
       protected $primaryKey = "id_devolucion";
    protected $table = "devolucion";
    protected $fillable = [ "fk_emtrada_detalle", "cantidad", "fechaDevolucion", "quien", "dinero"];
 public $timestamps = false;


    public function detalle()
    {
    	$this->belongTo("App\entradas_detalles","fk_emtrada_detalle");
    }
}
