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
<div class="d-flex justify-content-end">
    <button type="button" class="btn btn-primary">Agregar marca</button>
</div>
<br>
<div class="table-reaponsive">
    <table class="table">
        <thead>
            <tr>
                <th>Marca</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>

        </tbody>
    </table>
</div>
@endsection
