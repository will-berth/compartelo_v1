function getArticulos(){
    $.ajax({
        'type': 'GET',
        'url': 'getArticulos',
        beforeSend: function(){
            $('#populares').html('<div class="col-12 d-flex justify-content-center mt-5"><div class="lds-ripple"><div></div><div></div></div></div>')
        },
        success: function(response){
            var data = JSON.parse(response);
            var card = '';
            $.each(data, function(index, valor){
                var precio = Intl.NumberFormat('es-MX',{style:'currency',currency:'MXN'}).format(valor.precio);
                if(typeof(valor.distancia) == 'undefined'){
                    valor.distancia = '';
                    valor.duracion = '';
                }

                card += `
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <a href="item-details/${valor.clave}"  class="text-decoration-none">
                        <div class="card shadow-sm mb-3">
                            <div class="card-header d-flex justify-content-end">
                                <span class="badge badge-primary">Mas popular</span>
                            </div>
                            <div id="card-carousel-${valor.id}" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#card-carousel-${valor.id}" data-slide-to="0" class="active"></li>
                                    <li data-target="#card-carousel-${valor.id}" data-slide-to="1"></li>
                                    <li data-target="#card-carousel-${valor.id}" data-slide-to="2"></li>
                                    <li data-target="#card-carousel-${valor.id}" data-slide-to="3"></li>
                                </ol>
                                <div class="carousel-item active">
                                    <img src="assets/img/articulos/${valor.img1}" class="d-block w-100" alt="..." style="min-height:230px; max-height:230px">
                                </div>
                                <div class="carousel-item">
                                    <img src="assets/img/articulos/${valor.img2}" class="d-block w-100" alt="..." style="min-height:230px; max-height:230px">
                                </div>
                                <div class="carousel-item">
                                    <img src="assets/img/articulos/${valor.img3}" class="d-block w-100" alt="..." style="min-height:230px; max-height:230px">
                                </div>
                                <div class="carousel-item">
                                    <img src="assets/img/articulos/${valor.img4}" class="d-block w-100" alt="..." style="min-height:230px; max-height:230px">
                                </div>
                            </div>
                            <div class="card-body text-center">
                                <h6 class="card-title text-muted">${valor.articulo}</h6>
                                <p class="text-muted m-0"><i class="icofont-badge"></i>${valor.categorias[0].categoria}</p>
                                <i class="icofont-star text-warning"></i>
                                <i class="icofont-star text-warning"></i>
                                <i class="icofont-star text-warning"></i>
                                <i class="icofont-star text-warning"></i>
                                <i class="icofont-star text-warning"></i>
                                <p class="card-text text-muted">${precio} MXN/${valor.periodos.tipo}</p>
                            </div>
                            <div class="border p-1 text-center bg-info text-white">
                                <i class="icofont-car p-2 pt-4"></i><small>${valor.distancia}</small> <i class="icofont-clock-time p-2 pt-4"></i><small>${valor.duracion}</small>
                            </div>
                        </div>
                    </a>
                </div>
                `
            });
            $('#populares').html(card);
        }
    })
}
function ofertasArticulos(){
    $.ajax({
        'type': 'GET',
        'url': 'getArticulos',
        beforeSend: function(){
            $('#ofertas').html('<div class="col-12 d-flex justify-content-center mt-5"><div class="lds-ripple"><div></div><div></div></div></div>')
        },
        success: function(response){
            var data = JSON.parse(response);
            var card = '';
            $.each(data, function(index, valor){
                var precio = Intl.NumberFormat('es-MX',{style:'currency',currency:'MXN'}).format(valor.precio);
                if(typeof(valor.distancia) == 'undefined'){
                    valor.distancia = '';
                    valor.duracion = '';
                }

                card += `
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <a href="item-details/${valor.clave}"  class="text-decoration-none">
                        <div class="card shadow-sm mb-3">
                            <div class="card-header d-flex justify-content-end">
                                <span class="badge badge-primary">Descuento 10%</span>
                            </div>
                            <div id="card-carousel-${valor.id}" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#card-carousel-${valor.id}" data-slide-to="0" class="active"></li>
                                    <li data-target="#card-carousel-${valor.id}" data-slide-to="1"></li>
                                    <li data-target="#card-carousel-${valor.id}" data-slide-to="2"></li>
                                    <li data-target="#card-carousel-${valor.id}" data-slide-to="3"></li>
                                </ol>
                                <div class="carousel-item active">
                                    <img src="assets/img/articulos/${valor.img1}" class="d-block w-100" alt="..." style="min-height:230px; max-height:230px">
                                </div>
                                <div class="carousel-item">
                                    <img src="assets/img/articulos/${valor.img2}" class="d-block w-100" alt="..." style="min-height:230px; max-height:230px">
                                </div>
                                <div class="carousel-item">
                                    <img src="assets/img/articulos/${valor.img3}" class="d-block w-100" alt="..." style="min-height:230px; max-height:230px">
                                </div>
                                <div class="carousel-item">
                                    <img src="assets/img/articulos/${valor.img4}" class="d-block w-100" alt="..." style="min-height:230px; max-height:230px">
                                </div>
                            </div>
                            <div class="card-body text-center">
                                <h6 class="card-title text-muted">${valor.articulo}</h6>
                                <p class="text-muted m-0"><i class="icofont-badge"></i>${valor.categorias[0].categoria}</p>
                                <i class="icofont-star text-warning"></i>
                                <i class="icofont-star text-warning"></i>
                                <i class="icofont-star text-warning"></i>
                                <i class="icofont-star text-warning"></i>
                                <i class="icofont-star text-warning"></i>
                                <p class="card-text text-muted">${precio} MXN/${valor.periodos.tipo}</p>
                            </div>
                            <div class="border p-1 text-center bg-info text-white">
                                <i class="icofont-car p-2 pt-4"></i><small>${valor.distancia}</small> <i class="icofont-clock-time p-2 pt-4"></i><small>${valor.duracion}</small>
                            </div>
                        </div>
                    </a>
                </div>
                `
            });
            $('#ofertas').html(card);
        }
    })
}
function getItemByCategory(categoria){
    $.ajax({
        'type': 'GET',
        'url': 'itemByCategory/'+categoria,
        beforeSend: function(){
            $('#populares').html('<div class="col-12 d-flex justify-content-center mt-5"><div class="lds-ripple"><div></div><div></div></div></div>')
        },
        success: function(response){
            var data = JSON.parse(response);
            var card = '';
            var marcas = '';
            var clase = '';
            const removeAccents = (str) => {//constante para elimnar acentos
                return str.normalize("NFD").replace(/[\u0300-\u036f]/g, "");
            } 
            $.each(data.marcas, function(index, valor){
                marcas += `
                <div class="col-md-1 mb-3">
                    <a href="/categoria/${categoria}/marca/${valor.marca}" class="card p-3 card-brand border ${clase} w-100" data-toggle="tooltip" data-placement="bottom" title="${valor.marca}">
                        <center><img src="../assets/img/marcas/${valor.img}" alt="" width="40" height="40"></center>
                    </a>
                </div>`;
            });
            $.each(data.articulos, function(index, valor){
                var precio = Intl.NumberFormat('es-MX',{style:'currency',currency:'MXN'}).format(valor.precio);
                if(typeof(valor.distancia) == 'undefined'){
                    valor.distancia = '';
                    valor.duracion = '';
                }
                card += `
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <a href="/item-details/${valor.clave}"  class="text-decoration-none">
                        <div class="card shadow-sm mb-3">
                            <div class="card-header d-flex justify-content-end">
                                <span class="badge badge-primary">Mas popular</span>
                            </div>
                            <div id="card-carousel-${valor.id}" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#card-carousel-${valor.id}" data-slide-to="0" class="active"></li>
                                    <li data-target="#card-carousel-${valor.id}" data-slide-to="1"></li>
                                    <li data-target="#card-carousel-${valor.id}" data-slide-to="2"></li>
                                    <li data-target="#card-carousel-${valor.id}" data-slide-to="3"></li>
                                </ol>
                                <div class="carousel-item active">
                                    <img src="../assets/img/articulos/${valor.img1}" class="d-block w-100" alt="..." style="min-height:230px; max-height:230px">
                                </div>
                                <div class="carousel-item">
                                    <img src="../assets/img/articulos/${valor.img2}" class="d-block w-100" alt="..." style="min-height:230px; max-height:230px">
                                </div>
                                <div class="carousel-item">
                                    <img src="../assets/img/articulos/${valor.img3}" class="d-block w-100" alt="..." style="min-height:230px; max-height:230px">
                                </div>
                                <div class="carousel-item">
                                    <img src="../assets/img/articulos/${valor.img4}" class="d-block w-100" alt="..." style="min-height:230px; max-height:230px">
                                </div>
                            </div>
                            <div class="card-body text-center">
                                <h6 class="card-title text-muted">${valor.articulo}</h6>
                                <p class="text-muted m-0"><i class="icofont-badge"></i>${valor.categoria}</p>
                                <i class="icofont-star text-warning"></i>
                                <i class="icofont-star text-warning"></i>
                                <i class="icofont-star text-warning"></i>
                                <i class="icofont-star text-warning"></i>
                                <i class="icofont-star text-warning"></i>
                                <p class="card-text text-muted">${precio} MXN/${valor.periodos.tipo}</p>
                            </div>
                            <div class="border p-1 text-center bg-info text-white">
                                <i class="icofont-car p-2 pt-4"></i><small>${valor.distancia}</small> <i class="icofont-clock-time p-2 pt-4"></i><small>${valor.duracion}</small>
                            </div>
                        </div>
                    </a>
                </div>`;
            });
            $('#list-marcas').html(marcas);
            $('#populares').html(card);
        }
    })
}
function getItemByCategoryAndBrand(categoria, marca){
    $.ajax({
        'type': 'GET',
        'url': '/itemByCategory/'+categoria+'/marca/'+marca,
        beforeSend: function(){
            $('#populares').html('<div class="col-12 d-flex justify-content-center mt-5"><div class="lds-ripple"><div></div><div></div></div></div>')
        },
        success: function(response){
            var data = JSON.parse(response);
            var card = '';
            var marcas = '';
            var clase = '';
            const removeAccents = (str) => {//constante para elimnar acentos
                return str.normalize("NFD").replace(/[\u0300-\u036f]/g, "");
            } 
            $.each(data.marcas, function(index, valor){
                if(marca == valor.marca){
                    clase = 'card-brand-active';
                }else{
                    clase = '';
                }
                marcas += `
                <div class="col-md-1 mb-3">
                    <a href="/categoria/${categoria}/marca/${valor.marca}" class="card card-brand p-3 border ${clase} w-100" data-toggle="tooltip" data-placement="bottom" title="${valor.marca}">
                        <center><img src="/assets/img/marcas/${valor.img}" alt="" width="40" height="40"></center>
                    </a>
                </div>`;
            });
            $.each(data.articulos, function(index, valor){
                var precio = Intl.NumberFormat('es-MX',{style:'currency',currency:'MXN'}).format(valor.precio);
                if(typeof(valor.distancia) == 'undefined'){
                    valor.distancia = '';
                    valor.duracion = '';
                }
                card += `
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <a href="/item-details/${valor.clave}"  class="text-decoration-none">
                        <div class="card shadow-sm mb-3">
                            <div class="card-header d-flex justify-content-end">
                                <span class="badge badge-primary">Mas popular</span>
                            </div>
                            <div id="card-carousel-${valor.id}" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#card-carousel-${valor.id}" data-slide-to="0" class="active"></li>
                                    <li data-target="#card-carousel-${valor.id}" data-slide-to="1"></li>
                                    <li data-target="#card-carousel-${valor.id}" data-slide-to="2"></li>
                                    <li data-target="#card-carousel-${valor.id}" data-slide-to="3"></li>
                                </ol>
                                <div class="carousel-item active">
                                    <img src="/assets/img/articulos/${valor.img1}" class="d-block w-100" alt="..." style="min-height:230px; max-height:230px">
                                </div>
                                <div class="carousel-item">
                                    <img src="/assets/img/articulos/${valor.img2}" class="d-block w-100" alt="..." style="min-height:230px; max-height:230px">
                                </div>
                                <div class="carousel-item">
                                    <img src="/assets/img/articulos/${valor.img3}" class="d-block w-100" alt="..." style="min-height:230px; max-height:230px">
                                </div>
                                <div class="carousel-item">
                                    <img src="/assets/img/articulos/${valor.img4}" class="d-block w-100" alt="..." style="min-height:230px; max-height:230px">
                                </div>
                            </div>
                            <div class="card-body text-center">
                                <h6 class="card-title text-muted">${valor.articulo}</h6>
                                <p class="text-muted m-0"><i class="icofont-badge"></i>${valor.categoria}</p>
                                <i class="icofont-star text-warning"></i>
                                <i class="icofont-star text-warning"></i>
                                <i class="icofont-star text-warning"></i>
                                <i class="icofont-star text-warning"></i>
                                <i class="icofont-star text-warning"></i>
                                <p class="card-text text-muted">${precio} MXN/${valor.periodos.tipo}</p>
                            </div>
                            <div class="border p-1 text-center bg-info text-white">
                                <i class="icofont-car p-2 pt-4"></i><small>${valor.distancia}</small> <i class="icofont-clock-time p-2 pt-4"></i><small>${valor.duracion}</small>
                            </div>
                        </div>
                    </a>
                </div>`;
            });
            $('#list-marcas').html(marcas);
            $('#articulos').html(card);
        }
    })
}
function searchArticle(articulo, marca){
    $.ajax({
        'type': 'GET',
        'url': '/searchArticle/'+articulo+'/'+marca,
        beforeSend: function(){

        },
        success: function(response){
            var data = JSON.parse(response);
            var card = '';
            var marcas = '';
            var clase = '';
            const removeAccents = (str) => {//constante para elimnar acentos
                return str.normalize("NFD").replace(/[\u0300-\u036f]/g, "");
            } 
            $.each(data.marcas, function(index, valor){
                if(marca != 0){
                    if(marca.toLowerCase() == removeAccents(valor.marca.toLowerCase())){
                        clase = 'bg-primary';
                    }else{
                        clase = '';
                    }
                }
                marcas += `
                <div class="col-md-1 mb-3">
                    <button class="btn card py-3 marca border-0 ${clase}" onclick="/getItemByCategory('', '${valor.marca}')" data-toggle="tooltip" data-placement="bottom" title="${valor.marca}">
                        <center><img src="../assets/img/marcas/${valor.img}" alt="" width="60" height="50"></center>
                    </button>
                </div>`;
            });
            $.each(data.articulos, function(index, valor){
                var precio = Intl.NumberFormat('es-MX',{style:'currency',currency:'MXN'}).format(valor.precio);
                if(typeof(valor.distancia) == 'undefined'){
                    valor.distancia = '';
                    valor.duracion = '';
                }
                card += `
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <a href="/item-details/${valor.clave}"  class="text-decoration-none">
                        <div class="card shadow-sm mb-3">
                            <div class="card-header d-flex justify-content-end">
                                <span class="badge badge-primary">Mas popular</span>
                            </div>
                            <div id="card-carousel-${valor.id}" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                    <li data-target="#card-carousel-${valor.id}" data-slide-to="0" class="active"></li>
                                    <li data-target="#card-carousel-${valor.id}" data-slide-to="1"></li>
                                    <li data-target="#card-carousel-${valor.id}" data-slide-to="2"></li>
                                    <li data-target="#card-carousel-${valor.id}" data-slide-to="3"></li>
                                </ol>
                                <div class="carousel-item active">
                                    <img src="../assets/img/articulos/${valor.img1}" class="d-block w-100" alt="..." style="min-height:230px; max-height:230px">
                                </div>
                                <div class="carousel-item">
                                    <img src="../assets/img/articulos/${valor.img2}" class="d-block w-100" alt="..." style="min-height:230px; max-height:230px">
                                </div>
                                <div class="carousel-item">
                                    <img src="../assets/img/articulos/${valor.img3}" class="d-block w-100" alt="..." style="min-height:230px; max-height:230px">
                                </div>
                                <div class="carousel-item">
                                    <img src="../assets/img/articulos/${valor.img4}" class="d-block w-100" alt="..." style="min-height:230px; max-height:230px">
                                </div>
                            </div>
                            <div class="card-body text-center">
                                <h6 class="card-title text-muted">${valor.articulo}</h6>
                                <p class="text-muted m-0"><i class="icofont-badge"></i>${valor.categorias[0].categoria}</p>
                                <i class="icofont-star text-warning"></i>
                                <i class="icofont-star text-warning"></i>
                                <i class="icofont-star text-warning"></i>
                                <i class="icofont-star text-warning"></i>
                                <i class="icofont-star text-warning"></i>
                                <p class="card-text text-muted">${precio} MXN/${valor.periodos.tipo}</p>
                            </div>
                            <div class="border p-1 text-center bg-info text-white">
                                <i class="icofont-car p-2 pt-4"></i><small>${valor.distancia}</small> <i class="icofont-clock-time p-2 pt-4"></i><small>${valor.duracion}</small>
                            </div>
                        </div>
                    </a>
                </div>`;
            });
            $('#list-marcas').html(marcas);
            $('#coincidencias').html(card);
        }
    })
}
function itemDetails(clave){
    $.ajax({
        'type': 'GET',
        'url': '/itemDetails/'+clave,
        beforeSend: function(){
            $('#detalles').html('<div class="col-12 d-flex justify-content-center mt-5"><div class="lds-ripple"><div></div><div></div></div></div>')
        },
        success: function(response){
            var data = JSON.parse(response);
            $('#migaja-cat small').html(data.articulo[0].categorias[0].categoria);
            $('#migaja-cat').prop('href', '/categoria/'+data.articulo[0].categorias[0].categoria);
            $('#migaja-marca small').html(data.articulo[0].marcas.marca);
            $('#migaja-marca').prop('href', '/categoria/'+data.articulo[0].categorias[0].categoria +'/marca/'+data.articulo[0].marcas.marca);
            $('#migaja-articulo').html(data.articulo[0].articulo);
            $('#img1 img').prop('src', '../assets/img/articulos/'+data.articulo[0].img1);
            $('#img2 img').prop('src', '../assets/img/articulos/'+data.articulo[0].img2);
            $('#img3 img').prop('src', '../assets/img/articulos/'+data.articulo[0].img3);
            $('#img4 img').prop('src', '../assets/img/articulos/'+data.articulo[0].img4);
            $('#tab-img1 img').prop('src', '../assets/img/articulos/'+data.articulo[0].img1);
            $('#tab-img2 img').prop('src', '../assets/img/articulos/'+data.articulo[0].img2);
            $('#tab-img3 img').prop('src', '../assets/img/articulos/'+data.articulo[0].img3);
            $('#tab-img4 img').prop('src', '../assets/img/articulos/'+data.articulo[0].img4);
            $('#estado-articulo').html(data.articulo[0].estado)
            $('#nom-articulo').html(data.articulo[0].articulo)
            var precio = Intl.NumberFormat('es-MX',{style:'currency',currency:'MXN'}).format(data.articulo[0].precio);
            $('#precio').html(precio+' MXN/'+data.articulo[0].periodos.tipo);
            $('#marca').html(data.articulo[0].marcas.marca);
            var cat = '';
            $.each(data.articulo[0].categorias, function(index, valor){
                cat += `<li>${valor.categoria}</li>`;
            });
            $('#categorias').html(cat);
            var rentador = data.articulo[0].users.nombre.split(' ');
            $('#rentador').html(rentador[0]);
            var caracteristicas = '';
            $.each(data.articulo[0].caracteristicas, function(index, valor){
                caracteristicas += `<li>${valor.desc}</li>`;
            });
            $('#caracteristicas').html(caracteristicas);
            $('#desc').html(data.articulo[0].desc);
            //calcular calificación del rentador
            let total_opiniones_rent = data.opiniones.length;
            var total_cali_rent = 0
            $.each(data.opiniones, function(index, valor){
                total_cali_rent = valor.cali + total_cali_rent;
            });
            var cali_rent = (total_cali_rent/total_opiniones_rent)/2;
            let porcen_rent = (cali_rent * 100) / total_opiniones_rent;
            if(cali_rent > 3){
                $('#reputacion').addClass('text-success');
                $('#reputacion small').html('Rentador de buna reputación');
                $('#rent-atencion-icon').addClass('badge-success');
                $('#rent-atencion').html('Brinda buena atención');
                $('#rent-tiempo-icon').addClass('badge-success');
                $('#rent-tiempo').html('Entrega el articulo a tiempo');
                $('#rent-atencion-icon i').addClass('icofont-check');
                $('#rent-tiempo-icon i').addClass('icofont-check');
                $('#progress-rent').addClass('bg-success');
            }else if(cali_rent > 2){
                $('#reputacion').addClass('text-warning');
                $('#reputacion small').html('Rentador de media reputación');
                $('#rent-atencion-icon').addClass('badge-warning');
                $('#rent-atencion').html('Brinda media atención');
                $('#rent-tiempo-icon').addClass('badge-warning');
                $('#rent-tiempo').html('Entrega el articulo un poco tarde');
                $('#rent-atencion-icon i').addClass('icofont-warning-alt');
                $('#rent-tiempo-icon i').addClass('icofont-warning-alt');
                $('#progress-rent').addClass('bg-warning');
            }else{
                $('#reputacion').addClass('text-danger');
                $('#reputacion small').html('Rentador de media baja');
                $('#rent-atencion-icon').addClass('badge-danger');
                $('#rent-atencion').html('Brinda poca atención');
                $('#rent-tiempo-icon').addClass('badge-success');
                $('#rent-tiempo').html('Entrega el articulo muy tarde');
                $('#rent-atencion-icon i').addClass('icofont-error');
                $('#rent-tiempo-icon i').addClass('icofont-error');
                $('#progress-rent').addClass('bg-danger');
            }
            $('#progress-rent').attr('aria-valuenow', porcen_rent.toFixed(1));
            $('#progress-rent').attr('style', 'width: '+porcen_rent.toFixed(1)+'%;');
            $('#progress-rent').html(porcen_rent.toFixed(1)+'%');
            //debugger
            //calculo de opiniones
            $('#title-articulo').html('Opiniones sobre '+data.articulo[0].articulo);
            $('#title-articulo2').html('Opiniones sobre '+data.articulo[0].articulo);
            let total_opiniones = data.articulo[0].opiones_artc.length;
            let total_cali = 0;
            let cinco = 0;
            let cuatro = 0;
            let tres = 0;
            let dos = 0;
            let uno = 0;
            $.each(data.articulo[0].opiones_artc, function(index, valor){
                switch(valor.califi){
                    case 10:
                        cinco++;
                        break
                    case 8:
                        cuatro++;
                        break
                    case 6:
                        tres++;
                        break
                    case 4:
                        dos++;
                        break
                    case 2:
                        uno++;
                        break                        
                }
                total_cali = valor.califi + total_cali;
            });
            let porcen_cinco = (cinco * 100) / total_opiniones;
            let porcen_cuatro = (cuatro * 100) / total_opiniones;
            let porcen_tres = (tres * 100) / total_opiniones;
            let porcen_dos = (dos * 100) / total_opiniones;
            let porcen_uno = (uno * 100) / total_opiniones;
            let cali_final = (total_cali/total_opiniones)/2;
            //asignar estrellas
            var options = {
                max_value: 5,
                step_size: 0.5,
                initial_value: cali_final.toFixed(1),
                readonly: true,
            }
            $(".rate").rate(options);
            $('#calificacion').html(cali_final.toFixed(1));
            $('#calificacion2').html(cali_final.toFixed(1));
            $('#total_opiniones2').html(total_opiniones);
            $('#total_opiniones3').html(total_opiniones);
            $('#total_opiniones').html('('+total_opiniones+')');
            $('#progress-cinco').attr('aria-valuenow', porcen_cinco.toFixed(1));
            $('#progress-cinco').attr('style', 'width: '+porcen_cinco.toFixed(1)+'%;');
            $('#progress-cinco').html(porcen_cinco.toFixed(1)+'%');
            $('#progress-cinco2').attr('aria-valuenow', porcen_cinco.toFixed(1));
            $('#progress-cinco2').attr('style', 'width: '+porcen_cinco.toFixed(1)+'%;');
            $('#progress-cinco2').html(porcen_cinco.toFixed(1)+'%');
            $('#progress-cuatro').attr('aria-valuenow', porcen_cuatro.toFixed(1));
            $('#progress-cuatro').attr('style', 'width: '+porcen_cuatro.toFixed(1)+'%;');
            $('#progress-cuatro').html(porcen_cuatro.toFixed(1)+'%');
            $('#progress-cuatro2').attr('aria-valuenow', porcen_cuatro.toFixed(1));
            $('#progress-cuatro2').attr('style', 'width: '+porcen_cuatro.toFixed(1)+'%;');
            $('#progress-cuatro2').html(porcen_cuatro.toFixed(1)+'%');
            $('#progress-tres').attr('aria-valuenow', porcen_tres.toFixed(1));
            $('#progress-tres').attr('style', 'width: '+porcen_tres.toFixed(1)+'%;');
            $('#progress-tres').html(porcen_tres.toFixed(1)+'%');
            $('#progress-tres2').attr('aria-valuenow', porcen_tres.toFixed(1));
            $('#progress-tres2').attr('style', 'width: '+porcen_tres.toFixed(1)+'%;');
            $('#progress-tres2').html(porcen_tres.toFixed(1)+'%');
            $('#progress-dos').attr('aria-valuenow', porcen_dos.toFixed(1));
            $('#progress-dos').attr('style', 'width: '+porcen_dos.toFixed(1)+'%;');
            $('#progress-dos').html(porcen_dos.toFixed(1)+'%');
            $('#progress-dos2').attr('aria-valuenow', porcen_dos.toFixed(1));
            $('#progress-dos2').attr('style', 'width: '+porcen_dos.toFixed(1)+'%;');
            $('#progress-dos2').html(porcen_dos.toFixed(1)+'%');
            $('#progress-uno').attr('aria-valuenow', porcen_uno.toFixed(1));
            $('#progress-uno').attr('style', 'width: '+porcen_uno.toFixed(1)+'%;');
            $('#progress-uno').html(porcen_uno.toFixed(1)+'%');
            $('#progress-uno2').attr('aria-valuenow', porcen_uno.toFixed(1));
            $('#progress-uno2').attr('style', 'width: '+porcen_uno.toFixed(1)+'%;');
            $('#progress-uno2').html(porcen_uno.toFixed(1)+'%');

            $('#cinco').html(cinco);
            $('#cinco2').html(cinco);
            $('#cuatro').html(cuatro);
            $('#cuatro2').html(cuatro);
            $('#tres').html(tres);
            $('#tres2').html(tres);
            $('#dos').html(dos);
            $('#dos2').html(dos);
            $('#uno').html(uno);
            $('#uno2').html(uno);
            //insertar opiniones
            var opiniones = '';
            var contador = 0;
            $.each(data.articulo[0].opiones_artc, function(index, valor){
                if(contador == 5){
                    return true;
                }
                var estrellas_opinion = '';
                if(valor.califi/2 == 5){
                    estrellas_opinion = `<i class="icofont-star text-warning"></i>
                                        <i class="icofont-star text-warning"></i>
                                        <i class="icofont-star text-warning"></i>
                                        <i class="icofont-star text-warning"></i>
                                        <i class="icofont-star text-warning"></i>`;
                }else if(valor.califi/2 == 4){
                    estrellas_opinion = `<i class="icofont-star text-warning"></i>
                                        <i class="icofont-star text-warning"></i>
                                        <i class="icofont-star text-warning"></i>
                                        <i class="icofont-star text-warning"></i>
                                        <i class="icofont-star text-muted"></i>`;
                }else if(valor.califi/2 == 3){
                    estrellas_opinion = `<i class="icofont-star text-warning"></i>
                                        <i class="icofont-star text-warning"></i>
                                        <i class="icofont-star text-warning"></i>
                                        <i class="icofont-star text-muted"></i>
                                        <i class="icofont-star text-muted"></i>`;
                }else if(valor.califi/2 == 2){
                    estrellas_opinion = `<i class="icofont-star text-warning"></i>
                                        <i class="icofont-star text-warning"></i>
                                        <i class="icofont-star text-muted"></i>
                                        <i class="icofont-star text-muted"></i>
                                        <i class="icofont-star text-muted"></i>`;
                }else{
                    estrellas_opinion = `<i class="icofont-star text-warning"></i>
                                        <i class="icofont-star text-muted"></i>
                                        <i class="icofont-star text-muted"></i>
                                        <i class="icofont-star text-muted"></i>
                                        <i class="icofont-star text-muted"></i>`;
                }
                opiniones += `
                                <div class="card border mb-3">
                                    <div class="card-header pb-0 pt-2">
                                        ${estrellas_opinion}
                                    </div>
                                    <div class="card-body pt-1">
                                        <b class="card-title">Special title treatment</b>
                                        <p class="card-text">${valor.opinion}</p>
                                    </div>
                                    <div class="card-footer text-muted pt-0">
                                        <small>${valor.f_opinion}</small>
                                    </div>
                                </div>`;
                contador++;
            });
            $('#pills-todas').html(opiniones);
            $('#detalles').addClass('d-none');
            $('#articles-detail').removeClass('d-none');
        }
    })
}
function getOpiniones(tipo, status){
    let urlComplete = window.location;
    let url = urlComplete.href.split('/');
    let clave = url[4];
    $.ajax({
        'type': 'GET',
        'url': '/getOpiniones/'+clave+'/'+tipo+'/'+status,
        beforeSend: function(){
            if(tipo == 'positivo'){
                $('#pills-positivas').html('<div class="col-12 d-flex justify-content-center mt-5"><div class="lds-ripple"><div></div><div></div></div></div>');
                $('#pills-positivas2').html('<div class="col-12 d-flex justify-content-center mt-5"><div class="lds-ripple"><div></div><div></div></div></div>');
            }else if(tipo == 'negativo'){
                $('#pills-negativas').html('<div class="col-12 d-flex justify-content-center mt-5"><div class="lds-ripple"><div></div><div></div></div></div>');
                $('#pills-negativas2').html('<div class="col-12 d-flex justify-content-center mt-5"><div class="lds-ripple"><div></div><div></div></div></div>');
            }else{
                $('#pills-todas2').html('<div class="col-12 d-flex justify-content-center mt-5"><div class="lds-ripple"><div></div><div></div></div></div>');
            }
        },
        success: function(response){
            var data = JSON.parse(response);
            var opiniones = '';
            $.each(data, function(index, valor){
                var estrellas_opinion = '';
                if(valor.califi/2 == 5){
                    estrellas_opinion = `<i class="icofont-star text-warning"></i>
                                        <i class="icofont-star text-warning"></i>
                                        <i class="icofont-star text-warning"></i>
                                        <i class="icofont-star text-warning"></i>
                                        <i class="icofont-star text-warning"></i>`;
                }else if(valor.califi/2 == 4){
                    estrellas_opinion = `<i class="icofont-star text-warning"></i>
                                        <i class="icofont-star text-warning"></i>
                                        <i class="icofont-star text-warning"></i>
                                        <i class="icofont-star text-warning"></i>
                                        <i class="icofont-star text-muted"></i>`;
                }else if(valor.califi/2 == 3){
                    estrellas_opinion = `<i class="icofont-star text-warning"></i>
                                        <i class="icofont-star text-warning"></i>
                                        <i class="icofont-star text-warning"></i>
                                        <i class="icofont-star text-muted"></i>
                                        <i class="icofont-star text-muted"></i>`;
                }else if(valor.califi/2 == 2){
                    estrellas_opinion = `<i class="icofont-star text-warning"></i>
                                        <i class="icofont-star text-warning"></i>
                                        <i class="icofont-star text-muted"></i>
                                        <i class="icofont-star text-muted"></i>
                                        <i class="icofont-star text-muted"></i>`;
                }else{
                    estrellas_opinion = `<i class="icofont-star text-warning"></i>
                                        <i class="icofont-star text-muted"></i>
                                        <i class="icofont-star text-muted"></i>
                                        <i class="icofont-star text-muted"></i>
                                        <i class="icofont-star text-muted"></i>`;
                }
                opiniones += `
                                <div class="card border mb-3">
                                    <div class="card-header pb-0 pt-2">
                                        ${estrellas_opinion}
                                    </div>
                                    <div class="card-body pt-1">
                                        <b class="card-title">Special title treatment</b>
                                        <p class="card-text">${valor.opinion}</p>
                                    </div>
                                    <div class="card-footer text-muted pt-0">
                                        <small>${valor.f_opinion}</small>
                                    </div>
                                </div>`;
            });
            if(status == 5){
                if(tipo == 'positivo'){
                    $('#pills-positivas').html(opiniones);
                }else{
                    $('#pills-negativas').html(opiniones);
                }
            }else if(status == 0){
                if(tipo == 'positivo'){
                    $('#pills-positivas2').html(opiniones);
                }else{
                    $('#pills-negativas2').html(opiniones);
                }
            }else{
                $('#pills-todas2').html(opiniones);
            }
            
        }
    })
}
function loadOpiniones(tipo, status){
    let urlComplete = window.location;
    let url = urlComplete.href.split('/');
    let clave = url[4];
    getOpiniones('todas', 'x');
    $('#modal-opiniones').modal('show');
}
$('#form-search').submit(function(e){
    e.preventDefault();
    let busqueda = $('#buscar').val();
    window.location.href='/search/'+busqueda;
})