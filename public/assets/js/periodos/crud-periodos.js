$('#form-add-periodos').submit(function(e){
    e.preventDefault();
    var datos = $(this).serialize();
    var url = '';
    var type = '';
    if($('#id').val() == ''){
        url = 'addPeriodos/';
        type = 'POST';
    }else{
        url = 'updatePeriodos/';
        type = 'PUT';
    }

    $.ajax({
        'type': type,
        'url': url,
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
            getPeriodos(0);
        }
    })
})

function getPeriodos(filtro){
    $.ajax({
        'type': 'get',
        'url': 'getPeriodos/'+filtro,
        beforeSend: function(){
            $('#table-periodos tbody').html('<tr><td colspan="2"><div class="progress"><div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"><center><b class="h6">Cargando...</b></center></div></div></td></tr>');
        },
        success: function(response){
            var resp = JSON.parse(response);
            var fila = '';
            $.each(resp, function(index, valor){
                fila += `<tr><td>${valor.tipo}</td><td><button class="btn" onclick="onChange(${valor.id}, '${valor.tipo}');"><i class="icofont-edit text-primary icono-nav"></i></button></td></tr>`;
            });
            $('#table-periodos tbody').html(fila);
        }
    })
}

function onChange(id, tipo){
    $('#id').val(id);
    $('#tipo').val(tipo);
    openModal('add-periodos', 'periodos', tipo, 1)
} 
$('#buscar').keyup(function(){
    var filtro = $(this).val();
    if(filtro == ''){
        getPeriodos(0);
    }else{
        getPeriodos(filtro);
    }
}
);

