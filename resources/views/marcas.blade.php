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
        <label for="">Buscar</label>
        <input type="search" class="form-control" placeholder="Buscar..." id="buscar" autocomplete="off">
    </div>
    <div class="col-md-6">
        <label for="" class="invisible">add</label>
        <div class="d-flex justify-content-end">
            <button type="button" class="btn btn-primary">Agregar marca</button>
        </div>
    </div>
</div>
<br>
<div class="d-flex justify-content-end">
    <button class="btn btn-secondary">Reload</button>
</div>  
<div class="table-reaponsive">
    <table class="table table-bordered shadow-sm">
        <thead class="bg-dark text-center">
            <tr>
                <th>Marca</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody class="text-center">
            <tr>
                <td>seee</td>
                <td>Editar</td>
            </tr>
            <tr>
                <td>seee</td>
                <td>Editar</td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
