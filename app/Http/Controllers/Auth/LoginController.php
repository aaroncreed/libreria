<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;


      public function username()
    {
        return 'Claveusr';
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    // public function authenticate(Request $request)
    // {
    //     dd($request);
    //     $this->validateLogin($request);

    //     if ($this->hasTooManyLoginAttempts($request)) {
    //         $this->fireLockoutEvent($request);

    //         $seconds = $this->limiter()->availableIn(
    //             $this->throttleKey($request)
    //         );

    //         throw ValidationException::withMessages([
    //             $this->username() => [Lang::get('auth.throttle', ['seconds' => $seconds])],
    //             'seconds' => $seconds
    //         ])->status(429);
    //     }

    //     $credentials = $request->only('correo_electronico', 'password');
    //     $value = session('ruta');
    //     if (Auth::attempt($credentials)) {
    //         $request->session()->regenerate();
    //         $this->clearLoginAttempts($request);
    //         return response()->json(array('ok' => "si", "nombre" => Auth::User()->nombre,"dependencia"=>Auth::User()->FK_dependencia, "ruta" => $value));
    //     } else {
    //         $this->incrementLoginAttempts($request);
    //         return $this->sendFailedLoginResponse($request);
    //     }
    // }
   
}
