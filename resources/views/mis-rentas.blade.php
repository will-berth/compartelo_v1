@extends('layouts.base-public')
@section('contenido')
<h4 class="fw-4 color-black23 mt-4 mb-4">Mis rentas</h4>
<div class="table-responsive">
    <table class="table align-items-center table-flush" id="table-mis-rentas">
        <thead class="thead-light text-center">
            <tr>
                <th>Fecha</th>
                <th>Tipo de Pago</th>
                <th>Total</th>
                <th>Estado</th>
                <th>Detalles</th>
                <th>Ubicación</th>
            </tr>
        </thead>
        <tbody class="text-center">
            
        </tbody>
    </table>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Detalles de renta</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div style="min-height: 80%;height:40rem;" id="rentaMapa"></div>
      <div id="rentaDetalleModal" class="modal-body">
          <!-- <h6 class="fw-4 color-black23">Artículo:</h6>
          <p id="view-articulo" class="fw-5">---</p>
          <h6 class="fw-4 color-black23 mt-4">Descripción:</h6>
          <p id="view-desc" class="fw-5">---</p>
          <h6 class="fw-4 color-black23">Precio:</h6>
          <p id="view-precio" class="fw-5">---</p>
          <h6 class="fw-4 color-black23">Marca:</h6>
          <p id="view-marca" class="fw-5">---</p>
          <h6 class="fw-4 color-black23">Periodo de renta:</h6>
          <p id="view-periodo" class="fw-5">---</p>
          <h6 class="fw-4 color-black23">Estado:</h6>
          <p id="view-estado" class="fw-5">---</p>
          <h6 class="fw-4 color-black23">Fecha de publicación:</h6>
          <p id="view-created_at" class="fw-5">---</p> -->
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>


<div id="modal-edit-articulo" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title h4" id="myExtraLargeModalLabel">Editar información del artículo</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
            </button>
        </div>
        <div class="modal-body">
            <form id="form-edit-articulo">
                <input type="hidden" class="form-control" name="id_articulo" id="id_articulo">
                <div class="form-row">
                    <!-- <div class="col-12 col-sm-12 col-lg-6">
                        
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Periodo:</label>
                            <select id="periodo" name="periodo" class="form-control" required>
                                <option value="">-- SELECCIONAR --</option>
                                <option value="1">Hora</option>
                                <option value="2">Dia</option>
                                <option value="3">Semana</option>
                                <option value="4">Mes</option>
                                <option value="5">Año</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-lg-6">
                        
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Estado:</label>
                            <select id="estado" name="estado" class="form-control" required>
                                <option value="">-- SELECCIONAR --</option>
                                <option value="Nuevo">Nuevo</option>
                                <option value="Usado como nuevo">Usado como nuevo</option>
                                <option value="Semi nuevo">Semi nuevo</option>
                                <option value="Usado regular">Usado regular</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-lg-6">
                        
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Precio:</label>
                            <input type="text" class="form-control" name="precio" id="precio" required>
                        </div>
                    </div> -->
                    <div class="col-12">

                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Descripción:</label>
                            <textarea class="form-control" name="desc" id="desc"></textarea>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <input type="file" class="form-control form-control-file custom-file-input" name="img1" id="img1" required>
                        
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <!-- <label for="recipient-name" class="col-form-label">Precio:</label> -->
                            <input type="file" class="form-control" name="img2" id="img2" required>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <!-- <label for="recipient-name" class="col-form-label">Precio:</label> -->
                            <input type="file" class="form-control" name="img3" id="img3" required>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <!-- <label for="recipient-name" class="col-form-label">Precio:</label> -->
                            <input type="file" class="form-control" name="img4" id="img4" required>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-lg-9"></div>
                    <div class="col-12 col-sm-12 col-lg-3">
                        <button id="btn-edit-articulo" type="submit" class="ml-auto btn bg-general text-white w-100">Editar</button>

                    </div>
                </div>
            </form>
        </div>
    </div>
  </div>
</div>
@endsection
@section('script')  
<script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBnDrR4c_IBxJQ36FPO_f3CrHJVqcRZ1fA&libraries=places">
    </script>
<script src="{{ asset('assets/js/sweetalert2.all.min.js') }}"></script>
<script src="{{ asset('assets/js/filepond/jquery.js') }}"></script>
    <script src="{{ asset('assets/js/filepond/filepond.min.js') }}"></script>
    <script src="{{ asset('assets/js/filepond/filepond.jquery.js') }}"></script>
    <script src="{{ asset('assets/js/filepond/filepond-plugin-file-validate-type.js') }}"></script>
    <script src="{{ asset('assets/js/filepond/filepond-plugin-image-preview.js') }}"></script>
    <script src="{{ asset('assets/js/traductor-filepond.js') }}"></script>
<script src="{{ asset('assets/js/articulos/crud-articulos.js') }}"></script>
<script src="{{ asset('assets/js/categorias/crud-categorias.js') }}"></script>
<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
  </script>
    <script>
        $(document).ready(function () {
            getCategoriasPublic(0);
            // // getArticulos();
            // getMyArticles();
            getMisRentas();
            initializeInputsFiles()
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
@endsection
