<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cobroventa extends Model
{
    //
       protected $primaryKey = "id_cobroVenta";
    protected $table = "cobroventa";
    protected $fillable = [
        'fk_venta', 'TipoCobro','Monto','detallepago','fechavencimiento'
    ];

    public $timestamps = false;

         public function tipoCobro()
    {
    	return $this->hasOne("App\\tipocobro","id_tipoCobro","TipoCobro");
    }
}
