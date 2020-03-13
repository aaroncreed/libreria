<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class descuentos extends Model
{
    //
         protected $primaryKey = "id_devolucion";
    protected $table = "devolucion";
    protected $fillable = [ "fk_emtrada_detalle", "cantidad", "fechaDevolucion", "quien", "dinero"];
}
