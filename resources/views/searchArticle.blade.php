@extends('layouts.base-public')
@section('contenido')
<div class="row" id="list-marcas">
    
</div>
<br>
<div class="row" id="coincidencias">
            
</div>
@endsection
@section('script')  
<script src="{{ asset('assets/js/articulos/crud-articulos.js') }}"></script>
<script src="{{ asset('assets/js/categorias/crud-categorias.js') }}"></script>
<script>
    $(function () {
        $("body").tooltip({ selector: '[data-toggle=tooltip]' });
    });
    $(document).ready(function(){
        let urlComplete = window.location;
        let url = urlComplete.href.split('/');
        let articulo = url[4];
        getCategoriasPublic(0);
        searchArticle(articulo, 0)
    });
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