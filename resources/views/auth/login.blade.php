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
    <div class="bg-comparte"></div>
    <div class="auth-wrapper">
        <div class="auth-content">
            <div class="card">
                <div class="card-body text-center ">
                    
                    <h3 class="mb-4 mt-4 font-comparte-1">¡Hola! Ingresa tu correo y contraseña</h3>
                    <div class="label d-flex justify-content-start align-items-center"><i class="icofont-ui-email mr-2"></i> Correo</div>
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" placeholder="user@email.com">
                    </div>
                    <div class="label d-flex justify-content-start align-items-center"><i class="icofont-ui-password mr-2"></i> Contraseña</div>
                    <div class="input-group mb-4">
                        <input type="password" class="form-control" placeholder="">
                    </div>
                    <button class="btn shadow-2 mb-4 btn-comparte-primary">Iniciar sesión</button>
                    <p class="mb-2 text-muted">Olvidaste tu contraseña? <a href="reset">Recuperar</a></p>
                    <p class="mb-0 text-muted">No tienes una cuenta? <a href="registrar">Registrarse</a></p>
                </div>
            </div>
        </div>
    </div>


</body>
</html>
