@extends('layouts.base')
@section('contenido')
<div class="d-sm-flex align-items-center justify-content-between mb-8">
    <h1 class="h3 mb-0 text-gray-800">Depositos</h1>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="./">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">Depositos</li>
    </ol>
</div>
<br>
    <div class="col-md-8">
        <div class="d-flex justify-content-end">
        </div>
    </div>
</div>
<br>
<div class="table-responsive">
    <table class="table align-items-center table-flush" id="table-depositos">
        <thead class="thead-light text-center">
            <tr>
                <th>Depósito</th>
                <th>Fecha</th>
                <th>Comprobante</th>
                <th>Estado</th>
            </tr>
        </thead>
        <tbody class="text-center">
            
        </tbody>
    </table>
</div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
@section('script')
<script>
    $(document).ready(function(){
        getDepositos(0);
    })
</script>
@endsection