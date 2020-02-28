<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tipocliente extends Model
{
    //
       protected $table="tipocliente";
    protected $primaryKey='id_tipoCliente ';

       protected $fillable = [
    	'TipoCli','Desctipo','Usralta'
        
    ];
    public $timestamps = false;


}
