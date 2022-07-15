<!DOCTYPE html>
<html lang="en">

<head>
    <title>Compártelo - Restaurar Contraseña</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- Favicon icon {{ asset('assets/css/tabler.min.css') }} -->
    <link rel="icon" href="{{ asset('assets/login/images/favin.ico') }}" type="image/x-icon">
    <!-- fontawesome icon -->
    <link rel="stylesheet" href="{{ asset('assets/login/fonts/fontawesome/css/fontawesome-all.min.css') }}">
    <!-- animation css -->
    <link rel="stylesheet" href="{{ asset('assets/login/plugins/animation/css/animate.min.css') }}">
    <!-- vendor css -->
    <link rel="stylesheet" href="{{ asset('assets/login/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/login/css/login.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/general.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
</head>

<body>
    <div class="bg-comparte"></div>
    <div class="auth-wrapper">
        <div class="auth-content">
            <!-- <div class="auth-bg">
                <span class="r"></span>
                <span class="r s"></span>
                <span class="r s"></span>
                <span class="r"></span>
            </div> -->
            <div class="card">
                <div class="card-body text-center">
                    <div class="mb-4">
                        <i class="feather icon-mail auth-icon"></i>
                    </div>
                    <h3 class="mb-4 font-comparte-1">Restaurar Contraseña</h3>
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" placeholder="Email">
                    </div>
                    <button class="btn btn-primary mb-4 shadow-2 btn-comparte-primary">Restaurar</button>
                    <!-- <p class="mb-0 text-muted">Don’t have an account? <a href="auth-signup.html">Signup</a></p> -->
                </div>
            </div>
        </div>
    </div>

    <!-- Required Js -->
<script src="{{ asset('assets/login/js/vendor-all.min.js') }}assets/js/vendor-all.min.js"></script>
	<script src="{{ asset('assets/login/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/login/js/pcoded.min.js') }}"></script>

</body>
</html>
