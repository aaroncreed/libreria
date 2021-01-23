@extends('layouts.app')

@section('content')
<div class="" style="height: 900px;">
    <div class="row" style="height: 300px; background-color: #292929;" >
    </div>
    <div class="row justify-content-center" style="    background: url(http://localhost:8000/img/fondo.png);
    background-position: center;
    background-size: 58%;
">
        <div class="col-md-8">
            <div class="card" style="    background-color: #60b7c6 !important;">
                <div class="card-header" style="background-color: rgb(41 41 41) !important;"></div>
 <img src="{{asset('img/escudo.png')}}" style=" padding-top: 10px;
    margin: 0 auto;
    width: 20%;">
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">USUARIO</label>

                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="Claveusr" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">CONTRASEÑA</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
<!-- 
                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div> -->

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                              <!--   @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif -->
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
        <div class="row" id="fondoAbajo" style="height: 300px; background-color: #60b7c6;" >
            <script type="text/javascript">
                location.hash = "fondoAbajo"
            </script>
    </div>
</div>
<footer>
    </footer>
@endsection
