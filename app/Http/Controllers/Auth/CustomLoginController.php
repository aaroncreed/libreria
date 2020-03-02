<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Lang;
use Illuminate\Validation\ValidationException;

class CustomLoginController extends Controller
{

    use AuthenticatesUsers;

    protected $maxAttempts = 10; // Default is 5
    protected $decayMinutes = 1; // Default is 1

    // public function username()
    // {
    //     return 'email';
    // }
 //    public function loginUsername()
 // {
 //     return 'Claveusr';
 // }


 // public function loginUsername()
 // {
 //     return 'Claveusr';
 // }


    public function authenticate(Request $request)
    {
        dd($request->email,$request->password);
        $this->validateLogin($request);

        // if ($this->hasTooManyLoginAttempts($request)) {
        //     $this->fireLockoutEvent($request);

        //     $seconds = $this->limiter()->availableIn(
        //         $this->throttleKey($request)
        //     );

        //     throw ValidationException::withMessages([
        //         $this->username() => [Lang::get('auth.throttle', ['seconds' => $seconds])],
        //         'seconds' => $seconds
        //     ])->status(429);
        // }

$uname = $request->email;
        $password = $request->password;
            if (Auth::attempt(array('email' => $uname, 'password' => $password))){
                return "success";
            }
            else {        
                return "Wrong Credentials";
            }
        


        $credentials = 
        $request->only('Claveusr', 'password');
         // dd($credentials);
        dd( Auth::attempt($credentials));
        $value = session('ruta');
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            $this->clearLoginAttempts($request);
            return response()->json(array('ok' => "si", "nombre" => Auth::User()->nombre,"dependencia"=>Auth::User()->FK_dependencia, "ruta" => $value));
        } else {
            // $this->incrementLoginAttempts($request);
            dd("wtf");
            return $this->sendFailedLoginResponse($request);
        }
    }
}
