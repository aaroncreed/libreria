<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function configuracion()
    {
        if (\Auth::User()->Nivel==1) {
            # code...
                $casaeditorial=\App\casaeditorial::get();
        $clientes=\App\clientes::get();
        $tipoCliente=\App\tipocliente::get();
        $descuentos=\App\descuentos::get();
        $medidas=\App\medidas::get();
        $proveedor=\App\proveedor::get();
        $tipocobro=\App\tipocobro::get();
        $tipoentrada=\App\tipoentrada::get();
        // dd($clientes);
        return view('ingresarLibro.configuracion',compact("casaeditorial","clientes","tipoCliente","descuentos","medidas","proveedor","tipocobro","tipoentrada"));
        }

          return redirect('/login');

    
    }
    
}
