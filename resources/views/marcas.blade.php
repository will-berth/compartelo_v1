@extends('layouts.base')
@section('contenido')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Marcas</h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="./">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">Marcas</li>
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
            <button type="button" class="btn btn-primary">Agregar marca</button>
        </div>
    </div>
</div>
<br>
<div class="table-responsive">
    <table class="table align-items-center table-flush">
      <thead class="thead-light text-center">
        <tr>
          <th>Marca</th>
          <th>Accion</th>
        </tr>
      </thead>
      <tbody>
        <tr>
            <td colspan="2">
                <div class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"><center><b class="h6">Cargando...</b></center></div>
                </div>
            </td>
        </tr>
      </tbody>
    </table>
  </div>

  
@endsection
