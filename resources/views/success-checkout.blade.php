@extends('layouts.public')
@section('contenido')
<nav class="navbar navbar-expand-lg navbar-light bg-general py-2 fixed-top">
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
                              <!-- <a class="dropdown-item text-center small text-gray-500" href="#">Realizar renta</a> -->
                              <form id="checkout-cart" action="/create-checkout" method="POST">
                                    @csrf
                                    <input hidden type="text" name="id_articulo" id="id_articulo_cart">
                                    <button class="dropdown-item text-center small text-gray-500" type="submit">Confirmar renta</button>
                                </form>
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
    <div class="container mt-5">
        <div class="success-container">
            <div class="row">
                <div class="col-3 col-lg-1 d-flex justify-content-center align-items-center">
                    <i class="icofont-check-circled icon-success"></i>
                </div>
                <div class="col-9 col-lg-11">
                    <h1 id="a" class="fw-4 success-title">Tu pago se realizó con éxito.</h1>
                    <a class="text-white success-link" href="/mis-rentas">Ir a mis rentas</a>
                </div>
            </div>
            <div class="registro-btn">
            </div>
        </div>
        <div class="card-pre-checkout mt-3">

            <div class="row">
                <div class="col-12 lado-a lado-a-isload">
                    <h1 class="fw-4 mb-4">Tu artículo lo puedes encontrar aquí.</h1>
                    
                    <div id="map" style="min-height: 80%;height:40rem;"></div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')  
<!-- <script src="{{ asset('assets/js/articulos/crud-articulos.js') }}"></script> -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBnDrR4c_IBxJQ36FPO_f3CrHJVqcRZ1fA&libraries=places">
    </script>
<script src="{{ asset('assets/js/articulos/crud-articulos.js') }}"></script>
    <script>
        let coordenadasResponse = '{{$coordenadas}}';
        let coordenadasList = coordenadasResponse.split(',');
        let lat = parseFloat(coordenadasList[0]);
        let lng = parseFloat(coordenadasList[1]);
        chargeMap(lat, lng, 'map');
    </script>
@endsection