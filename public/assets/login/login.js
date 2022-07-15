$('#form-login').submit(function(e){
    e.preventDefault();
    var data = $(this).serialize();
    var url = '';
    if($('#tipo').val() == 'cliente'){
        url = 'api/loginCliente';
    }else{
        url = 'loginCLiente';
    }
    $.ajax({
        'type': 'POST',
        'url':  url,
        'data': data,
        beforeSend: function(){
            
        },
        success: function(response){
            var resp = JSON.parse(response);
            Toast.fire({
                icon: resp.type,
                title: resp.title,
                text: resp.text
            });
            if(resp.type == 'success'){
                $('#token').removeClass('d-none');
                $('#token').val(resp.token);
            }
        }
    });
});