$(document).ready(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $("#formRegistro").submit(function(e) {
        e.preventDefault();
        // if ($("#formRegistro")[0].checkValidity() === false) {
        //     e.stopPropagation();
        // }
        $("#formRegistro").addClass('was-validated');
        let dataPost = new FormData(this);
        $.ajax({
            url  : "api/registrar",
            type : 'POST',
            data: dataPost,
            cache: false,
            contentType : false,
            processData: false,
            success: function(response){
                var resp = JSON.parse(response);
                $('#formRegistro').removeClass('was-validated');
                $('#formRegistro').trigger('reset');
                $('input').removeClass('is-valid is-invalid');
                $('select').removeClass('is-valid is-invalid');
                $('i').removeClass('check-field');
                $('.filepond--action-remove-item').click();
                Toast.fire({
                    icon: resp.type,
                    title: resp.title,
                    text: resp.text
                });
            }, error: function(response){
                // console.log('Hubo un error')
            }
        })
    })
})