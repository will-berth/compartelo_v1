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
                                <a class="dropdown-item" href="#">Términos y condiciones</a>
                                <a class="dropdown-item" href="#">Quiénes somos</a>
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
        <div class="card-pre-checkout">

            <div class="row">
                <div class="col-12 col-lg-8 lado-a lado-a-isload">
                    <h1 id="nombre-renta" class="fw-4"></h1>
                    <div class="nombre-load"></div>
                    <h3 id="monto-renta" class="fw-5"></h3>
                    <div class="renta-load"></div>
                    <p id="descripcion-renta" class="fw-6"></p>
                    <div class="descripcion-load"></div>
                    <form action="/create-checkout" method="POST">
                        <div class="form-row">
                            <div class="col-12 col-lg-4 mt-2">
                                <p id="question-renta"></p>
                                <div class="question-load"></div>
                            </div>
                            <div class="col-6 col-lg-4 mt-2">
                                @csrf
                                <input id="cant-renta" name="cant-renta" type="number" class="form-control" placeholder="Ej: 1" value="0">
                                <input id="precio-renta" name="precio-renta" type="hidden" class="form-control" value="0">
                                <input id="id_c_item" name="id_c" type="hidden" class="form-control" value="0">
                                <input id="t_r" name="t_r" type="hidden" class="form-control" value="0">
                            </div>
                            <div class="col-6 col-lg-4 mt-2">
                                <button id="btn-checkout" type="submit" class="btn bg-comp-2 text-white" disabled>Proceder a pagar</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="lado-b p-2 mt-2 mb-2 h-100">
                        <h3>Detalles</h3>
                        <div class="row mt-3">
                            <div class="col-9">Renta</div>
                            <div id="monto-t-renta" class="col-3">$0.00</div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-9">IVA</div>
                            <div id="monto-iva" class="col-3">$0.00</div>
                        </div>
                        <div class="row mt-3 total-field">
                            <div class="col-9">TOTAL</div>
                            <div id="total-renta" class="col-3">$0.00</div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')  
<!-- <script src="{{ asset('assets/js/articulos/crud-articulos.js') }}"></script> -->
<script src="{{ asset('assets/js/articulos/crud-articulos.js') }}"></script>
    <script>
        $(document).ready(function(){
            checkoutCart()
            $("#cant-renta").keyup(e => {
                detailsModifier()
            })
            $("#cant-renta").click(e => {
                detailsModifier()
            })

            function detailsModifier(){
                let precio = $('#precio-renta').val();
                let cant = $("#cant-renta").val();
                $("#cant-renta").val(cant.replace(/^0+/, ''))
                let montoRenta = precio * cant;
                let iva = montoRenta * 0.15;
                let total = montoRenta + iva;
                $('#monto-t-renta').text(`$${montoRenta.toFixed(2)}`);
                $('#monto-iva').text(`$${iva.toFixed(2)}`);
                $('#total-renta').text(`$${total.toFixed(2)}`);
                $('#t_r').val(total.toFixed(2));
                if(cant > 0.99){
                    $('#btn-checkout').prop('disabled', false);
                }else{
                    $('#btn-checkout').prop('disabled', true);
                }
            }
        })
    </script>
@endsection