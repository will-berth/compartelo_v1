<!DOCTYPE html>
<html lang="en">

<head>
    <title>Registrate</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- Favicon icon -->
    <link rel="icon" href="assets/images/favin.ico" type="image/x-icon">
    <link href="{{ asset('assets/icofont/icofont.min.css') }}" rel="stylesheet">
    <!-- vendor css -->
    <link rel="stylesheet" href="{{ asset('assets/login/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/registro.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/general.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/filepond/filepond.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/filepond/filepond-plugin-image-preview.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">

</head>

<body>
    <div class="bg-comparte"></div>
    <div class="auth-wrapper">
        <div class="auth-content content-card">
            <div class="card">
                <form class="card-body text-center">
                    <h3 class="mb-3 mt-2">¡Hola! necesitamos algunos de tus datos</h3>

                    
                    <!-- DATOS PERSONALES -->
                    <div class="w-100">
                        <p>
                            <button class="btn w-100" type="button" data-toggle="collapse" data-target="#collapseDataPersonal" aria-expanded="false" aria-controls="collapseDataPersonal">
                                <div class="data-group d-flex align-items-center justify-content-start mt-1 mb-1">
                                    <i class="icofont-ui-user color-txt-primary mr-3"></i>
                                    <div class="data-group-text d-flex flex-column align-items-start">
                                        <span>Datos personales</span>
                                        <p>Serán los datos para tu cuenta</p>
                                    </div>
                                    <i id="dataPersonalCheck" class="ml-2 icofont-check-circled data-group-btn font-weight-bold"></i>
                                    <i class="ml-auto icofont-simple-down data-group-btn"></i>
                                </div>
                            </button>
                            <div class="collapse w-100" id="collapseDataPersonal">
                                <div id="dataPersonalForm" class="card card-body w-100">
                                    <div class="input-group mb-3">
                                        <input id="nombres" name="nombres" type="text" class="form-control" placeholder="Nombre(s)">
                                    </div>
                                    <div class="form-row">
                                        <div class="col-sm-12 col-lg-6 mb-3">
                                            <input id="app" name="app" type="text" class="form-control" placeholder="Apellido paterno">
                                        </div>
                                        <div class="col-sm-12 col-lg-6 mb-3">
                                            <input id="apm" name="apm " type="text" class="form-control" placeholder="Apellido materno">
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="col-sm-12 col-lg-6 mb-3">
                                            <input id="f_nacimiento" name="f_nacimiento" type="date" class="form-control" placeholder="Fecha de nacimiento">
                                        </div>
                                        <div class="col-sm-12 col-lg-6 mb-3">
                                            <select id="sexo" name="sexo" class="form-control">
                                                <option value="0" selected="selected" disabled>-- SELECCIONAR --</option>
                                                <option value="Masculino">Masculino</option>
                                                <option value="Femenino">Femenino</option>
                                            </select>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </p>
                    </div>
                    <!-- END DATOS PERSONALES -->
                    
                    <!-- IDENTIFICACIÓN OFICIAL -->
                    <div class="w-100">
                        <p>
                            <button class="btn w-100" type="button" data-toggle="collapse" data-target="#collapseDataIne" aria-expanded="false" aria-controls="collapseDataIne">
                                <div class="data-group d-flex align-items-center justify-content-start">
                                    <i class="icofont-card color-txt-primary mr-3"></i>
                                    <div class="data-group-text d-flex flex-column align-items-start">
                                        <span>Identificación oficial</span>
                                        <p>Será usado para verificar tu cuenta.</p>
                                    </div>
                                    <i id="dataIneCheck" class="ml-2 icofont-check-circled data-group-btn font-weight-bold"></i>
                                    <i class="ml-auto icofont-simple-down data-group-btn"></i>
                                </div>
                            </button>
                            <div class="collapse w-100" id="collapseDataIne">
                                <div id="dataIneForm" class="card card-body w-100">
                                    <!-- <div class="input-group mb-3">
                                        <label for="ine-front">Parte F</label>
                                        <input type="file" class="form-control" placeholder="Identificación oficial">
                                    </div> -->

                                    <div class="form-group mb-4">
                                        <label class="d-flex justify-content-start align-items-center" for="exampleFormControlFile1"><i class="icofont-id data-group-btn mr-3"></i>Parte frontal</label>
                                        <input id="ine_frontal" name="ine_frontal" type="file" class="form-control-file">
                                    </div>

                                    <div class="form-group mb-3">
                                        <label class="d-flex justify-content-start align-items-center" for="exampleFormControlFile1"><i class="icofont-mail data-group-btn mr-3"></i>Parte reverso</label>
                                        <input id="ine_reverso" name="ine_reverso" type="file" class="form-control-file">
                                    </div>
                                </div>
                            </div>
                        </p>
                    </div>
                    <!-- END IDENTIFICACIÓN OFICIAL -->

                    <!-- DOMICILIO -->
                    <div class="w-100">
                        <p>
                            <button class="btn w-100" type="button" data-toggle="collapse" data-target="#collapseDataDomicilio" aria-expanded="false" aria-controls="collapseDataDomicilio">
                                <div class="data-group d-flex align-items-center justify-content-start">
                                    <i class="icofont-home color-txt-primary mr-3"></i>
                                    <div class="data-group-text d-flex flex-column align-items-start">
                                        <span>Domicilio</span>
                                        <p>Datos de tu ubicación.</p>
                                    </div>
                                    <i id="dataDomicilioCheck" class="ml-2 icofont-check-circled data-group-btn font-weight-bold"></i>
                                    <i class="ml-auto icofont-simple-down data-group-btn"></i>
                                </div>
                            </button>
                            <div class="collapse w-100" id="collapseDataDomicilio">
                                <div id="dataDomicilioForm" class="card card-body w-100">
                                    <div class="form-row">
                                        <div class="col-sm-12 col-lg-6 mb-3">
                                            <input id="calle" name="calle" type="text" class="form-control" placeholder="Calle">
                                        </div>
                                        <div class="col-sm-6 col-lg-3 mb-3">
                                            <input id="n_exterior" name="n_exterior" type="number" class="form-control" placeholder="N. Exterior">
                                        </div>
                                        <div class="col-sm-6 col-lg-3 mb-3">
                                            <input id="n_interior" name="n_interior" type="number" class="form-control" placeholder="N. Interior">
                                        </div>
                                        <div class="col-sm-12 col-lg-6 mb-3">
                                            <input id="colonia" name="colonia" type="text" class="form-control" placeholder="Colonia">
                                        </div>
                                        <div class="form-group col-sm-12 col-lg-6 mb-3">
                                            <!-- <input type="text" class="form-control" placeholder="Municipio"> -->
                                            <select id="estado" name="estado" class="form-control">
                                                <option value="0" selected="selected" disabled>-- SELECCIONAR --</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-12 col-lg-6 mb-3">
                                            <input id="ciudad" name="ciudad" type="text" class="form-control" placeholder="Ciudad">
                                        </div>
                                        <div class="form-group col-sm-12 col-lg-6 mb-3">
                                            <!-- <input type="text" class="form-control" placeholder="Municipio"> -->
                                            <select id="municipio" name="municipio" class="form-control">
                                                <option value="0" selected="selected" disabled>-- SELECCIONAR --</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-12 col-lg-9 mb-3">
                                            <input id="referencia" name="referencia" type="text" class="form-control" placeholder="Referencia">
                                        </div>
                                        <div class="col-sm-6 col-lg-3 mb-3">
                                            <input id="cp" name="cp" type="number" class="form-control" placeholder="CP">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </p>
                    </div>
                    <!-- END DOMICILIO -->

                    <!-- COMPROBANTE DOMICILIO -->
                    <div class="w-100">
                        <p>
                            <button class="btn w-100" type="button" data-toggle="collapse" data-target="#collapseDataComDomicilio" aria-expanded="false" aria-controls="collapseDataComDomicilio">
                                <div class="data-group d-flex align-items-center justify-content-start">
                                    <i class="icofont-data color-txt-primary mr-3"></i>
                                    <div class="data-group-text d-flex flex-column align-items-start">
                                        <span>Comprobante de domicilio</span>
                                        <p>Será usado para verificar.</p>
                                    </div>
                                    <i id="dataComDomicilioCheck" class="ml-2 icofont-check-circled data-group-btn font-weight-bold"></i>
                                    <i class="ml-auto icofont-simple-down data-group-btn"></i>
                                </div>
                            </button>
                            <div class="collapse w-100" id="collapseDataComDomicilio">
                                <div id="dataComDomicilioForm" class="card card-body w-100">
                                    <div class="form-group mb-3">
                                        <label class="d-flex justify-content-start align-items-center" for="comprobante"><i class="icofont-mail data-group-btn mr-3"></i>Solo parte frontal</label>
                                        <input type="file" class="form-control-file" id="comprobante" name="comprobante">
                                    </div>
                                </div>
                            </div>
                        </p>
                    </div>
                    <!-- END COMPROBANTE DOMICILIO -->

                    <!-- CUENTA -->
                    <div class="w-100">
                        <p>
                            <button class="btn w-100" type="button" data-toggle="collapse" data-target="#collapseDataCuenta" aria-expanded="false" aria-controls="collapseDataCuenta">
                                <div class="data-group d-flex align-items-center justify-content-start">
                                    <i class="icofont-user-suited color-txt-primary mr-3"></i>
                                    <div class="data-group-text d-flex flex-column align-items-start">
                                        <span>Datos de cuenta</span>
                                        <p>Será usado para tu usario.</p>
                                    </div>
                                    <i id="dataCuentaCheck" class="ml-2 icofont-check-circled data-group-btn font-weight-bold"></i>
                                    <i class="ml-auto icofont-simple-down data-group-btn"></i>
                                </div>
                            </button>
                            <div class="collapse w-100" id="collapseDataCuenta">
                                <div id="dataCuentaForm" class="card card-body w-100">
                                    <div class="form-row">
                                        <div class="col-sm-12 col-lg-12 mb-3">
                                            <input id="email" name="email" type="email" class="form-control" placeholder="Correo">
                                        </div>
                                        <div class="col-sm-12 col-lg-6 mb-3">
                                            <input id="nom_user" name="nom_user" type="text" class="form-control" placeholder="Nombre de usuario">
                                        </div>
                                        <div class="col-sm-12 col-lg-6 mb-3">
                                            <input id="telefono" name="telefono" type="number" class="form-control" placeholder="Número de teléfono">
                                        </div>
                                        <div class="col-sm-12 col-lg-6 mb-3">
                                            <input id="password" name="password" type="password" class="form-control" placeholder="Contraseña">
                                        </div>
                                        <div class="col-sm-12 col-lg-6 mb-3">
                                            <input id="pass_repeat" name="pass_repeat" type="password" class="form-control" placeholder="Confirmar contraseña">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </p>
                    </div>
                    <!-- END CUENTA -->



                    

                    <button type="submit" class="btn btn-primary shadow-2 mb-4 btn-comparte-primary">Registrarse</button>
                    <p class="mb-0 text-muted">¿Ya tienes una cuenta? <a href="signin"> Iniciar sesión</a></p>
                </form>
                
            </div>
        </div>
    </div>

    <!-- Required Js -->
    <!-- <script src="{{ asset('assets/login/js/vendor-all.min.js') }}"></script>
	<script src="{{ asset('assets/login/plugins/bootstrap/js/bootstrap.min.js') }}"></script> -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.easing.min.js') }}"></script>
  <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('assets/js/estados-mexico/estados.js') }}"></script>
  <script src="{{ asset('assets/js/estados-mexico/municipios.js') }}"></script>
  <!-- <script src="{{ asset('assets/js/estados-mexico/validarCp.js') }}"></script> -->
  
  <script src="{{ asset('assets/js/filepond/jquery.js') }}"></script>
  <script src="{{ asset('assets/js/filepond/filepond.min.js') }}"></script>
  <script src="{{ asset('assets/js/filepond/filepond.jquery.js') }}"></script>
  <script src="{{ asset('assets/js/filepond/filepond-plugin-file-validate-type.js') }}"></script>
  <script src="{{ asset('assets/js/filepond/filepond-plugin-image-preview.js') }}"></script>
  <script src="{{ asset('assets/js/traductor-filepond.js') }}"></script>
  
  <script>
    $(document).ready(function(){
        getEstadosList();
    })
  </script>
  <script src="{{ asset('assets/js/estados-mexico/select-estado.js') }}"></script>
  <script src="{{ asset('assets/js/registro/manejoArchivos.js') }}"></script>
  <script src="{{ asset('assets/js/registro/validaCampos.js') }}"></script>
</body>
</html>
