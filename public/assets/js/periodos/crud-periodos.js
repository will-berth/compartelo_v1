$('#form-add-periodos').submit(function(e){
    e.preventDefault();
    var datos = $(this).serialize();
    $.ajax({
        'type': 'post',
        'url': 'addPeriodos/',
        'data': datos,
        beforeSend: function(){

        },
        success: function(response){

        }
    })
})