function createActionForm(){
    $('#form-add-depositos').submit(function(e){
        e.preventDefault();
        var data = $(this).serialize();
        console.log(data)
    //var url = '';
    //var type = '';
    //if ($('#id').val() == '') {
    //    url = 'addDepositos/';
    //    type = 'POST';
    //} else {
    //    url = 'updateDepositos/';
    //    type = 'PUT';
    //}
    $.ajax({
        'type': 'POST',
        'url': 'verificar/depositos',
        'data': data,
        success: function (response) {
            // console.log(response)
            var resp = JSON.parse(response);//
            Toast.fire({
                icon: resp.type,
                title: resp.title,
                text: resp.text
            });
            closeModal('add-depositos', 'form-add-depositos');
            getUsuarios(0);
        }
    });
})
}
//Obtener los datos de depositos
function getDepositos(filtro) {
    $.ajax({
        'type': 'GET',
        'url': 'getDepositos/' + filtro,
        beforeSend: function () {
            $('#table-depositos tbody').html('<tr><td colspan="4"><div class="progress"><div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"><center><b class="h6">Cargando...</b></center></div></div></td></tr>');
        },
        success: function (response) {
            var resp = JSON.parse(response);
            var row = '';
            //Recorrer todo el JSON
            $.each(resp, function (index, valor) {
                row += `<tr>
                        <td>${valor.monto}</td>
                        <td>${valor.fecha}</td>
                        <td>${valor.comprobante}</td>
                        <td>${valor.estado}</td>
                        <td>
                        <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
                          Depósito
                        </button>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" onclick="onChange(${valor.id});" href="#">Aceptar</a>
                          <a class="dropdown-item" onclick="onChange(${valor.id});" href="#">Rechazar</a>
                        </div>
                      </div></tr>`;
            });
            $('#table-depositos tbody').html(row);
        }
    })
}

function onChange(id){
    $('#id').val(id);
    $('#add-depositos').modal('show');
}
//cuando busquemos un dato nos refleje las coincidencias
$('#buscar').keyup(function () {
    var filtro = $(this).val();
    if (filtro == '') {
        getDepositos(0);
    } else {
        getDepositos(filtro);
    }

});