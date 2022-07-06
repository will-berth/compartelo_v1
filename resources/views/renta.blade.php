@extends('layouts.base')
@section('contenido')

<div class="d-flex justify-content-end">
    <button type= "button" class="btn btn-primary">agregar</button>
<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th>usuario</th>
                <th>fecha renta</th>
                <th>total</th>
                <th>tipo_pago</th>
                <th>estado</th>
                <th>accion</th>
            </tr>
        </thead>
       

    </table>

</div>
</div>
@endsection