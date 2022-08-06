@extends('layouts.base-public')
@section('contenido')
<div class="row" id="populares">

</div>
@endsection
@section('script')  
<script src="{{ asset('assets/js/articulos/crud-articulos.js') }}"></script>
<script>
    $(document).ready(function () {
        getArticulos();
    })
</script> 
@endsection