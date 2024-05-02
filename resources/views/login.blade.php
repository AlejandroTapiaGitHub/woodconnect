@extends('layouts.base')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">
@endsection

@section('title', 'Woodconnect')

@section('content')

    <div class="contenedor">
        <main>
            @if (session('statusRegister'))
                <div class="statusRegister">
                    {{ session('statusRegister') }}
                </div>
            @endif

            <div class="main-form">
                <img src="{{ asset('assets/img/woodconnectPixelArt.jpeg') }}" alt="Logotipo de la aplicación Woodconnect" id="logotipoApp">
                <form action="{{ route('auth.singIn') }}" method="POST">
                    @csrf
                    <p><input type="email" name="email" placeholder="Email" value="{{ old('email') }}" required></p>
                    @error('email')
                        <p style="color: red">{{ $message }}</p>
                    @enderror

                    <p><input type="password" name="password" placeholder="Contraseña" required></p>
                    @error('password')
                        <p style="color: red">{{ $message }}</p>
                    @enderror

                    <input type="submit" name="iniciarSesion" value="Iniciar sesión">
                </form>
            </div>

            <div class="main-links">
                <a href="">He olvidado mi contraseña</a>
                <a href="{{ route('user.register') }}">Regístrate</a>
            </div>
        </main>
    </div>

@endsection
