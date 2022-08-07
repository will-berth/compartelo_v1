$(document).ready(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $("#formRegistro").submit(function(e) {
        e.preventDefault();

        if($('#accept_t_c').is(":checked") === false){
            $('#accept_t_c').addClass('is-invalid');
        }else{
            $("#formRegistro").addClass('was-validated');
            let dataPost = new FormData(this);
            let n_exterior = $('#n_exterior').val();
            let n_interior = $('#n_interior').val();
            if(n_exterior === ''){
                dataPost.set('n_exterior', 'SN')
            }
            if(n_interior === ''){
                dataPost.set('n_interior', 'SN')
            }
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
                    $('.filepond--action-remove-item').click();
                    $('#formRegistro').trigger('reset');
                    $('input').removeClass('is-valid is-invalid');
                    $('select').removeClass('is-valid is-invalid');
                    $('i').removeClass('check-field');
                    $('i').removeClass('is-invalid-field');
                    Toast.fire({
                        icon: resp.type,
                        title: resp.title,
                        text: resp.text
                    });
                }, error: function(jqXhr, json, errorThrown){
                    Toast.fire({
                        icon: "error",
                        title: "Error",
                        text: "Tienes algunos errores en el formulario. Verificalos!"
                    });
                    let errorsList = jqXhr.responseJSON.errors;
                    let inputsList = ['nombre', 'f_nacimiento', 'sexo', 'ine_frontal', 'ine_reverso', 'calle', 'n_exterior', 'n_interior', 'colonia', 'estado', 'ciudad', 'municipio', 'referencia', 'cp', 'comprobante', 'email', 'usuario', 'telefono', 'password', 'pass_repeat']
                    showErrors(inputsList, errorsList)
                }
            })
        }

        // if ($("#formRegistro")[0].checkValidity() === false) {
        //     e.stopPropagation();
        // }
    })

    function showErrors(fieldList, errorsList){
        fieldList.forEach(field => {
            if(errorsList.hasOwnProperty(field)){
                $('#formRegistro').removeClass('was-validated');
                $(`#${field}`).addClass('is-invalid');
                $(`#${field}-alert`).text(errorsList[field]);
                if(field == 'comprobante'){
                    $(`#${field}-alert`).addClass('file-is-invalid');
                    $('#dataComDomicilioCheck').addClass('is-invalid-field');
                    $('#dataComDomicilioCheck').removeClass('check-field');
                }
                if(field.includes('nombre', 'f_nacimiento', 'sexo')){
                    $('#dataPersonalCheck').addClass('is-invalid-field');
                    $('#dataPersonalCheck').addClass('is-invalid-field');
                }
                if(field.includes('ine_frontal', 'ine_reverso')){
                    $(`#${field}-alert`).addClass('file-is-invalid');
                    $('#dataIneCheck').addClass('is-invalid-field');
                    $('#dataIneCheck').removeClass('check-field');
                }
                if(field.includes('calle', 'n_exterior', 'n_interior', 'colonia', 'estado', 'ciudad', 'municipo', 'referencia', 'cp')){
                    $('#dataDomicilioCheck').addClass('is-invalid-field');
                    $('#dataDomicilioCheck').removeClass('check-field');
                }
                if(field.includes('email', 'usuario', 'telefono', 'password')){
                    $('#dataCuentaCheck').addClass('is-invalid-field');
                    $('#dataCuentaCheck').removeClass('check-field');
                }
            }
        })
    }
})