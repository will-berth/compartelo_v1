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
    <link href="{{ asset('assets/css/ruang-admin.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/general.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/icofont/icofont.min.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-general border py-2 fixed-top">
        <a class="navbar-brand" href="/">
            <img src="{{ asset('assets/img/logo_white.png') }}" width="50" height="50" class="d-inline-block align-top" alt="">
            <small class="titulo-logo">COMPARTELO</small>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse row" id="navbarScroll">
            <div class="row w-100">
                <div class="col-md-8 xl-8">
                    <center>
                        <!-- <form id="form-search" method="GET" action="/search">
                            <div class="input-group mb-2 d-flex justify-content-center ml-4">
                                <input type="search" class="input-buscar border shadow-sm border-0" name=buscar id="buscar" placeholder="Buscar artículos, marcas y más"
                                    autocomplete="off">
    
                                <div class="input-group-prepend">
                                    <button type="submit" class="input-group-text icono-input"><i class="icofont-search"></i></button>
                                    
                                </div>
                            </div>
                        </form> -->
                    </center>
                </div>
                <div class="col-md-4 xl-4">
                    <ul class="navbar-nav mr-auto d-flex justify-content-end">
                        <li class="nav-item dropdown no-arrow mx-1">
                            <!-- <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown"
                              aria-haspopup="true" aria-expanded="false" onclick="loadCarrito()">
                              <i class="icofont-shopping-cart icono-nav"></i>
                            </a> -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Carrito
                                </h6>
                                <div id="detalles-carrito">

                                </div>
                                <!-- <a class="dropdown-item text-center small text-gray-500" href="#">Realizar renta</a> -->
                                <form id="checkout-cart">
                                    @csrf
                                    <input hidden type="text" name="id_articulo" id="id_articulo_cart">
                                    <a href="/confirm/checkout" class="dropdown-item text-center small text-gray-500">Confirmar renta</a>
                                </form>
                            </div>
                        </li>
                        <li class="nav-item dropdown dropleft">
                            <a class="nav-link border-dropw border" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
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
                                <a class="dropdown-item" href="/terminos">Términos y condiciones</a>
                                <a class="dropdown-item" href="/quienes-somos">Quiénes somos</a>
                                <a class="dropdown-item" href="/ayuda">Ayuda</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row w-100">
                <div class="col-md-7">
                    <ul class="navbar-nav ml-4">
                        <li class="nav-item">
                            <a class="nav-link text-white text-small" href="/ofertasArticulos">Ofertas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white text-small" href="/masPopulares">Más populares</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white text-small" href="/publicar">Publicar artículo</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white text-small" href="/mis-articulos">Mis artículos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white text-small" href="/mis-rentas">Mis rentas</a>
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
    <br>

    <div>
        <center>
            <h2>ayuda para el uso del servicio</h2>
        </center>
        <hr>
        <p>si aun desconoces sobre el uso del servicio, no te preocupes
            en este apartado te indicamos los pasos que debes de seguir 
            para que puedas rentar el artículo adecuado a tu necesidad, sin
            antes mencionar que te hacemos la invitacion para que puedas leer 
            nuestros terminos condiciones, de esta manera nos ayudas a mejorar como empresa:</p>

        <aside>
            <h4>creacion de una cuenta como primer punto</h4>
            <ul>
                <li>parte superior, derecho esta la opción</li>
                <li>seleccionas crear cuenta</li>
                <li>debes de ingresar cada información que se te pida</li>
                <li>corrabora tu información antes de continuar</li>
                <li>acepta los terminos y condiciones, marcando el check</li>
                <li>dar click en el boton crear cuenta</li>
            </ul>
        </aside>
        <hr>
        <div>
            <h4>confirmar tu correo electronico</h4>
            <ol type="a" >
                <li>entra a tu correo electronico</li>
                <li>colocate en la bandeja de entreda y da clic el email que envio compartelo</li>
                <li>dar clic en confirmar correo 
                    <ul>
                        <li>te redireccionara a la pagina principal</li>
                    </ul>
                </li>
                <li>listo para que puedas selecionar y rentar</li>
            </ol>
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
        $(document).ready(function() {
            confirmCart()
        });
    </script>
    @yield('script')
</body>


</html>