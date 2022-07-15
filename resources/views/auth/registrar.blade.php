<!DOCTYPE html>
<html lang="en">

<head>
    <title>Registrate</title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Datta Able Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
    <meta name="keywords" content="admin templates, bootstrap admin templates, bootstrap 4, dashboard, dashboard templets, sass admin templets, html admin templates, responsive, bootstrap admin templates free download,premium bootstrap admin templates, datta able, datta able bootstrap admin template, free admin theme, free dashboard template"/>
    <meta name="author" content="CodedThemes"/>

    <!-- Favicon icon -->
    <link rel="icon" href="assets/images/favin.ico" type="image/x-icon">
    <link href="{{ asset('assets/icofont/icofont.min.css') }}" rel="stylesheet">
    <!-- animation css -->
    <link rel="stylesheet" href="{{ asset('assets/login/plugins/animation/css/animate.min.css') }}">
    <!-- vendor css -->
    <link rel="stylesheet" href="{{ asset('assets/login/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/registro.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/general.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">

</head>

<body>
    <div class="bg-comparte"></div>
    <div class="auth-wrapper">
        <div class="auth-content content-card">
            <div class="card">
                <div class="card-body text-center">
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
                                    <i class="ml-2 icofont-check-circled data-group-btn font-weight-bold color-success"></i>
                                    <i class="ml-auto icofont-simple-down data-group-btn"></i>
                                </div>
                            </button>
                            <div class="collapse w-100" id="collapseDataPersonal">
                                <!-- <div class="card card-body w-100">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                </div> -->
                                <div class="card card-body w-100">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="Nombre(s)">
                                    </div>
                                    <div class="form-row">
                                        <div class="col-sm-12 col-lg-6 mb-3">
                                            <input type="text" class="form-control" placeholder="Apellido paterno">
                                        </div>
                                        <div class="col-sm-12 col-lg-6 mb-3">
                                            <input type="text" class="form-control" placeholder="Apellido materno">
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="col-sm-12 col-lg-6 mb-3">
                                            <input type="date" class="form-control" placeholder="Fecha de nacimiento">
                                        </div>
                                        <div class="col-sm-12 col-lg-6 mb-3">
                                            <select class="form-control">
                                                <option selected="selected" disabled>-- Seleccionar --</option>
                                                <option>Masculino</option>
                                                <option>Femenino</option>
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
                                    <i class="ml-2 icofont-check-circled data-group-btn font-weight-bold color-succes"></i>
                                    <i class="ml-auto icofont-simple-down data-group-btn"></i>
                                </div>
                            </button>
                            <div class="collapse w-100" id="collapseDataIne">
                                <div class="card card-body w-100">
                                    <!-- <div class="input-group mb-3">
                                        <label for="ine-front">Parte F</label>
                                        <input type="file" class="form-control" placeholder="Identificación oficial">
                                    </div> -->

                                    <div class="form-group mb-4">
                                        <label class="d-flex justify-content-start align-items-center" for="exampleFormControlFile1"><i class="icofont-id data-group-btn mr-3"></i>Parte frontal</label>
                                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                    </div>

                                    <div class="form-group mb-3">
                                        <label class="d-flex justify-content-start align-items-center" for="exampleFormControlFile1"><i class="icofont-mail data-group-btn mr-3"></i>Parte reverso</label>
                                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
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
                                    <i class="ml-2 icofont-check-circled data-group-btn font-weight-bold color-success"></i>
                                    <i class="ml-auto icofont-simple-down data-group-btn"></i>
                                </div>
                            </button>
                            <div class="collapse w-100" id="collapseDataDomicilio">
                                <div class="card card-body w-100">
                                    <div class="form-row">
                                        <div class="col-sm-12 col-lg-6 mb-3">
                                            <input type="text" class="form-control" placeholder="Calle">
                                        </div>
                                        <div class="col-sm-6 col-lg-3 mb-3">
                                            <input type="number" class="form-control" placeholder="N. Exterior">
                                        </div>
                                        <div class="col-sm-6 col-lg-3 mb-3">
                                            <input type="number" class="form-control" placeholder="N. Interior">
                                        </div>
                                        <div class="col-sm-12 col-lg-6 mb-3">
                                            <input type="text" class="form-control" placeholder="Colonia">
                                        </div>
                                        <div class="form-group col-sm-12 col-lg-6 mb-3">
                                            <!-- <input type="text" class="form-control" placeholder="Municipio"> -->
                                            <select id="form-estados" class="form-control">
                                                <option selected="selected" disabled>-- SELECCIONAR --</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-12 col-lg-6 mb-3">
                                            <input type="text" class="form-control" placeholder="Ciudad">
                                        </div>
                                        <div class="col-sm-12 col-lg-6 mb-3">
                                            <input type="text" class="form-control" placeholder="Estado">
                                        </div>
                                        <div class="col-sm-12 col-lg-9 mb-3">
                                            <input type="text" class="form-control" placeholder="Referencia">
                                        </div>
                                        <div class="col-sm-6 col-lg-3 mb-3">
                                            <input type="number" class="form-control" placeholder="CP">
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
                                    <i class="ml-2 icofont-check-circled data-group-btn font-weight-bold color-success"></i>
                                    <i class="ml-auto icofont-simple-down data-group-btn"></i>
                                </div>
                            </button>
                            <div class="collapse w-100" id="collapseDataComDomicilio">
                                <div class="card card-body w-100">
                                    <div class="form-group mb-3">
                                        <label class="d-flex justify-content-start align-items-center" for="comprobanteDomicilio"><i class="icofont-mail data-group-btn mr-3"></i>Solo parte frontal</label>
                                        <input type="file" class="form-control-file" id="comprobanteDomicilio">
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
                                    <i class="ml-2 icofont-check-circled data-group-btn font-weight-bold color-success"></i>
                                    <i class="ml-auto icofont-simple-down data-group-btn"></i>
                                </div>
                            </button>
                            <div class="collapse w-100" id="collapseDataCuenta">
                                <div class="card card-body w-100">
                                    <div class="form-row">
                                        <div class="col-sm-12 col-lg-12 mb-3">
                                            <input type="email" class="form-control" placeholder="Correo">
                                        </div>
                                        <div class="col-sm-12 col-lg-6 mb-3">
                                            <input type="text" class="form-control" placeholder="Nombre de usuario">
                                        </div>
                                        <div class="col-sm-12 col-lg-6 mb-3">
                                            <input type="number" class="form-control" placeholder="Número de teléfono">
                                        </div>
                                        <div class="col-sm-12 col-lg-6 mb-3">
                                            <input type="password" class="form-control" placeholder="Contraseña">
                                        </div>
                                        <div class="col-sm-12 col-lg-6 mb-3">
                                            <input type="password" class="form-control" placeholder="Confirmar contraseña">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </p>
                    </div>
                    <!-- END CUENTA -->



                    

                    <button class="btn btn-primary shadow-2 mb-4 btn-comparte-primary">Registrarse</button>
                    <p class="mb-0 text-muted">¿Ya tienes una cuenta? <a href="signin"> Iniciar sesión</a></p>
                </div>
                
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
  <script src="{{ asset('assets/js/ruang-admin.min.js') }}"></script>
  <script src="{{ asset('assets/js/sweetalert2.all.min.js') }}"></script>
  <script src="{{ asset('assets/js/openCloseModal.js') }}"></script>
  <script src="{{ asset('assets/js/respuestas.js') }}"></script>
  <script src="{{ asset('assets/js/marcas/crud-marcas.js') }}"></script>
  <script src="{{ asset('assets/js/estados-mexico/estados.js') }}"></script>
  <script>
    $(document).ready(function(){
        getEstadosList();
    })
  </script>

</body>
</html>
