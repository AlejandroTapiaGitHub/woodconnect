@extends('layouts.base')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/register.css') }}">
@endsection

@section('title')
    register
@endsection

@section('content')
    <div class="contenedor">
        <main>
            <div class="main-form">
                <h1>Sing up</h1>
                <form action="{{ route('user.register.validate') }}" method="POST">
                    @csrf
                    <p>
                        <input type="text" name="nickname" placeholder="nickname" value="{{ old('nickname') }}" required>
                        @error('nickname')
                        <p style="color: red">{{ $message }}</p>
                    @enderror
                    </p>
                    <p>
                        <input type="email" name="email" placeholder="email" value="{{ old('email') }}" required>
                        @error('email')
                        <p style="color: red">{{ $message }}</p>
                    @enderror
                    </p>
                    <p>
                        <input type="password" name="password" placeholder="password" required>
                        @error('password')
                        <p style="color: red">{{ $message }}</p>
                    @enderror
                    </p>
                    <input type="submit" name="iniciarSesion" value="Next">
                </form>
            </div>
            <div class="main-links">
                <a href="{{ route('login') }}">cancelar</a>
            </div>
        </main>
    </div>
@endsection
