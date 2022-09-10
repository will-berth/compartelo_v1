@extends('layouts.base-public')
@section('contenido')
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
        $('#filtros').removeClass('d-none');
        $('#col-articles').addClass('col-md-9');
        let urlComplete = window.location;
        let url = urlComplete.href.split('/');
        let filtros = url[3];
        getCategoriasPublic(0);
        searchArticle(filtros, 0);
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