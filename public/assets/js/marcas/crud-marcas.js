$('#form-add-marcas').submit(function(e){
    e.preventDefault();
    var datos = $(this).serialize();
    var url = '';
    var type = '';
    if($('#id').val() == ''){
        url = 'addMarcas/';
        type = 'POST';
    }else{
        url = 'updateMarcas/';
        type = 'PUT';
    }
    $.ajax({
        'type': type,
        'url': url,
        'data': datos,
        beforeSend: function(){
            $('#btn-save').html('Enviando...');
        },
        success: function(response){
            var resp = JSON.parse(response);
            Toast.fire({
                icon: resp.icon,
                title: resp.title,
                text: resp.text
            });
            closeModal('add-marcas', 'form-add-marcas');
            getMarcas(0);
        }
    })
})

function getMarcas(filtro){
    $.ajax({
        'type': 'get',
        'url': 'getMarcas/'+filtro,
        beforeSend: function(){
            $('#table-marcas tbody').html('<tr><td colspan="2"><div class="progress"><div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"><center><b class="h6">Cargando...</b></center></div></div></td></tr>');
        },
        success: function(response){
            var resp = JSON.parse(response);
            var fila = '';
            $.each(resp, function(index, valor){
                fila += `<tr><td>${valor.marca}</td><td><button class="btn" onclick="onChange(${valor.id}, '${valor.marca}');"><i class="icofont-edit text-primary icono-nav"></i></button></td></tr>`;
            });
            $('#table-marcas tbody').html(fila);
        }
    })
}

function onChange(id, marca){
    $('#id').val(id);
    $('#marca').val(marca);
    openModal('add-marcas', 'marcas', marca, 1)
}
$('#buscar').keyup(function(){
    var filtro = $(this).val();
    if(filtro == ''){
        getMarcas(0);
    }else{
        getMarcas(filtro);
    }
});