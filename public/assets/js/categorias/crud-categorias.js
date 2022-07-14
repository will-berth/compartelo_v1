$('#form-add-categorias').submit(function(e){
    e.preventDefault();
    var data = $(this).serialize();
    var type = '';
    var url = '';
    if($('#id').val() == ''){
        type = 'POST';
        url = 'addCategorias';
    }else{
        type = 'PUT';
        url = 'updateCategorias';
    }
    //Para que todo se ejecute en tiempo real
    $.ajax({
        'type': type,
        'url': url,
        'data': data,
        beforeSend: function(){
            $('#btn-save').html('Enviando...');//Al momento de agregar un dato nos muestra el boton de enviando...
        },
        success: function(response){
            var resp = JSON.parse(response);//Sirve para que muestre un mensaje si se agregó el dato
            Toast.fire({
                icon: resp.icon,
                title: resp.title,
                text: resp.text
            });
            closeModal('add-categorias', 'form-add-categorias');//Para que cierre el modal y lo resetee 
            getCategorias(0);
        }
    })
})
//Obtener los datos de categorias
function getCategorias(filtro){
    $.ajax({
        'type': 'GET',
        'url': 'getCategorias/'+filtro,
        beforeSend: function(){
            $('#table-categorias tbody').html('<tr><td colspan="3"><div class="progress"><div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"><center><b class="h6">Cargando...</b></center></div></div></td></tr>');
        },
        success: function(response){
            var resp = JSON.parse(response);
            var row = '';
            //Recorrer todo el JSON
            $.each(resp, function(index, valor){
                row += `<tr><td>${valor.categoria}</td><td>${valor.icono}</td><td><button class="btn" onclick="onChange(${valor.id}, '${valor.categoria}', '${valor.icono}');"><i class="icofont-edit text-primary icono-nav"></i></button></td></tr>`;
            })
            $('#table-categorias tbody').html(row);
        }
    })
}
//Para que carguen los datos al formulario cuando voy actualizar
function onChange(id, categoria, icono){
    $('#id').val(id);   
    $('#categoria').val(categoria);   
    $('#icono').val(icono); 
    openModal('add-categorias', 'categorias', categoria, 1);  
}
//cuando busquemos un dato nos refleje las coincidencias
$('#buscar').keyup(function(){
    var filtro = $(this).val();
    if(filtro == ''){
        getCategorias(0);
    }else{
        getCategorias(filtro);
    }
    
});