$('#form-add-periodos').submit(function(e){
    e.preventDefault();
    var datos = $(this).serialize();
    $.ajax({
        'type': 'post',
        'url': 'addPeriodos/',
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
            closeModal('add-periodos', 'form-add-periodos');
            getPeriodos(0)


        }
    })
})

function getPeriodos(url, filtro){
    $.ajax({
        'type': 'get',
        'url': 'getPeriodos/'+filtro,
        beforeSend: function(){
            $('#table-periodo tbody').html('<tr><td colspan="2"><div class="progress"><div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"><center><b class="h6">Cargando...</b></center></div></div></td></tr>');
        },
        success: function(response){
            var resp = JSON.parse(response);
            var fila = '';
            $.each(resp, function(index, valor){
                fila += `<tr><td>${valor.tipo}</td></tr>`;
            });
            $('#table-periodo tbody').html(fila);
        }
    })
}