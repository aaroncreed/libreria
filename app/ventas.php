<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ventas extends Model
{
    //
      protected $table="ventas";
    protected $primaryKey='id_venta';

       protected $fillable = [
    	'Clavevent','Fecventa','Horaventa','Usrventa','Subtotal','IVA','Totalventa','Cobrado','Descuento',
        'Tipocli','Credencial','Nombrecli','Dependencia','Fecbaja','horabaja','Usrbaja','Observaciones'
        
    ];
    public $timestamps = false;



    public function tipoCliente()
    {
    	return $this->hasOne("App\\tipocliente","id_tipoCliente","Tipocli");
    }
   
     public function detalleVenta()
    {
        return $this->hasMany("App\\ventas_detalle","Clavevent ","id_venta");
    }
}
