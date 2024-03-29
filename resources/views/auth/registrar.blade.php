@extends('layouts.public')
@section('css')
<link rel="stylesheet" href="{{ asset('assets/login/css/style.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/login.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/registro.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/filepond/filepond.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/filepond/filepond-plugin-image-preview.css') }}">
@endsection
@section('contenido')
<div class="bg-comparte"></div>
    <div class="auth-wrapper">
        <div class="auth-content content-card">
            <div class="card">
                <form id="formRegistro" action="POST" class="card-body text-center needs-validation" enctype="multipart/form-data" novalidate autocomplete="off">
                    <h3 class="mb-3 mt-2">¡Hola! necesitamos algunos de tus datos</h3>
                    @csrf
                    
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
                                        <label class="w-100 text-left" for="nombre">Nombre(s)</label>
                                        <input id="nombre" name="nombre" type="text" class="form-control" placeholder="Nombre(s), ej: Jhon Hernández Pérez" minlength="3" maxlength="40" pattern="[\sA-Z\u00C0-\u00DCa-z\u00E0-\u00FC\u00f1\u00d1]{1,40}" title="Debe registrar un nombre correcto sin caracteres especiales." required>
                                        <div id="nombre-alert" class="invalid-feedback text-left">
                                            Debe registrar un nombre correcto.
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="col-sm-12 col-lg-6 mb-3">
                                            <label class="w-100 text-left" for="f_nacimiento">Fecha de nacimiento</label>
                                            <input id="f_nacimiento" name="f_nacimiento" type="date" class="form-control" placeholder="Fecha de nacimiento" value="2000-01-01" required>
                                            <div id="f_nacimiento-alert" class="invalid-feedback text-left">
                                                Debe registrar su fecha de nacimiento.
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-lg-6 mb-3">
                                            <label class="w-100 text-left" for="sexo">Sexo</label>
                                            <select id="sexo" name="sexo" class="form-control" required>
                                                <option value="">-- SELECCIONAR --</option>
                                                <option value="Masculino">Masculino</option>
                                                <option value="Femenino">Femenino</option>
                                            </select>
                                            <div id="sexo-alert" class="invalid-feedback text-left">
                                                Debe seleccionar su sexo.
                                            </div>
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

                                    <div class="form-group mb-4 h-100">
                                        <label class="d-flex justify-content-start align-items-center" for="ine_frontal"><i class="icofont-id data-group-btn mr-3"></i>Parte frontal</label>
                                        <input id="ine_frontal" name="ine_frontal" type="file" class="form-control-file" required>
                                        <div id="ine_frontal-alert" class="invalid-feedback text-left">
                                            Debe proporcionar una fotografía de su identificación parte frontal.
                                        </div>
                                    </div>

                                    <div class="form-group mb-3">
                                        <label class="d-flex justify-content-start align-items-center" for="ine_reverso"><i class="icofont-mail data-group-btn mr-3"></i>Parte reverso</label>
                                        <input id="ine_reverso" name="ine_reverso" type="file" class="form-control-file" required>
                                        <div id="ine_reverso-alert" class="invalid-feedback text-left">
                                            Debe proporcionar una fotografía de su identificación parte trasera.
                                        </div>
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
                                            <label class="w-100 text-left" for="calle">Calle</label>
                                            <input id="calle" name="calle" type="text" class="form-control" placeholder="Calle, ej: Oriente Sur" minlength="3" maxlength="40" pattern="[\sA-Z\u00C0-\u00DCa-z\u00E0-\u00FC\u00f1\u00d1]{1,40}" title="Debe registrar una calle, entre 3 a 40 caracteres." required>
                                            <div id="calle-alert" class="invalid-feedback text-left">
                                                Debe registrar una calle, entre 3 a 40 caracteres.
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-lg-3 mb-3">
                                            <label class="w-100 text-left" for="n_exterior">Número exterior</label>
                                            <input id="n_exterior" name="n_exterior" type="text" class="form-control" placeholder="SN" pattern="[snSN0-9]{1,6}">
                                            <div id="n_exterior-alert" class="invalid-feedback text-left">
                                                Debe registrar un número exterior o SN en caso de no tenerlo.
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-lg-3 mb-3">
                                            <label class="w-100 text-left" for="n_interior">Número interior</label>
                                            <input id="n_interior" name="n_interior" type="text" class="form-control" placeholder="SN" pattern="[snSN0-9]{1,6}">
                                            <div id="n_interior-alert" class="invalid-feedback text-left">
                                                Debe registrar un número interior o SN en caso de no tenerlo.
                                            </div>
                                        </div>
                                        <div class="form-group col-sm-12 col-lg-6 mb-3">
                                            <label class="w-100 text-left" for="colonia">Colonia</label>
                                            <input id="colonia" name="colonia" type="text" class="form-control" placeholder="Colonia, ej: Las margaritas" minlength="3" maxlength="20" pattern="[\sA-Z\u00C0-\u00DCa-z\u00E0-\u00FC\u00f1\u00d1]{1,20}" title="Debe registrar una colonia, entre 3 a 40 caracteres sin caracteres especiales." required>
                                            <div id="colonia-alert" class="invalid-feedback text-left">
                                                Debe registrar una colonia, entre 3 a 40 caracteres sin caracteres especiales.
                                            </div>
                                        </div>
                                        <div class="form-group col-sm-12 col-lg-6 mb-3">
                                            <label class="w-100 text-left" for="estado">Estado</label>
                                            <select id="estado" name="estado" class="form-control" required>
                                                <option value="">-- SELECCIONAR --</option>
                                            </select>
                                            <div id="estado-alert" class="invalid-feedback text-left">
                                                Debe seleccionar un estado.
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-lg-6 mb-3">
                                            <label class="w-100 text-left" for="ciudad">Ciudad</label>
                                            <input id="ciudad" name="ciudad" type="text" class="form-control" placeholder="Ciudad, ej: Guadalajara" title="Debe registrar una ciudad, entre 3 a 40 caracteres sin caracteres especiales." required>
                                            <div id="ciudad-alert" class="invalid-feedback text-left">
                                                Debe registrar una ciudad, entre 3 a 40 caracteres sin caracteres especiales.
                                            </div>
                                        </div>
                                        <div class="form-group col-sm-12 col-lg-6 mb-3">
                                            <label class="w-100 text-left" for="municipio">Municipio</label>
                                            <select id="municipio" name="municipio" class="form-control" required>
                                                <option value="0" selected="selected" disabled>-- SELECCIONAR --</option>
                                            </select>
                                            <div id="municipio-alert" class="invalid-feedback text-left">
                                                Debe seleccionar un municipio.
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-lg-9 mb-3">
                                            <label class="w-100 text-left" for="referenca">Referencia</label>
                                            <input id="referencia" name="referencia" type="text" class="form-control" placeholder="Referencia, ej: Casa blanca con portón negro" minlength="15" maxlength="40" pattern="[\sA-Z\u00C0-\u00DCa-z\u00E0-\u00FC\u00f1\u00d1]{15,40}" title="Debe dar una descripción de su referencia de 15 a 40 caracteres." required>
                                            <div id="referencia-alert" class="invalid-feedback text-left">
                                                Debe dar una descripción de su referencia de 15 a 40 caracteres.
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-lg-3 mb-3">
                                            <label class="w-100 text-left" for="cp">CP</label>
                                            <input id="cp" name="cp" type="text" class="form-control" placeholder="CP" pattern="((0[1-9]|5[0-2])|[1-4][0-9])[0-9]{3}" title="Debe registrar un código postal válido." required>
                                            <div id="cp-alert" class="invalid-feedback text-left">
                                                Debe registrar un código postal válido.
                                            </div>
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
                                        <input type="file" class="form-control-file" id="comprobante" name="comprobante" required>
                                        <div id="comprobante-alert" class="invalid-feedback text-left">
                                            Debe proporcionar una fotografía de un comprobante de domicilio.
                                        </div>
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
                                            <label class="w-100 text-left" for="email">Correo electronico</label>
                                            <input id="email" name="email" type="email" class="form-control" placeholder="Escriba su correo electrónico. Ej: user@gmail.com" pattern="[a-zA-Z0-9!#$%&'*_+-]([\.]?[a-zA-Z0-9!#$%&'*_+-])+@[a-zA-Z0-9]([^@&%$\/()=?¿!.,:;]|\d)+[a-zA-Z0-9][\.][a-zA-Z]{2,4}([\.][a-zA-Z]{2})?" title="Debe registrar un correo válido." required>
                                            <div id="email-alert" class="invalid-feedback text-left">
                                                Debe registrar un correo válido.
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-lg-6 mb-3">
                                            <label class="w-100 text-left" for="usuario">Nombre de usuario</label>
                                            <input id="usuario" name="usuario" type="text" class="form-control" placeholder="Nombre de usuario, ej: User23" pattern="[a-zA-Z0-9]{4,10}" title="El nombre de usuario debe ser de 4 a 10 caracteres, no debe tener espacios ni caracteres especiales." required>
                                            <div id="usuario-alert" class="invalid-feedback text-left">
                                                El nombre de usuario debe ser de 4 a 10 caracteres, no debe tener espacios ni caracteres especiales.
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-lg-6 mb-3">
                                            <label class="w-100 text-left" for="telefono">Teléfono</label>
                                            <input id="telefono" name="telefono" type="tel" class="form-control" placeholder="Teléfono, solo 10 digitos." pattern="[0-9]{10}" title="El número de teléfono debe tener 10 digitos." required>
                                            <div id="telefono-alert" class="invalid-feedback text-left">
                                                El número de teléfono debe tener 10 digitos.
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-lg-6 mb-3">
                                            <label class="w-100 text-left" for="password">Contraseña</label>
                                            <input id="password" name="password" type="password" class="form-control" placeholder="Contraseña" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*_=+-]).{8,12}$" title="Contraseña, de 8 a 12 caracteres, se requiere por lo menos una letra mayuscula, minuscula, un numero y un caracter especial" required>
                                            <div id="password-alert" class="invalid-feedback text-left">
                                                Contraseña, de 8 a 12 caracteres, se requiere por lo menos una letra mayuscula, minuscula, un numero y un caracter especial.
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-lg-6 mb-3">
                                            <label class="w-100 text-left" for="pass_repeat">Repetir contraseña</label>
                                            <input id="pass_repeat" name="pass_repeat" type="password" class="form-control" placeholder="Confirmar contraseña" title="La contraseña debe ser igual." required>
                                            <div id="pass_repeat-alert" class="invalid-feedback text-left">
                                                La contraseña debe ser igual.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </p>
                    </div>
                    <!-- END CUENTA -->


                    <div class="form-check mb-4 mt-4">
                        <input class="form-check-input" type="checkbox" value="" id="accept_t_c" name="accept_t_c">
                        <label class="form-check-label text-muted" for="accept_t_c">
                            He leído y acepto los <a href="#">términos y condiciones</a>.
                        </label>
                        <div class="invalid-feedback">
                            Debe aceptar los términos y condiciones.
                        </div>
                    </div>
                    

                    <button type="submit" class="btn btn-primary shadow-2 mb-4 btn-comparte-primary">Registrarse</button>
                    <p class="mb-0 text-muted">¿Ya tienes una cuenta? <a href="login"> Iniciar sesión</a></p>
                </form>
                
            </div>
        </div>
    </div>
@endsection
@section('script')
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.easing.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/estados-mexico/estados.js') }}"></script>
<script src="{{ asset('assets/js/estados-mexico/municipios.js') }}"></script>

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
<script src="{{ asset('assets/js/registro/envioDatos.js') }}"></script>
@endsection