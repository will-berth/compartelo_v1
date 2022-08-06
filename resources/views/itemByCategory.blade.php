@extends('layouts.base-public')
@section('contenido')
<div class="row" id="list-marcas">
    
</div>
<br>
<div class="row" id="populares">
            
</div>
@endsection
@section('script')  
<script src="{{ asset('assets/js/articulos/crud-articulos.js') }}"></script>
<script>
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
    $(document).ready(function(){
        let urlComplete = window.location;
        let url = urlComplete.href.split('/');
        let categoria = url[4];
        getItemByCategory(categoria)
    });
</script>
@endsection