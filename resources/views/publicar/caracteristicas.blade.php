<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta http-equiv="Content-Type" content="text/html" charset="UTF-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Publicar articulo</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.svg" />
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/general.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/publicar-producto.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/icofont/icofont.min.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&display=swap"
        rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-general bg-primary-com py-2 fixed-top">
        <a class="navbar-brand" href="/">
            <img src="{{ asset('assets/img/logo_white.png') }}" width="50" height="50" class="d-inline-block align-top"
                alt="">
            <small class="titulo-logo">COMPARTELO</small>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarScroll"
            aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse row" id="navbarScroll">
            <div class="row w-100">
                <div class="col-md-8 xl-8">
                    <center>
                        <div class="input-group mb-2 d-flex justify-content-center ml-4">
                            <input type="search" class="input-buscar border shadow-sm" id="buscar" placeholder="Buscar artictulos, marcas y más"
                                autocomplete="off">
                            <div class="input-group-prepend">
                                <button class="input-group-text icono-input"><i class="icofont-search"></i></button>
                                
                            </div>
                        </div>
                    </center>
                </div>
                <div class="col-md-4 xl-4">
                    <ul class="navbar-nav mr-auto d-flex justify-content-end">
                        <li class="nav-item mr-3">
                            <button type="button" class="btn carrito">
                                <i class="icofont-shopping-cart icono-nav text-white"></i><span
                                    class="badge bg-white text-general carrito-badge">4</span>
                            </button>
                        </li>
                        <li class="nav-item mr-3">
                            <button type="button" class="btn carrito">
                                <i class="icofont-alarm icono-nav text-white"></i><span
                                    class="badge bg-white text-general carrito-badge">4</span>
                            </button>
                        </li>
                        <li class="nav-item dropdown dropleft">
                            <a class="nav-link border-dropw border" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-expanded="false">
                                <i class="icofont-navigation-menu ml-1 mr-2 text-white"></i>
                                @auth('web2')
                                    <i class="text-white">{{ Auth::guard('web2')->user()->usuario }}</i>
                                @else
                                    <i class="icofont-user icon-user text-general bg-white"></i>
                                @endauth
                            </a>
                            <div class="dropdown-menu mr-3" aria-labelledby="navbarDropdown">
                                @auth('web2')
                                    <a class="dropdown-item" href="registrar">Cerrar sesión</a>
                                @else
                                    <a class="dropdown-item" href="registrar">Regístrate</a>
                                    <a class="dropdown-item" href="login">Iniciar sesión</a>
                                @endauth
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
    <br>
    <br>
    <br>
    <br>
    <div class="container">
        <div class="publicar-group">
            <div class="publicar-group-title mb-4">
                <p>Paso 5 de 6</p>
                <h3 class="fw-3 color-black23">¿Cómo es tu artículo?</h3>
            </div>
            <div class="form-card p-4">
                <h4 class="fw-4 color-black23">Agrega las caracteristicas de tu articulo.</h4>
                <p>Las caracteristicas son importantes para que conozcan mejor lo que deseas publicar.</p>
                <form id="publicar-section-caracteristicas" action="" class="w-100 mb-4">
                    <div id="f_nacimiento-alert" class="invalid-feedback text-left">
                        Debe registrar por lo menos 3 caracteristicas.
                    </div>
                    <div class="form-row row-inputs-car">
                        <div id="position-0" class="col-10 col-sm-10 col-lg-11 mt-2">
                            <input id="input-0" name="input-0" type="text" class="form-control p-4" placeholder="Ej: Material polipropileno." required>
                        </div>
                        <div id="position-1" class="col-2 col-sm-2 col-lg-1 mt-2">
                            <button type="button" id="1" class="btn p-2 button-1 h-100 w-100 remove-input-car"><i class="icofont-trash"></i></button>
                        </div>
                        <div id="position-2" class="col-10 col-sm-10 col-lg-11 mt-2">
                            <input id="input-2" name="input-2" type="text" class="form-control p-4" placeholder="Ej: Tamaño estandar." required>

                        </div>
                        <div id="position-3" class="col-2 col-sm-2 col-lg-1 mt-2">
                            <button type="button" id="3" class="btn p-2 button-1 h-100 w-100 remove-input-car"><i class="icofont-trash"></i></button>
                        </div>
                        <div id="position-4" class="col-10 col-sm-10 col-lg-11 mt-2">
                            <input id="input-4" name="input-4" type="text" class="form-control p-4" placeholder="Ej: Resistente." required>
                        </div>
                        <div id="position-5" class="col-2 col-sm-2 col-lg-1 mt-2">
                            <button type="button" id="5" class="btn p-2 button-1 h-100 w-100 remove-input-car"><i class="icofont-trash"></i></button>
                        </div>
                        
                    </div>
                    <div class="form-row">
                        <div class="col-sm-12 col-lg-12 mt-2">
                            <div id="nueva-caracteristica" class="card-categoria d-flex flex-column justify-content-center align-items-center h-100 w-100 category-inactive">
                                <i class="icofont-ui-add"></i>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-1 mt-2">
                            <button type="submit" class="btn p-2 button-1 h-100 w-100">Avanzar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/publicar_articulo/publicar.js') }}"></script>
</body>


</html>