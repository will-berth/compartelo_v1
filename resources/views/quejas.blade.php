@extends('layouts.base')
@section('contenido')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Quejas</h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="./">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">Quejas</li>
    </ol>
</div>
<br>
<div class="d-flex justify-content-end">
    <button type="button" class="btn btn-primary">Agregar</button>
</div>
<br>
<div class= "table-responsive"> 
    <table class="table"> 
        <thead>
            <tr>
                <th>renta</th>
                <th>estado</th>
                <th>tipo</th>
                <th>descripcion</th>
                <th>fecha</th>
                <th>img1</th>
                <th>img2</th>
                <th>img3</th>
                <th>usuario</th>
                <th>Acciones</th>
            </tr>
            <tbody>
                
            </tbody>
        </thead>
    </table>
</div>
@endsection
