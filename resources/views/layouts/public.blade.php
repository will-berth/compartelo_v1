<!DOCTYPE html>
<html lang="en">

<head>
    <title>Iniciar Sesión</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/ruang-admin.min.css') }}" rel="stylesheet">

    <link href="{{ asset('assets/icofont/icofont.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/general.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    @yield('css')
    <style>
        .lado-a-isload .descripcion-load,
        .lado-a-isload .nombre-load,
        .lado-a-isload .renta-load,
        .lado-a-isload .question-load {
            background-color: #ededed;
            background: linear-gradient(
                100deg,
                rgba(255, 255, 255, 0) 40%,
                rgba(255, 255, 255, .5) 50%,
                rgba(255, 255, 255, 0) 60%
            ) #ededed;
            background-size: 200% 100%;
            background-position-x: 180%;
            animation: 1s loading ease-in-out infinite;
        }
        @keyframes loading {
            to {
                background-position-x: -20%;
            }
        }
        .lado-a-isload .descripcion-load {
            min-height: 4rem;
            max-width: 80%;
            border-radius: 4px;
            animation-delay: .06s;
        }

        .lado-a-isload .nombre-load {
            min-height: 2rem;
            max-width: 40%;
            border-radius: 4px;
            animation-delay: .06s;
        }
        .lado-a-isload .renta-load {
            min-height: 1rem;
            max-width: 30%;
            border-radius: 4px;
            animation-delay: .06s;
        }
        .lado-a-isload .question-load {
            min-height: 2rem;
            max-width: 100%;
            border-radius: 4px;
            animation-delay: .06s;
        }
    </style>
</head>

<body>
    @yield('contenido')
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/sweetalert2.all.min.js') }}"></script>
    <script src="{{ asset('assets/js/respuestas.js') }}"></script>
    <script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
  </script>
  @yield('script')
</body>
</html>
