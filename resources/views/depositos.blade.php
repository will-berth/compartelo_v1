@extends('layouts.base')
@section('contenido')
<div class="d-sm-flex align-items-center justify-content-between mb-8">
    <h1 class="h3 mb-0 text-gray-800">Depositos</h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="./">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">Depositos</li>
    </ol>
</div>
<br>
    <div class="col-md-8">
        <div class="d-flex justify-content-end">
        </div>
    </div>
</div>
<br>
<div class="table-responsive">
    <table class="table align-items-center table-flush" id="table-depositos">
        <thead class="thead-light text-center">
            <tr>
                <th>Depósito</th>
                <th>Fecha</th>
                <th>Comprobante</th>
                <th>Estado</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody class="text-center">
            
        </tbody>
    </table>
</div>

<!-- modal para agregar depositos -->
<div class="modal fade" id="add-depositos" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="titulo-modal"></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="" id="form-add-depositos">
              <div class="row">
                  <div class="col-md-12">
                      <label for="">Deposito</label>
                      <input type="hidden" class="d-none" name="id" id="id">
                      <textarea id="" class="form-control" name="Comentarios" rows="3" cols="40" placeholder="Deposito"></textarea>
                  </div>
              </div>
              <div class="modal-footer">
                  <button type="submit" class="btn btn-secondary">Enviar</button>
                  <button type="cancelar" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
              </div>
        </form>
      </div>
  </div>
</div>
@endsection
@section('script')
<script>
    $(document).ready(function(){
        getDepositos(0);
    })
</script>
@endsection