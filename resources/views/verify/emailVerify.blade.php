@extends('layouts.base')

@section('title')
    email Verify
@endsection


@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/emailVerify.css') }}">
@endsection

@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const verificationCodeInput = document.getElementById('code');

            verificationCodeInput.addEventListener('input', function(event) {
                let value = event.target.value;

                // Remover guiones anteriores para evitar duplicados
                value = value.replace(/-/g, '');

                // Insertar guiones cada tres dígitos
                value = value.replace(/(\d{3})(?=\d)/g, '$1-');

                // Actualizar el valor del campo de entrada
                if (value.length > 11) {
                    value = value.slice(0, 11);
                }

                event.target.value = value;

            });
        });
    </script>
@endsection

@section('content')
    @if (session('error'))
        <div style="color: red;">{{ session('error') }}</div>
    @endif

    <div class="contenedor">
        <main>
            <div class="main-form">
                <h1>Verify code</h1>
                <form action="{{ route('verify.email.submit') }}" method="POST">
                    @csrf
                    <p><input type="text" name="code" id="code" placeholder="XXX-XXX-XXX"
                            value="{{ old('code') }}" required></p>
                    @error('email')
                        <p style="color: red">{{ $message }}</p>
                    @enderror
                    <p><a href="{{ route('verify.email') }}">resend code</a></p>
                    <input type="submit" name="iniciarSesion" value="Verify">
                </form>
            </div>
        </main>
    </div>
@endsection
