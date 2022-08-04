@extends('layouts.public')
@section('css')
<link rel="stylesheet" href="{{ asset('assets/login/css/style.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">
@endsection
@section('contenido')
<div class="bg-comparte">
    <img class="logo-img mt-2 ml-2" src="{{ asset('assets/img/logo_v2.png') }}" alt="" srcset="">
    </div>
    <div class="auth-wrapper">
        <div class="auth-content">
            <div class="card">
                <form action="" id="form-login">
                    <input type="hidden" value="cliente" id="tipo">
                    <div class="card-body text-center ">
                        <h3 class="mb-4 mt-4 font-comparte-1">¡Hola! Ingresa tu correo y contraseña</h3>
                        <div class="label d-flex justify-content-start align-items-center"><i class="icofont-ui-email mr-2"></i> Correo</div>
                        <div class="input-group mb-3">
                            <input type="email" class="form-control" name="email" placeholder="Correo" required autocomplete="off">
                        </div>
                        <div class="label d-flex justify-content-start align-items-center"><i class="icofont-ui-password mr-2"></i> Contraseña</div>
                        <div class="input-group mb-4">
                            <input type="password" class="form-control" name="password" placeholder="Contraseña" required autocomplete="off">
                        </div>
                        <button type="submit" class="btn shadow-2 mb-4 btn-comparte-primary">Iniciar sesión</button>
                        <p class="mb-2 text-muted">Olvidaste tu contraseña? <a href="reset">Recuperar</a></p>
                        <p class="mb-0 text-muted">No tienes una cuenta? <a href="registrar">Registrarse</a></p>
                    </div>
                </form>
            </div>
            <br>
        </div>
    </div>
@endsection
@section('script')
<script src="{{ asset('assets/login/login.js') }}"></script>
@endsection