<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ventas_detalle extends Model
{
    //
       protected $table="ventas_detalle";
    protected $primaryKey='id_detalleVenta ';

       protected $fillable = [
    	'Clavevent ','CodigoBar','Cantidad','Clavecasa','Precioventa','Costo','Descuento','IVA','Claveprov'
        
    ];
    public $timestamps = false;


}
