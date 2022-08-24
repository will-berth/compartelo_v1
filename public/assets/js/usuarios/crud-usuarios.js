$('#resendVerification').submit(function(e){
    e.preventDefault();
    var data = $(this).serialize();
    $.ajax({
        'type': 'POST',
        'url': 'api/resendVerification',
        'data': data,
        success:function(response){
            var resp = JSON.parse(response);//Sirve para que muestre un mensaje si se agregó el dato
            Toast.fire({
                icon: resp.type,
                title: resp.title,
                text: resp.text
            });
        }
    }); 
})
$('#resetPassword').submit(function(e){
    e.preventDefault();
    var data = $(this).serialize();
    $.ajax({
        'type': 'POST',
        'url': 'api/resetPassword',
        'data': data,
        success:function(response){
            var resp = JSON.parse(response);//Sirve para que muestre un mensaje si se agregó el dato
            Toast.fire({
                icon: resp.type,
                title: resp.title,
                text: resp.text
            });
            $('#resetPassword').trigger('reset');
        }
    }); 
})