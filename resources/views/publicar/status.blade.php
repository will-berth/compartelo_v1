<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta http-equiv="Content-Type" content="text/html" charset="UTF-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>COMPARTELO</title>
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
                                <a class="dropdown-item" href="#">Términos y condiciones</a>
                                <a class="dropdown-item" href="#">Quiénes somos</a>
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
                <p>Paso 4 de 6</p>
                <h3 class="fw-3 color-black23">Cuentanos un poco mas sobre tu artículo.</h3>
            </div>
            <div class="form-card p-5">
                <h4 class="fw-4 color-black23">Agrega un el costo y estado de tu articulo.</h4>
                <p>Proporciona más información al cliente.</p>
                <form id="publicar-section-status" action="" class="w-100 mb-4" novalidate>
                    <div class="form-row">
                        <div class="col-sm-12 col-lg-6 mt-2">
                            <label class="w-100 text-left" for="estado">Estado</label>
                            <select id="estado" name="estado" class="form-control" required>
                                <option value="">-- SELECCIONAR --</option>
                                <option value="Nuevo">Nuevo</option>
                                <option value="Usado como nuevo">Usado como nuevo</option>
                                <option value="Semi nuevo">Semi nuevo</option>
                                <option value="Usado regular">Usado regular</option>
                            </select>
                            <div id="estado-alert" class="invalid-feedback text-left">
                                Debe seleccionar el estado en el que se encuentra su artículo.
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-6 mt-2">
                            <label class="w-100 text-left" for="periodo">Periodo</label>
                            <select id="periodo" name="periodo" class="form-control" required>
                                <option value="">-- SELECCIONAR --</option>
                                <option value="1">Hora</option>
                                <option value="2">Día</option>
                                <option value="3">Semana</option>
                                <option value="4">Mes</option>
                                <option value="5">Año</option>
                            </select>
                            <div id="periodo-alert" class="invalid-feedback text-left">
                                Debe seleccionar el periodo al cual dara su artículo.
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-6 mt-2">
                            <label class="w-100 text-left" for="precio">Precio</label>
                            <input id="precio" name="precio" type="number" class="form-control" placeholder="Ej: 25.50" required>
                            <div id="precio-alert" class="invalid-feedback text-left">
                                Debe proporcionar un precio de su artículo.
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-6 mt-2">
                            <label class="w-100 text-left" for="marca">Marca</label>
                            <select id="marca" name="marca" class="form-control" required>
                                <option value="">-- SELECCIONAR --</option>
                            </select>
                            <div id="marca-alert" class="invalid-feedback text-left">
                                Debe seleccionar una marca.
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
