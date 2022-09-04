@extends('layouts.base-public')
@section('contenido')
<div class="row" id="populares">

</div>
@endsection
@section('script')  
<script src="{{ asset('assets/js/articulos/crud-articulos.js') }}"></script>
<script src="{{ asset('assets/js/categorias/crud-categorias.js') }}"></script>
    <script>
        $(document).ready(function () {
            getCategoriasPublic(0);
            getArticulos();
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