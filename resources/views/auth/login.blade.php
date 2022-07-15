<!DOCTYPE html>
<html lang="en">

<head>
    <title>Iniciar Sesión</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    
    <link href="{{ asset('assets/icofont/icofont.min.css') }}" rel="stylesheet">
    
    <link rel="stylesheet" href="{{ asset('assets/login/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/general.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">

</head>

<body>
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
            <input id="token" type="text" class="form-control d-none">
        </div>
    </div>
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/sweetalert2.all.min.js') }}"></script>
    <script src="{{ asset('assets/js/respuestas.js') }}"></script>
    <script src="{{ asset('assets/login/login.js') }}"></script>
</body>
</html>
