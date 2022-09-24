@extends('layouts.base-public')
@section('contenido')
<center id="detalles"></center>
<div id="articles-detail" class="d-none">
    <div class="row">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb color-transparent" >
                <li class="active mr-2" aria-current="page"><small>Volver al listado |</small></li>
                <li class="breadcrumb-item"><a href="" id="migaja-cat"><small> </small></a></li>
                <li class="breadcrumb-item"><a href="#" id="migaja-marca"><small></small></a></li>
                <li class="breadcrumb-item active" aria-current="page"><small id="migaja-articulo"></small></li>
            </ol>
        </nav>
    </div>
    <div class="contenedor bg-white p-4 rounded shadow-sm">
        <div class="row" id="itemDetails">
            <div class="col-1">
              <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <button class="nav-link mb-3 active p-1 border img-bottom" id="img1" data-toggle="pill" data-target="#tab-img1" type="button" role="tab" aria-controls="tab-img1" aria-selected="true">
                    <center>
                        <img src="" class="" alt="..." style="max-height:60px; min-height:60px; max-width:70px">
                    </center>
                </button>
                <button class="nav-link mb-3 p-1 border img-bottom" id="img2" data-toggle="pill" data-target="#tab-img2" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                    <center>
                        <img src="" class="" alt="..." style="max-height:60px; min-height:60px; max-width:70px">
                    </center>
                </button>
                <button class="nav-link mb-3 p-1 border img-bottom" id="img3" data-toggle="pill" data-target="#tab-img3" type="button" role="tab" aria-controls="tab-img3" aria-selected="false">
                    <center>
                        <img src="" class="" alt="..." style="max-height:60px; min-height:60px; max-width:70px">
                    </center>
                </button>
                <button class="nav-link mb-3 p-1 border img-bottom" id="img4" data-toggle="pill" data-target="#tab-img4" type="button" role="tab" aria-controls="tab-img4" aria-selected="false">
                    <center>
                        <img src="" class="" alt="..." style="max-height:60px; min-height:60px; max-width:70px">
                    </center>
                </button>
              </div>
            </div>
            <div class="col-5">
              <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="tab-img1" role="tabpanel" aria-labelledby="img1">
                    <center>
                        <img src="" class="w-100" style="max-height: 350px">
                    </center>
                </div>
                <div class="tab-pane fade" id="tab-img2" role="tabpanel" aria-labelledby="img2">
                    <center>
                        <img src="" class="w-100" style="max-height: 350px">
                    </center>
                </div>
                <div class="tab-pane fade" id="tab-img3" role="tabpanel" aria-labelledby="img3">
                    <center>
                        <img src="" class="w-100" style="max-height: 350px">
                    </center>
                </div>
                <div class="tab-pane fade" id="tab-img4" role="tabpanel" aria-labelledby="img4">
                    <center>
                        <img src="" class="w-100" style="max-height: 350px">
                    </center>
                </div>
              </div>
            </div>
            <div class="col-md-3">
                <p class="text-muted"><small id="estado-articulo"></small> - <small> 1023 rentas</small></p>
                <h5 class="text-dark" id="nom-articulo"></h5>
                <div class="d-flex">
                    <div class="rate h4 text-warning"></div>
                    <small class="text-warning mt-2" id="total_opiniones"></small>
                </div>
                <span class="badge badge-dark">RECOMENDADO</span> <small id="recomendado"></small>
                <p class="card-text text-dark h4" id="precio"></p>
                <p class="text-dark"><small>Lo que tienes que saber de este articulo</small></p>
                <ul class="details">
                    <li>Marca: <b id="marca"></b></li>
                    <li>Categorias:</li>
                    <ul id="categorias">
                    </ul>
                </ul>
            </div>
            <div class="col-md-3 border py-2 rounded">
                <li class="text-success" style="list-style: none;"><small><i class="icofont-car p-2 h5"></i> Este articulo se encuentra a: 2.5 k</small></li>
                <li class="text-success" style="list-style: none;"><small><i class="icofont-clock-time p-2 h5"></i> Aproximadamnete a: 35 min</small></li>
                <br>
                <li style="list-style: none;"><small class="text-muted">Vendido por: <b class="text-info" id="rentador"></b></small></li>
                <li class="text-muted" style="list-style: none;"><small>Total: 122 rentas</small></li>
                <p class="text-dark mt-2">Stock disponible</p>
                <p class="text-dark mt-2">Cantidad: <b>1 Unidad</b> <small> (1 disponibles)</small></p>
                <button class="btn btn-success w-100 mb-3" data-toggle="modal" data-target="#modal-pago">Rentar ahora</button>
                <button id="btn-carrito" class="btn btn-info w-100 mb-3">Agregar al carrito</button>
        
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-4">
                <h4 class="mb-3 py-4">Carcaterísticas</h4>
                <ul id="caracteristicas">
                </ul>
            </div>
            <div class="col-md-5">
                <h4 class="mb-3 py-4">Descripción</h4>
                <p class="text-justify" id="desc"></p>
            </div>
            <div class="col-md-3 border rounded">
                <h5 class="mb-3 py-4">Información de rentador</h5>
                <p class="" id="reputacion"><i class="icofont-medal"></i> <small></small></p>
                <div class="progress">
                    <div id="progress-rent" class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-4">
                        <center>
                            <h4>1,256</h4>
                            <small>Rentas en los ultimos 30 días</small>
                        </center>
                    </div>
                    <div class="col-md-4">
                        <center>
                            <i class="icofont-envelope h1"></i>
                            <span id="rent-atencion-icon" class="badge rounded-circle"><i class=""></i></span>
                            <small id="rent-atencion"></small>
                        </center>
                    </div>
                    <div class="col-md-4">
                        <center>
                            <i class="icofont-wall-clock h1"></i></i>
                            <span id="rent-tiempo-icon" class="badge rounded-circle"><i class=""></i></span>
                            <small id="rent-tiempo"></small>
                        </center>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <h4 id="title-articulo"></h4>
        <br><br>
        <div class="row">
            <div class="col-md-3">
                <div class="d-flex justify-content-end">
                    <h1 class="text-dark" id="calificacion"></h1>
                </div>
                <div class="d-flex justify-content-end">
                    <div id="estrellas" class="rate h1 text-warning"></div>
                </div>
                <p><small>Promedio entre <b id="total_opiniones2"></b> opiniones</small></p>
            </div>
            <div class="col-md-5">
                <div class="row">
                    <div class="col-md-3">
                        5 estrellas
                    </div>
                    <div class="col-md-7">
                        <div class="progress mt-1">
                            <div class="progress-bar" role="progressbar" id="progress-cinco" style="" aria-valuenow="" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="col-md-2" id="cinco"></div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        4 estrellas
                    </div>
                    <div class="col-md-7">
                        <div class="progress mt-1">
                            <div class="progress-bar" role="progressbar" id="progress-cuatro" style="" aria-valuenow="" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="col-md-2" id="cuatro"></div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        3 estrellas
                    </div>
                    <div class="col-md-7">
                        <div class="progress mt-1">
                            <div class="progress-bar" role="progressbar" id="progress-tres" style="" aria-valuenow="" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="col-md-2" id="tres"></div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        2 estrellas
                    </div>
                    <div class="col-md-7">
                        <div class="progress mt-1">
                            <div class="progress-bar" role="progressbar" id="progress-dos" style="" aria-valuenow="" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="col-md-2" id="dos"></div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        1 estrellas
                    </div>
                    <div class="col-md-7">
                        <div class="progress mt-1">
                            <div class="progress-bar" role="progressbar" id="progress-uno" style="" aria-valuenow="" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="col-md-2" id="uno"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-9">
                <ul class="nav nav-pills mb-3 d-flex bd-highlight" id="pills-tab" role="tablist">
                    <li class="nav-item tab-item" role="presentation">
                      <button class="nav-link border-0 w-100 btn-white active" id="tab-todas" data-toggle="pill" data-target="#pills-todas" type="button" role="tab" aria-controls="pills-todas" aria-selected="true">Todas</button>
                    </li>
                    <li class="nav-item tab-item" role="presentation">
                      <button class="nav-link border-0 w-100 btn-white" id="tab-positivas" data-toggle="pill" data-target="#pills-positivas" type="button" role="tab" aria-controls="pills-positivas" aria-selected="false" onclick="getOpiniones('positivo', 5)">Positivas</button>
                    </li>
                    <li class="nav-item tab-item" role="presentation">
                      <button class="nav-link border-0 w-100 btn-white" id="tab-negativas" data-toggle="pill" data-target="#pills-negativas" type="button" role="tab" aria-controls="pills-negativas" aria-selected="false" onclick="getOpiniones('negativo', 5)"x>Negativas</button>
                    </li>
                  </ul>
                  <br>
                  <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-todas" role="tabpanel" aria-labelledby="tab-todas">
                        
                    </div>
                    <div class="tab-pane fade" id="pills-positivas" role="tabpanel" aria-labelledby="tab-positivas">
    
                    </div>
                    <div class="tab-pane fade" id="pills-negativas" role="tabpanel" aria-labelledby="tab-negativas">
    
                    </div>
                  </div>
            </div>
        </div>
        <button class="btn btn-white text-primary" onclick="loadOpiniones('todas', 'x')">Ver todas las opiniones</button>  
    </div>
