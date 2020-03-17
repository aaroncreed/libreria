<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class descuentos extends Model
{
    //
         protected $primaryKey = "id_descuento";
    protected $table = "descuentos";
    protected $fillable = [ "TipoDesc", "Tipocli", "Descuento", "Usralta","estatusm"];

    public $timestamps = false;
}
