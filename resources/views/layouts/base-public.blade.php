<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta http-equiv="Content-Type" content="text/html" charset="UTF-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>COMPARTRELO</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.svg" />
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/ruang-admin.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/general.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/icofont/icofont.min.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&display=swap"
        rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-general border py-2 fixed-top">
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
                        <form id="form-search" method="GET" action="/search">
                            <div class="input-group mb-2 d-flex justify-content-center ml-4">
                                <input type="search" class="input-buscar border shadow-sm border-0" name=buscar id="buscar" placeholder="Buscar artículos, marcas y más"
                                    autocomplete="off">
    
                                <div class="input-group-prepend">
                                    <button type="submit" class="input-group-text icono-input"><i class="icofont-search"></i></button>
                                    
                                </div>
                            </div>
                        </form>
                    </center>
                </div>
                <div class="col-md-4 xl-4">
                    <ul class="navbar-nav mr-auto d-flex justify-content-end">
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown"
                              aria-haspopup="true" aria-expanded="false" onclick="loadCarrito()">
                              <i class="icofont-shopping-cart icono-nav"></i>
                            </a>
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                              aria-labelledby="alertsDropdown">
                              <h6 class="dropdown-header">
                                Carrito
                              </h6>
                              <div id="detalles-carrito">

                              </div>
                              <a class="dropdown-item text-center small text-gray-500" href="#">Realizar renta</a>
                            </div>
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
                                    <a class="dropdown-item" href="/logout">Cerrar sesión</a>
                                @else
                                    <a class="dropdown-item" href="/registrar">Regístrate</a>
                                    <a class="dropdown-item" href="/login">Iniciar sesión</a>
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
            <div class="row w-100">
                <div class="col-md-7">
                    <ul class="navbar-nav ml-4">
                        <li class="nav-item">
                          <a class="nav-link text-white text-small" href="#">Ofertas</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link text-white text-small" href="#">Mas populares</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white text-small" href="/publicar">Publicar aticulo</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link text-white text-small" href="#">Mis aticulos</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link text-white text-small" href="#">Mis rentas</a>
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
    <div class="container-fluid list-categorias" id="list-categorias">
        <br>
        <div class="row">
            <div class="col-1 col-sm-2 col-lg-1 d-flex justify-content-md-end justify-content-sm-start">
                <button class="border btn-carousel" onclick="scrollAtras()"><i
                        class="icofont-rounded-left"></i></button>
            </div>
            <div class="col-10 col-sm-8 col-lg-10">
                <div class="progress m-4 d-none" id="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                        aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">Cargando...</div>
                </div>
                <ul id="list-cat">

                </ul>
            </div>
            <div class="col-1 col-sm-2 col-lg-1 d-flex justify-content-md-start justify-content-sm-end">
                <button class="border btn-carousel" onclick="scrollRight()"><i
                        class="icofont-rounded-right"></i></button>
            </div>
        </div>
    </div>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-3 d-none" id="filtros">
                <form id="form-filters">
                    <h3 class="texto-negro" id="texto-buscado"></h3>
                    <p class="texto-negro"><small id="total-busquedas"></small></p>
                    @auth('web2')
                    <div class="card px-4 py-3">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" name="distancia" value="1" class="custom-control-input" id="customSwitch1">
                            <label class="custom-control-label" for="customSwitch1"><i class="icofont-location-pin text-success"></i> Mostrar distancia</label>
                        </div>
                    </div>
                    @endauth
                    <br>
                    <p class="texto-negro">Estado del articulo</p>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="estado" id="nuevo" value="Nuevo">
                        <label class="form-check-label" for="nuevo">
                        <small>Nuevo</small>
                        </label>
                    </div>    
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="estado" id="usadoNuevo" value="Usado como nuevo">
                        <label class="form-check-label" for="usadoNuevo">
                        <small>Usado como nuevo</small>
                        </label>
                    </div>    
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="estado" id="semiNuevo" value="Semi nuevo">
                        <label class="form-check-label" for="semiNuevo">
                        <small>Semi nuevo</small>
                        </label>
                    </div>     
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="estado" id="usadoRegular" value="Usado regular">
                        <label class="form-check-label" for="usadoRegular">
                        <small>Usado regular</small>
                        </label>
                    </div>    
                    <br>
                    <p class="texto-negro">Categorias</p>
                    <div id="filters-cat">

                    </div>                     
                    <br>    
                    <p class="texto-negro">Marcas</p>
                    <div id="filters-marcas">

                    </div>                       
                    <br> 
                    <p class="texto-negro">Precio</p>            
                    <div class="d-flex mb-3">
                        <input type="number" name="precioMin" class="form-control" placeholder="Minimo" autocomplete="off">__
                        <input type="number" name="precioMax" class="form-control" placeholder="Maximo" autocomplete="off">
                    </div>
                    <button type="submit" class="btn btn-success w-100"><i class="icofont-filter"></i> Aplicar</button>
                </form>
            </div>
            <div class="" id="col-articles">
                @yield('contenido')
            </div>
        </div>
        
    </div>
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/ruang-admin.min.js') }}"></script>
    <script src="{{ asset('assets/js/sweetalert2.all.min.js') }}"></script>
    <script src="{{ asset('assets/js/respuestas.js') }}"></script>
    <script src="{{ asset('assets/js/articulos/crud-articulos.js') }}"></script>
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
