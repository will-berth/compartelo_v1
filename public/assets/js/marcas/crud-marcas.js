$('#form-add-marcas').submit(function(e){
    e.preventDefault();
    var datos = $(this).serialize();
    $.ajax({
        'type': 'post',
        'url': 'addMarcas/',
        'data': datos,
        beforeSend: function(){

        },
        success: function(response){

        }
    })
})