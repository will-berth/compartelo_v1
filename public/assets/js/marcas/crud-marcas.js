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
            var resp = JSON.parse(response);
            Toast.fire({
                icon: resp.icon,
                title: resp.title,
                text: resp.text
            });
            getMarcas('getMarcas/', 0)
        }
    })
})

function getMarcas(url, filtro){
    $.ajax({
        'type': 'get',
        'url': 'getMarcas/'+filtro,
        beforeSend: function(){

        },
        success: function(response){
            var resp = JSON.parse(response);
            console.log(resp);
        }
    })
}