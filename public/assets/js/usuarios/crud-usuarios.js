$('#form-add-usuarios').submit(function (e) { // id del formulario
    e.preventDefault();     // para actualizar la pagina sin recargar
    var data = $(this).serialize(); // serializa 

    $.ajax({
        'type': 'POST',
        'url': 'verificar/usuario',
        'data': data,
        success: function (response) {
            var resp = JSON.parse(response);//Sirve para que muestre un mensaje si se agregó el dato
            Toast.fire({
                icon: resp.type,
                title: resp.title,
                text: resp.text
            });
            closeModal('add-usuarios', 'form-add-usuarios');
            getUsuarios(0);
        }
    });
})

function getUsuarios(filtro) {
    $.ajax({
        'type': 'get',
        'url': 'getUsuarios/' + filtro,
        beforeSend: function () {
            $('#table-usuarios tbody').html('<tr><td colspan="2"><div class="progress"><div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"><center><b class="h6">Cargando...</b></center></div></div></td></tr>');
        },
        success: function (response) {
            var resp = JSON.parse(response);
            var fila = '';
            $.each(resp, function (index, valor) {

                fila += `<tr><td>${valor.nombre}</td>
                         <td>${valor.sexo}</td>
                         <td>${valor.usuario}</td>
                         <td>${valor.email}</td>
                         <td>${valor.email_verif}</td>
                         
                <td><div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle"  type="button" data-toggle="dropdown" aria-expanded="false">Acción</button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" onclick="onChange(${valor.id});"  href="#">Autorizar</a>
                  <a class="dropdown-item" onclick="onChange(${valor.id});"  href="#">Rechazar</a>
                </div>
              </div></td></tr>`;
              
            });
            $('#table-usuarios tbody').html(fila);
        }
    })
}

function onChange(id ) {
    $('#id').val(id);

    $('#add-usuarios').modal('show');
    
}

$('#resetPassword').submit(function (e) {
    e.preventDefault();
    var data = $(this).serialize();
    $.ajax({
        'type': 'POST',
        'url': 'api/resetPassword',
        'data': data,
        success: function (response) {
            var resp = JSON.parse(response);//Sirve para que muestre un mensaje si se agregó el dato
            Toast.fire({
                icon: resp.type,
                title: resp.title,
                text: resp.text
            });
            $('#resetPassword').trigger('reset');
        }
    });
})

$('#buscar').keyup(function () {
    var filtro = $(this).val();
    if (filtro == '') {
        getUsuarios(0);
    } else {
        getUsuarios(filtro);
    }
});