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
            var resp = JSON.parse(response);
            Toast.fire({
                icon: resp.icon,
                title: resp.title,
                text: resp.text
            });
            getPeriodos('getPeriodos/', 0)


        }
    })
})

function getPeriodos(url, filtro){
    $.ajax({
        'type': 'get',
        'url': 'getPeriodos/'+filtro,
        beforeSend: function(){

        },
        success: function(response){
            var resp = JSON.parse(response);
            console.log(resp);
        }
    })
}