</div>
<!-- Modal opiniones -->
<!-- Modal -->
<div class="modal fade" id="modal-opiniones" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <h4 id="title-articulo2"></h4>
            <br><br>
            <div class="row">
                <div class="col-md-5">
                    <div class="d-flex justify-content-end">
                        <h1 class="text-dark" id="calificacion2"></h1>
                    </div>
                    <div class="d-flex justify-content-end">
                        <div id="estrellas2" class="rate h1 text-warning"></div>
                    </div>
                    <p><small>Promedio entre <b id="total_opiniones3"></b> opiniones</small></p>
                </div>
                <div class="col-md-7">
                    <div class="row">
                        <div class="col-md-3">
                            5 estrellas
                        </div>
                        <div class="col-md-7">
                            <div class="progress mt-1">
                                <div class="progress-bar" role="progressbar" id="progress-cinco2" style="" aria-valuenow="" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="col-md-2" id="cinco2"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            4 estrellas
                        </div>
                        <div class="col-md-7">
                            <div class="progress mt-1">
                                <div class="progress-bar" role="progressbar" id="progress-cuatro2" style="" aria-valuenow="" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="col-md-2" id="cuatro2"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            3 estrellas
                        </div>
                        <div class="col-md-7">
                            <div class="progress mt-1">
                                <div class="progress-bar" role="progressbar" id="progress-tres2" style="" aria-valuenow="" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="col-md-2" id="tres2"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            2 estrellas
                        </div>
                        <div class="col-md-7">
                            <div class="progress mt-1">
                                <div class="progress-bar" role="progressbar" id="progress-dos2" style="" aria-valuenow="" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="col-md-2" id="dos2"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            1 estrellas
                        </div>
                        <div class="col-md-7">
                            <div class="progress mt-1">
                                <div class="progress-bar" role="progressbar" id="progress-uno2" style="" aria-valuenow="" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="col-md-2" id="uno2"></div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-9">
                    <ul class="nav nav-pills mb-3 d-flex bd-highlight" id="pills-tab" role="tablist">
                        <li class="nav-item tab-item" role="presentation">
                          <button class="nav-link border-0 w-100 btn-white active" id="tab-todas2" data-toggle="pill" data-target="#pills-todas2" type="button" role="tab" aria-controls="pills-todas2" aria-selected="true">Todas</button>
                        </li>
                        <li class="nav-item tab-item" role="presentation">
                          <button class="nav-link border-0 w-100 btn-white" id="tab-2" data-toggle="pill" data-target="#pills-positivas2" type="button" role="tab" aria-controls="pills-positivas2" aria-selected="false" onclick="getOpiniones('positivo', 0)">Positivas</button>
                        </li>
                        <li class="nav-item tab-item" role="presentation">
                          <button class="nav-link border-0 w-100 btn-white" id="tab-negativas2" data-toggle="pill" data-target="#pills-negativas2" type="button" role="tab" aria-controls="pills-negativas2" aria-selected="false" onclick="getOpiniones('negativo', 0)"x>Negativas</button>
                        </li>
                      </ul>
                      <br>
                      <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-todas2" role="tabpanel" aria-labelledby="tab-todas2">
                            
                        </div>
                        <div class="tab-pane fade" id="pills-positivas2" role="tabpanel" aria-labelledby="tab-positivas2">
        
                        </div>
                        <div class="tab-pane fade" id="pills-negativas2" role="tabpanel" aria-labelledby="tab-negativas2">
        
                        </div>
                      </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal -->
<div class="modal fade" id="modal-pago" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Realizar pago</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary">Realizar pago</button>
            </div>
        </div>
      </div>
    </div>
</div>
 
@endsection
@section('script')  
<script src="{{ asset('assets/js/articulos/crud-articulos.js') }}"></script>
<script src="{{ asset('assets/js/rater.min.js') }}"></script>
<script>
    $(document).ready(function(){
        $('#list-categorias').addClass('d-none');
        $('#col-articles').addClass('col-md-12');
        let urlComplete = window.location;
        let url = urlComplete.href.split('/');
        let clave = url[4];
        itemDetails(clave);
    });
</script>
@endsection