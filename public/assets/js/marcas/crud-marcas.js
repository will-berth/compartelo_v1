$('#form-add-marcas').submit(function(e){
    e.preventDefault();
    var datos = $(this).serialize();
    $.ajax({
        'type': 'post',
        'url': 'addMarcas/',
        'data': datos,
        beforeSend: function(){
            $('btn-save').html('Enviando...');
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
                fila += `<tr><td>${valor.marca}</td></tr>`;
            });
            $('#table-marcas tbody').html(fila);
        }
    })
}