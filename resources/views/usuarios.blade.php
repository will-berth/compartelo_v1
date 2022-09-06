@extends('layouts.base')
@section('contenido')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Usuarios</h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="./">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">Usuarios</li>
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
            <button type="button" class="btn btn-primary" onclick="openModal('add-usuarios', 'usuarios', '', 0)">Agregar usuario</button>
        </div>
    </div>
</div>
<br>
<div class="table-responsive">
    <table class="table align-items-center table-flush" id="table-usuarios">
        <thead class="thead-light text-center">
            <tr Align="center">
                <th>Nombre</th>
                <th>Sexo</th>
                <th>Usuario</th>
                <th>Email</th>
                <th>Email_verif</th>
                <th>Accion</th>
            </tr>
        </thead>
        <tbody class="text-center">

        </tbody>
    </table>
</div>


<!-- modal para autentificar usuario -->
<!-- <div class="modal fade" id="add-usuarios" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="titulo-modal"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" id="form-add-usuarios">
                    <div class="row">
                        <div class="col-md-12">
                            <input type="text" class="d-none" name="id" id="id">
                            <label for="">Usuario</label>
                            <input type="text" class="form-control" name="usuario" id="usuario" placeholder="usuario" required autocomplete="off">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary" id="btn-save"></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div> -->

<!-- modal para activar usuario -->

<div class="modal fade" id="add-usuarios" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Comentario</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" id="form-add-usuarios">
                    <div class="row">
                        <div class="col-md-12">
                            <label for="">Comentarios</label>
                            <textarea id="" class="form-control" name="Comentarios" rows="3" cols="40" placeholder="Comentarios"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-secondary" data-dismiss="modal">Enviar</button>
                        <button type="cancelar" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

@endsection
@section('script')
<script>
    $(document).ready(function() {
        getUsuarios(0);
    })
</script>
@endsection