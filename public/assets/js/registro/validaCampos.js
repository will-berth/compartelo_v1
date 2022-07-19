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
        if (
            nombres != "" &&
            app != "" &&
            apm != "" &&
            f_nacimiento != "" &&
            sexo != "0"
        ) {
            $("#dataPersonalCheck").addClass("check-field");
        } else {
            $("#dataPersonalCheck").removeClass("check-field");
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
            n_interior != "" &&
            colonia != "" &&
            estado != "0" &&
            ciudad != "" &&
            municipio != "" &&
            referencia != "" &&
            cp != ""
        ) {
            $("#dataDomicilioCheck").addClass("check-field");
        } else {
            $("#dataDomicilioCheck").removeClass("check-field");
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
            $("#dataCuentaCheck").addClass("check-field");
        } else {
            $("#dataCuentaCheck").removeClass("check-field");
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
});
