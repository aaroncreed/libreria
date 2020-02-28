<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tipocobro extends Model
{
    //
       protected $table="tipocobro";
    protected $primaryKey='id_tipoCobro';

       protected $fillable = [
    	'TipoCobro','Desccobro','Usralta'
        
    ];
    public $timestamps = false;


}
