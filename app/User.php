<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */


     protected $table="usuarios";
    protected $primaryKey='id_usuario';
// public function getAuthPassword()
//     {
//       return $this->password;
//     }
    // public function setPasswordAttribute($value)
    // {
    //     if( \Hash::needsRehash($value) ) {
    //         $value = bcrypt($value);
    //     }
    //     $this->attributes['password'] = $value;
    // }
//     public function setPasswordAttribute($value) {
//         // dd(bcrypt($value),$value);
//     $this->attributes['password'] = bcrypt($value);
// }

    protected $fillable = [
      "Claveusr", "password","email","contraseña", "Numempleado", "Nombre", "Nivel", "Fecalta", "Fecbaja", "Huella", "Usralta"
    ];
 public $timestamps = false;
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'Password'
    ];
 
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    // protected $casts = [
    //     'email_verified_at' => 'datetime',
    // ];
}
