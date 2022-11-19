<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta http-equiv="Content-Type" content="text/html" charset="UTF-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>COMPARTELO</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.svg" />
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/general.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/publicar-producto.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/icofont/icofont.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/filepond/filepond.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/filepond/filepond-plugin-image-preview.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&display=swap"
        rel="stylesheet">
</head>

<body>
    <div class="bg-comparte"></div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="container">
        <div class="publicar-group d-flex justify-content-center">
            <div class="form-card p-4 d-flex flex-column align-items-center">
                <img class="mb-5" src="{{ asset('assets/img/requireauth.png') }}" alt="">
                <h4 class="fw-4 color-black23 text-center">¡Hola! Para publicar un <br> artículo, ingresa a tu cuenta.</h4>
                <div class="row w-100 mt-4">
                    <div class="col-lg-6">
                        <a href="/login" class="">
                            <button type="button"class="btn p-2 button-2 h-100 w-100 fw-3">Ingresar</button>
                        </a>
                    </div>
                    <div class="col-lg-6">
                        <a href="/registrar" class="">
                            <button type="button" class="btn p-2 button-1 h-100 w-100 fw-5">Crear cuenta</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('assets/js/filepond/jquery.js') }}"></script>
    <script src="{{ asset('assets/js/filepond/filepond.min.js') }}"></script>
    <script src="{{ asset('assets/js/filepond/filepond.jquery.js') }}"></script>
    <script src="{{ asset('assets/js/filepond/filepond-plugin-file-validate-type.js') }}"></script>
    <script src="{{ asset('assets/js/filepond/filepond-plugin-image-preview.js') }}"></script>
    <script src="https://unpkg.com/filepond-plugin-file-validate-size/dist/filepond-plugin-file-validate-size.js"></script>
    <script src="{{ asset('assets/js/traductor-filepond.js') }}"></script>
    <script src="{{ asset('assets/js/publicar_articulo/imagenes-section.js') }}"></script>
</body>


</html>
