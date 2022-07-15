<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>COMPARTRELO</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.svg" />
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/general.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/icofont/icofont.min.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light border py-3">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('assets/img/logo_v2.png') }}" width="50" height="50" class="d-inline-block align-top"
                alt="">
            <small class="titulo-logo">COMPARTELO</small>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarScroll"
            aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse row" id="navbarScroll">
            <div class="row w-100">
                <div class="col-md-6 col-lg-7 xl-4">
                    
                </div>
                <div class="col-md-6 col-lg-5 xl-4">
                    <ul class="navbar-nav mr-auto d-flex justify-content-end">
                        <li class="nav-item mr-3">
                            <button type="button" class="btn border carrito">
                                <i class="icofont-shopping-cart icono-nav"></i><span
                                    class="badge bg-general carrito-badge">4</span>
                            </button>
                        </li>
                        <li class="nav-item mr-3">
                            <button type="button" class="btn border carrito">
                                <i class="icofont-alarm icono-nav"></i><span
                                    class="badge bg-general carrito-badge">4</span>
                            </button>
                        </li>
                        <li class="nav-item dropdown dropleft">
                            <a class="nav-link border-dropw border" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-expanded="false">
                                <i class="icofont-navigation-menu ml-1 mr-2"></i>
                                <i class="icofont-user icon-user"></i>
                            </a>
                            <div class="dropdown-menu mr-3" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Regístrate</a>
                                <a class="dropdown-item" href="login">Iniciar sesión</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Terminos y condiciones</a>
                                <a class="dropdown-item" href="#">Quines somos</a>
                                <a class="dropdown-item" href="#">Ayuda</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <br>
    <div class="container-fluid list-categorias" id="list-categorias">
        <center>
            <div class="input-group mb-2 d-flex justify-content-center">
                <input type="search" class="input-buscar border shadow-sm" id="buscar" placeholder="Buscar..."
                    autocomplete="off">
                <div class="input-group-prepend">
                    <div class="input-group-text icono-input"><i class="icofont-search"></i></div>
                </div>
            </div>
        </center>
        <br>
        <div class="row">
            <div class="col-md-1 d-flex justify-content-end">
                <button class="border btn-carousel" onclick="scrollAtras()"><i class="icofont-rounded-left"></i></button>
            </div>
            <div class="col-md-10">
                <div class="progress m-4 d-none" id="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">Cargando...</div>
                </div>
                <ul data-animation="bonus" id="list-cat">
                    
                </ul>
            </div>
            <div class="col-md-1">
                <button class="border btn-carousel" onclick="scrollRight()"><i class="icofont-rounded-right"></i></button>
            </div>
        </div>
    </div>
    <!--- carousel -->
    <div class="container-fluid">
        <div class="row espacio">
            <div class="col-md-8">
                <div id="carousel-promo" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ asset('assets/img/img1.jpg') }}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('assets/img/img2.png') }}" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('assets/img/img3.png') }}" class="d-block w-100" alt="...">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="{{ asset('assets/img/img2.png') }}" alt="..." class="w-100">
                        </div>
                        <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Martillo</h5>
                            <p class="card-text">
                                <i class="icofont-star text-warning"></i>
                                <i class="icofont-star text-warning"></i>
                                <i class="icofont-star text-warning"></i>
                                <i class="icofont-star text-warning"></i>
                                <i class="icofont-star text-warning"></i>
                            </p>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="{{ asset('assets/img/img3.png') }}" alt="..." class="w-100">
                        </div>
                        <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Bomba de agua</h5>
                            <p class="card-text">
                                <i class="icofont-star text-warning"></i>
                                <i class="icofont-star text-warning"></i>
                                <i class="icofont-star text-warning"></i>
                                <i class="icofont-star text-warning"></i>
                                <i class="icofont-star text-warning"></i>
                            </p>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="{{ asset('assets/img/img1.jpg') }}" alt="..." class="w-100">
                        </div>
                        <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Taladro</h5>
                            <p class="card-text">
                                <i class="icofont-star text-warning"></i>
                                <i class="icofont-star text-warning"></i>
                                <i class="icofont-star text-warning"></i>
                                <i class="icofont-star text-warning"></i>
                                <i class="icofont-star text-warning"></i>
                            </p>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="{{ asset('assets/img/img3.png') }}" alt="..." class="w-100">
                        </div>
                        <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Tractor</h5>
                            <p class="card-text">
                                <i class="icofont-star text-warning"></i>
                                <i class="icofont-star text-warning"></i>
                                <i class="icofont-star text-warning"></i>
                                <i class="icofont-star text-warning"></i>
                                <i class="icofont-star text-warning"></i>
                            </p>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row espacio">
            <h1>MÁS POPULARES</h1>
            <hr>
        </div>
    </div>
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/categorias/crud-categorias.js') }}"></script>
</body>
<script>
    $(document).ready(function(){
        getCategoriasPublic(0);
    })
    function scrollRight() {
        let valor = $('#list-categorias ul').scrollLeft();
        $('#list-categorias ul').scrollLeft(valor + 500);
    }

    function scrollAtras() {
        let valor = $('#list-categorias ul').scrollLeft();
        $('#list-categorias ul').scrollLeft(valor - 500);
    }
</script>

</html>
