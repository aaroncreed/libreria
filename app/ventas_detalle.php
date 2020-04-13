<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ventas_detalle extends Model
{
    //
       protected $table="ventas_detalle";
    protected $primaryKey='id_detalleVenta ';

       protected $fillable = [
    	'Clavevent','CodigoBar','Cantidad','Clavecasa','Precioventa','Costo','Descuento','IVA','Claveprov','fk_libro'
        
    ];
    public $timestamps = false;


    public function venta()
    {
    	return $this->hasOne("App\\ventas","id_venta","Clavevent");
    }

       public function libro()
    {
        return $this->hasMany("App\libros","id_libro","fk_libro");
    }


}
