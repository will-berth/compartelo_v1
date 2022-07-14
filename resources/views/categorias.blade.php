@extends('layouts.base')
@section('contenido')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Categorias</h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="./">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">Categorias</li>
    </ol>
</div>
<br>
<div class="row">
    <div class="col-md-6">
        <label class="sr-only" for="inlineFormInputGroup">Buscar...</label>
        <div class="input-group mb-2">
            <input type="search" class="form-control" id="buscar" placeholder="Buscar..." autocomplete="off">
            <div class="input-group-prepend">
                <div class="input-group-text"><i class="icofont-search"></i></div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="d-flex justify-content-end">
            <button type="button" class="btn btn-primary" onclick="openModal('add-categorias', 'categorias', '', 0)">Agregar Categorias</button>
        </div>
    </div>
</div>
<br>
<div class="table-responsive">
    <table class="table align-items-center table-flush" id="table-categorias">
        <thead class="thead-light text-center">
            <tr>
                <th>Categoría</th>
                <th>Icono</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody class="text-center">
            
        </tbody>
    </table>
</div>

<!-- modal para agregar categorias -->
<div class="modal fade" id="add-categorias" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="titulo-modal"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="" id="form-add-categorias">
            <div class="row">
                <div class="col-md-12">
                    <input type="text" class="d-none" name="id" id="id">
                    <label for="">Categoría</label>
                    <input type="text" class="form-control" name="categoria" id="categoria" placeholder="Categoría" required autocomplete="off">
                    <label for="">Icono</label>
                    <input type="text" class="form-control" name="icono" id="icono" placeholder="Icono" required autocomplete="off">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary" id="btn-save"></button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
@section('script')
<script>
    $(document).ready(function(){
        getCategorias(0);
    })
</script>
@endsection