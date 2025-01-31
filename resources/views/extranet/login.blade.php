@extends('extranet.app')
@section('css_pagina')
    <link rel="stylesheet" href="{{ asset('css/extranet/login.css') }}">
@endsection
@section('cuerpo')
    <div class="container-login">
        <div class="wrap-login">
            <form action="{{ route('login') }}" method="POST">
                @csrf
                @method('post')
                <!-- LOGO -->
                <span class="login-form-title">Iniciar Sesión</span>
                <!--<img class="avatar"src="img/user.svg" alt="" align="center"> -->
                <img class="avatar"src="https://cdn-icons-png.flaticon.com/512/3135/3135789.png" alt="" align="center">
                <!-- USUARIO -->
                <div class="wrap-input100">
                    <input class="input100" type="text" name="email" placeholder="Usuario">
                    <span class="focus-efecto"></span>
                </div>
                <!-- CONTRASEÑA -->
                <div class="wrap-input100">
                    <input class="input100" type="password" name="password" placeholder="Contraseña">
                    <span class="focus-efecto"></span>
                </div>
                <!-- BOTÓN -->
                <div class="container-login-form-btn">
                    <div class="wrap-login-form-btn">
                        <div class="login-form-bgbtn"></div>
                        <button type="submit" name="btnEntrar" class="login-form-btn">ENTRAR</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('script_pagina')
@endsection
