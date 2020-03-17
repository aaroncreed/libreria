<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clientes extends Model
{
    //
     protected $primaryKey = "id_claveCliente";
    protected $table = "clientes";
    protected $fillable = [
        'Razsocial', 'Apepat','Apemat','Nombre','Domicilio','Codpostal','Municipio','Colonia','Estado','Telefono','RFC','Email','Fecalta','Fecultventa','Diascre','Limitecre','estatusm'
    ];

    public $timestamps = false;
}
