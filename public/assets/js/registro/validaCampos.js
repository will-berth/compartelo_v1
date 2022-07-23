$(document).ready(function () {
    let ine_frontal = false;
    let ine_reverso = false;
    function checkIne(frontalStatus, reversoStatus) {
        if (frontalStatus && reversoStatus){
            $("#dataIneCheck").addClass("check-field");
        }else{
            $("#dataIneCheck").removeClass("check-field");
        }
    }

    $("#ine_frontal").on("FilePond:addfile", function (e) {
        ine_frontal = true;
        checkIne(ine_frontal, ine_reverso);
    });
    
    $("#ine_frontal").on("FilePond:removefile", function (e) {
        ine_frontal = false;
        checkIne(ine_frontal, ine_reverso);
    });
    
    $("#ine_reverso").on("FilePond:addfile", function (e) {
        ine_reverso = true;
        checkIne(ine_frontal, ine_reverso);
    });
    
    $("#ine_reverso").on("FilePond:removefile", function (e) {
        ine_reverso = false;
        checkIne(ine_frontal, ine_reverso);
    });

    $("#dataPersonalForm").on("input", function () {
        let nombres = $("#nombres").val();
        let app = $("#app").val();
        let apm = $("#apm").val();
        let f_nacimiento = $("#f_nacimiento").val();
        let sexo = $("select[name=sexo] option").filter(":selected").val();
        // Solamente valida que los inputs no esten vacios
        if (
            nombres != "" &&
            app != "" &&
            apm != "" &&
            f_nacimiento != "" &&
            sexo != ""
        ) {

            // Valida cada input, status recide true si existe algun campo no valido
            let status = validaInputs(['nombres', 'app', 'apm', 'f_nacimiento', 'sexo'])
            if(status){
                checkField("#dataPersonalCheck", "is-invalid-field", "check-field");
            }else{
                checkField("#dataPersonalCheck", "check-field", "is-invalid-field");
            }
        } else {
            $("#dataPersonalCheck").removeClass("check-field");
            $("#dataPersonalCheck").removeClass("is-invalid-field");
        }
    });

    $("#dataDomicilioForm").on("input", function () {
        let calle = $("#calle").val();
        let n_exterior = $("#n_exterior").val();
        let n_interior = $("#n_interior").val();
        let colonia = $("#colonia").val();
        let estado = $("select[name=estado] option").filter(":selected").val();
        let ciudad = $("#ciudad").val();
        let municipio = $("#municipio").val();
        let referencia = $("#referencia").val();
        let cp = $("#cp").val();
        if (
            calle != "" &&
            n_exterior != "" &&
            colonia != "" &&
            estado != "" &&
            ciudad != "" &&
            municipio != "" &&
            referencia != "" &&
            cp != ""
        ) {
            let status = validaInputs(['calle', 'n_exterior', 'n_interior', 'colonia', 'estado', 'ciudad', 'municipio', 'referencia', 'cp'])
            if(status){
                checkField("#dataDomicilioCheck", "is-invalid-field", "check-field");
            }else{
                checkField("#dataDomicilioCheck", "check-field", "is-invalid-field");
            }
            // $("#dataDomicilioCheck").addClass("check-field");
        } else {
            $("#dataDomicilioCheck").removeClass("check-field");
            $("#dataDomicilioCheck").removeClass("is-invalid-field");
        }
    });

    $("#dataCuentaForm").on("input", function () {
        let email = $("#email").val();
        let nom_user = $("#nom_user").val();
        let telefono = $("#telefono").val();
        let password = $("#password").val();
        let pass_repeat = $("#pass_repeat").val();
        console.log(password)
        if (
            email != "" &&
            nom_user != "" &&
            telefono != "" &&
            password != "" &&
            pass_repeat != ""
        ) {
            let status = validaInputs(['email', 'nom_user', 'telefono', 'password', 'pass_repeat'])
            if(status){
                checkField("#dataCuentaCheck", "is-invalid-field", "check-field");
            }else{
                checkField("#dataCuentaCheck", "check-field", "is-invalid-field");
            }
            // $("#dataCuentaCheck").addClass("check-field");
        } else {
            $("#dataCuentaCheck").removeClass("check-field");
            $("#dataCuentaCheck").removeClass("is-invalid-field");
        }
    });

    $("#comprobante").on("FilePond:addfile", function (e) {
        $("#dataComDomicilioCheck").addClass("check-field");
        // console.log('Archivo agregado')
    });

    $("#comprobante").on("FilePond:removefile", function (e) {
        $("#dataComDomicilioCheck").removeClass("check-field");
        // console.log('Archivo eliminado')
    });

    function validaInputs(inputsList){
        let statusList = inputsList.map(input => {
            let status = $(`#${input}`)[0].checkValidity();
            if(status){
                checkField(`#${input}`, 'is-valid', 'is-invalid');
                if(input == 'pass_repeat' && $('#pass_repeat').val() != $('#password').val()){
                    checkField(`#${input}`, 'is-invalid', 'is-valid');
                    // alert("Mira hdtpm vas a escribir bien o no tu contraseña? >:v")
                    status = false;
                }
            }else{
                checkField(`#${input}`, 'is-invalid', 'is-valid');
            }
            return status
        })

        let isInvalid = statusList.includes(false);

        return isInvalid;
    }

    function checkField(selector, add, remove) {
        $(selector).removeClass(remove);
        $(selector).addClass(add);
    }
});
