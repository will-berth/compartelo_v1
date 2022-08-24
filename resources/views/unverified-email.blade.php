<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>COMPARTRELO</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.svg" />
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/general.css') }}">
    <link href="{{ asset('assets/icofont/icofont.min.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&display=swap"
        rel="stylesheet">
</head>

<body>
  <div class="bg-comparte">
    <img class="logo-img mt-2 ml-2" src="{{ asset('assets/img/logo_white.png') }}" alt="" srcset="">
    <small class="titulo-logo">COMPARTELO</small>
  </div>
  <center>
    <div class="empty card shadow-sm px-4">
        <div class="empty-img"><img src="{{ asset('assets/img/error-email.png') }}" height="300" alt="">
        </div>
        <p class="empty-title">Correo no verificado</p>
        <p class="empty-subtitle text-muted">
            Revisa tu bandeja de entrada y confirma el correo de virificación
        </p>
        <div class="empty-action mb-4 d-flex">
          <form id="resendVerification" action="">
            <button type="submit" class="mx-2 btn btn-info">Reenviar verifiación</button>
          </form>
          <a href="/" class="btn btn-success">Ir a la pagina de inicio</a>
        </div>
    </div>
  </center>
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/sweetalert2.all.min.js') }}"></script>
    <script src="{{ asset('assets/js/respuestas.js') }}"></script>
    <script src="{{ asset('assets/js/usuarios/crud-usuarios.js') }}"></script>
    <script type="text/javascript">
      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });
    </script>
</body>

</html>
