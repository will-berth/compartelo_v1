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
                        <div class="card shadow mb-3 border">
                            <img src="assets/img/articulos/${valor.img1}" class="d-block w-100" alt="..." style="min-height:230px; max-height:230px">
                            <div class="card-body  ">
                                <h6 class="card-title texto-negro">${valor.articulo}</h6>
                                <p class="text-danger m-0"><i class="icofont-badge"></i>${capitalize(valor.marcas.marca)}</p>
                                <i class="icofont-star text-warning"></i>
                                <i class="icofont-star text-warning"></i>
                                <i class="icofont-star text-warning"></i>
                                <i class="icofont-star text-warning"></i>
                                <i class="icofont-star text-warning"></i>
                                <p class="card-text text-muted"><span class="badge badge-primary">${precio} MXN/${valor.periodos.tipo}</span></p>
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
                        <div class="card shadow mb-3 border">
                            <img src="/assets/img/articulos/${valor.img1}" class="d-block w-100" alt="..." style="min-height:230px; max-height:230px">
                            <div class="card-body  ">
                                <h6 class="card-title texto-negro">${valor.articulo}</h6>
                                <p class="text-danger m-0"><i class="icofont-badge"></i>${capitalize(valor.marcas.marca)}</p>
                                <i class="icofont-star text-warning"></i>
                                <i class="icofont-star text-warning"></i>
                                <i class="icofont-star text-warning"></i>
                                <i class="icofont-star text-warning"></i>
                                <i class="icofont-star text-warning"></i>
                                <p class="card-text text-muted"><span class="badge badge-primary">${precio} MXN/${valor.periodos.tipo}</span></p>
                            </div>
                            <div class="border p-1 text-center bg-info text-white">
                                <i class="icofont-car p-2 pt-4"></i><small>${valor.distancia}</small> <i class="icofont-clock-time p-2 pt-4"></i><small>${valor.duracion}</small>
                            </div>
                        </div>
                    </a>
                </div>
                `;
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
                    <a href="item-details/${valor.clave}"  class="text-decoration-none">
                        <div class="card shadow mb-3 border">
                            <img src="/assets/img/articulos/${valor.img1}" class="d-block w-100" alt="..." style="min-height:230px; max-height:230px">
                            <div class="card-body  ">
                                <h6 class="card-title texto-negro">${valor.articulo}</h6>
                                <p class="text-danger m-0"><i class="icofont-badge"></i>${capitalize(valor.marcas.marca)}</p>
                                <i class="icofont-star text-warning"></i>
                                <i class="icofont-star text-warning"></i>
                                <i class="icofont-star text-warning"></i>
                                <i class="icofont-star text-warning"></i>
                                <i class="icofont-star text-warning"></i>
                                <p class="card-text text-muted"><span class="badge badge-primary">${precio} MXN/${valor.periodos.tipo}</span></p>
                            </div>
                            <div class="border p-1 text-center bg-info text-white">
                                <i class="icofont-car p-2 pt-4"></i><small>${valor.distancia}</small> <i class="icofont-clock-time p-2 pt-4"></i><small>${valor.duracion}</small>
                            </div>
                        </div>
                    </a>
                </div>
                `;
            });
            $('#list-marcas').html(marcas);
            $('#articulos').html(card);
        }
    })
}
function searchArticle(filtros, numBusqueda){
    $.ajax({
        'type': 'GET',
        'url': '/searchArticle/'+filtros,
        beforeSend: function(){

        },
        success: function(response){
            filtros
            var data = JSON.parse(response);
            var textoFiltro = filtros.split('=');
            var textoBuscado = textoFiltro[1].split('&');
            $('#texto-buscado').html('Busqueda de: '+textoBuscado[0]);
            $('#total-busquedas').html(data.articulos.length+' resultados');
            var card = '';
            var cat = '';
            var marca = '';
            $.each(data.articulos, function(index, valor){
                var precio = Intl.NumberFormat('es-MX',{style:'currency',currency:'MXN'}).format(valor.precio);
                if(typeof(valor.distancia) == 'undefined'){
                    valor.distancia = '';
                    valor.duracion = '';
                }
                card += `
                <div class="col-sm-6 col-md-4 col-lg-4">
                    <a href="item-details/${valor.clave}"  class="text-decoration-none">
                        <div class="card shadow mb-3 border">
                            <img src="assets/img/articulos/${valor.img1}" class="d-block w-100" alt="..." style="min-height:230px; max-height:230px">
                            <div class="card-body  ">
                                <h6 class="card-title texto-negro">${valor.articulo}</h6>
                                <p class="text-danger m-0"><i class="icofont-badge"></i>${capitalize(valor.marcas.marca)}</p>
                                <i class="icofont-star text-warning"></i>
                                <i class="icofont-star text-warning"></i>
                                <i class="icofont-star text-warning"></i>
                                <i class="icofont-star text-warning"></i>
                                <i class="icofont-star text-warning"></i>
                                <p class="card-text text-muted"><span class="badge badge-primary">${precio} MXN/${valor.periodos.tipo}</span></p>
                            </div>
                            <div class="border p-1 text-center bg-info text-white">
                                <i class="icofont-car p-2 pt-4"></i><small>${valor.distancia}</small> <i class="icofont-clock-time p-2 pt-4"></i><small>${valor.duracion}</small>
                            </div>
                        </div>
                    </a>
                </div>
                `;
            });
            if(numBusqueda == 0){
                $.each(data.categorias, function(index, valor){
                    cat += `<div class="form-check">
                                <input class="form-check-input" type="radio" name="categoria" id="${valor.clave}" value="${valor.categoria_id}">
                                <label class="form-check-label" for="${valor.clave}">
                                <small>${capitalize(valor.categoria)}</small>
                                </label>
                            </div>`;
                });
                $.each(data.marcas, function(index, valor){
                    marca += `<div class="form-check">
                                <input class="form-check-input" type="radio" name="marca" id="marca-${valor.id}" value="${valor.id}">
                                <label class="form-check-label" for="marca-${valor.id}">
                                <small>${capitalize(valor.marca)}</small>
                                </label>
                            </div>`;
                });
                $('#filters-cat').html(cat);
                $('#filters-marcas').html(marca);
            }
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
            $('#estado-articulo').html(data.articulo[0].estado);
            $('#nom-articulo').html(data.articulo[0].articulo);
            $('#recomendado').html('en '+data.articulo[0].articulo+' para '+data.articulo[0].categorias[0].categoria);
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
            $('#btn-carrito').attr('onclick', `addCarito(${data.articulo[0].id})`);
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
$('#form-filters').submit(function(e){
    e.preventDefault();
    var data = $(this).serialize();
    let urlComplete = window.location;
    let url = urlComplete.href.split('/');
    let busqueda = url[3];
    let filtros = busqueda+'&'+data;
    searchArticle(filtros, 1);
})

function getMyArticles(){
    $.ajax({
        'type': 'get',
        'url': 'getMyArticles',
        beforeSend: function(){
            $('#table-mis-articulos tbody').html('<tr><td colspan="6"><div class="progress"><div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"><center><b class="h6">Cargando...</b></center></div></div></td></tr>');
        },
        success: function(response){
            var resp = JSON.parse(response);
            console.log(resp)
            var fila = '';
            $.each(resp, function(index, valor){
                let { id, created_at, articulo, precio, activo, tipo, desc, periodo_id, estado, marca} = valor;
                let created = "";
                created_at !== null ? created = created_at.split('T')[0]: created = "Sin fecha";
                fila += `<tr>
                <td>${articulo}</td>
                <td>${tipo}</td>
                <td>${precio}</td>
                <td>${created}</td>
                <td>
                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="testSwitch custom-control-input" id="${id}" ${activo ? 'checked': ''}>
                        <label class="custom-control-label" for="${id}"></label>
                    </div>
                </td>
                <td>
                <button onclick="showMyArticle('${valor.clave}', '${articulo}', '${desc}', ${precio}, '${marca}', '${tipo}', '${estado}', '${created}');" type="button" class="btn" data-toggle="modal" data-target="#exampleModal"><i class="icofont-eye-alt text-general icono-nav"></i></button>
                <button onclick="getMyArticleRow(${id}, '${desc}', ${periodo_id}, ${precio}, '${estado}');" type="button" class="btn" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="icofont-edit text-general icono-nav"></i></button>
                </td></tr>`;
            });
            $('#table-mis-articulos tbody').html(fila);
            updateActiveArticle()
        }
    })

}

function updateActiveArticle(){
    $('.testSwitch').on('change', function() {
        let id_articulo = $(this).attr('id');
        let status_articulo = $(this).is(':checked');
        let status = 0;
        if(status_articulo){
            status = 1
        }
        $.ajax({
            'type': 'PUT',
            'url': 'updateStatusArticle',
            'data': {id: id_articulo, activo: status},
            beforeSend: function(){
                // $('#btn-save').html('Enviando...');
            },
            success: function(response){
                var resp = JSON.parse(response);
                Swal.fire({
                    icon: resp.type,
                    title: resp.title,
                    text: resp.text
                });
                // getMyArticles()
            }
        })
    });
}

function getMyArticleRow(id, desc, periodo_id, precio, estado){
    $('#id_articulo').val(id)
    $('#precio').val(precio)
    $("#periodo").val(periodo_id);
    $("#desc").val(desc);
    $("#estado").val(estado);
}

function showMyArticle(clave, articulo, desc, precio, marca, periodo, estado, created_at){
    $('#view-articulo').text(articulo)
    $('#view-desc').text(desc)
    $('#view-precio').text(precio)
    $('#view-marca').text(marca)
    $('#view-periodo').text(periodo)
    $('#view-estado').text(estado)
    $('#view-created_at').text(created_at)
}

$('#form-edit-articulo').submit(function(e){
    e.preventDefault();
    var data = $(this).serialize();
    $.ajax({
        'type': 'PUT',
        'url': 'updateInfoMyArticle',
        'data': data,
        beforeSend: function(){
            $('#btn-edit-articulo').html('Enviando...');//Al momento de agregar un dato nos muestra el boton de enviando...
        },
        success: function(response){
            var resp = JSON.parse(response);
            Swal.fire({
                icon: resp.type,
                title: resp.title,
                text: resp.text
            });
            $('.bd-example-modal-lg').modal('toggle');
            closeModal('modal-edit-articulo', 'form-edit-articulo');//Para que cierre el modal y lo resetee 
            getMyArticles()
        }
    })
});
function initializeInputsFiles(){
    FilePond.registerPlugin(FilePondPluginImagePreview);
    FilePond.registerPlugin(FilePondPluginFileValidateType);
    let filepondConfig = {
        storeAsFile: true,
        acceptedFileTypes: ['image/*'],
        allowImagePreview: true,
        allowMultiple: false,
        maxFiles: 2,
    }
    $('#testimg').filepond(filepondConfig);
    $('#img1').filepond(filepondConfig);
    $('#img2').filepond(filepondConfig);
    $('#img3').filepond(filepondConfig);
    $('#img4').filepond(filepondConfig);
    FilePond.setOptions(labels_es_ES)
}
//primera letra en mayuscula
function capitalize(word) {
    return word[0].toUpperCase() + word.slice(1);
}
function addCarito(id){
    $.ajax({
        'type': 'POST',
        'url': '/addCarrito',
        'data': {'articulo_id': id},
        beforeSend: function(){
           
        },
        success: function(response){
            var resp = JSON.parse(response);
            Toast.fire({
                icon: resp.type,
                title: resp.title,
                text: resp.text
            });
            if(resp.type == 'error'){
                window.location.href = '/noauth';
            }
        }

    })
}
function loadCarrito(){
    $.ajax({
        'type': 'GET',
        'url': '/loadCarrito',
        beforeSend: function(){
           
        },
        success: function(response){
            var resp = JSON.parse(response);
            var detalles = '';
            $.each(resp, function(index, valor){
                detalles += `<a class="dropdown-item d-flex align-items-center" href="/item-details/${valor.articulos.clave}">
                                <div class="mr-3">
                                    <div class="icon-circle bg-primary">
                                        <img src="../assets/img/articulos/${valor.articulos.img1}" class="rounded-circle" width="40" height="40">
                                    </div>
                                </div>
                                <div>
                                    <div class="small text-gray-500">${valor.articulos.articulo}</div>
                                    <span class="font-weight-bold">${valor.articulos.desc}</span>
                                </div>
                                
                            </a>
                            <div>
                                <a href="#" class="bg-danger p-1 dropdown-item text-center small text-white" onClick="deleteCarrito(${valor.id})">Eliminar</a>
                            </div>`;
            });
            $('#detalles-carrito').html(detalles);
        }

    })
}
function deleteCarrito(id){
    $.ajax({
        'type': 'POST',
        'url': '/deleteCarrito',
        'data': {'id': id},
        beforeSend: function(){
           
        },
        success: function(response){
            var resp = JSON.parse(response);
            Toast.fire({
                icon: resp.type,
                title: resp.title,
                text: resp.text
            });
            loadCarrito();
        }

    })
}

function getMisRentas(){
    $.ajax({
        'type': 'get',
        'url': 'getMisRentas',
        beforeSend: function(){
            $('#table-mis-rentas tbody').html('<tr><td colspan="6"><div class="progress"><div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"><center><b class="h6">Cargando...</b></center></div></div></td></tr>');
        },
        success: function(response){
            var resp = JSON.parse(response);
            console.log(resp)
            var fila = '';
            $.each(resp, function(index, valor){
                let { fecha_renta, tipo_pago, total, estado, id} = valor;
                let estadoStr = '';
                estado == 0 ? estadoStr = 'En proceso' : estadoStr = 'Finalizado';
                console.log(fecha_renta, tipo_pago);
                fila += `<tr>
                    <td>${fecha_renta}</td>
                    <td>${tipo_pago}</td>
                    <td>$${total}</td>
                    <td>${estadoStr}</td>
                    <td>
                    <button onclick="rentaDetalle(${id});" type="button" class="btn bg-general text-white" data-toggle="modal" data-target="#exampleModal">Ver</button>
                    </td>
                    <tr>
                `;
                // fila += `<tr>
                // <td>${articulo}</td>
                // <td>${tipo}</td>
                // <td>${precio}</td>
                // <td>${created}</td>
                // <td>
                //     <div class="custom-control custom-switch">
                //         <input type="checkbox" class="testSwitch custom-control-input" id="${id}" ${activo ? 'checked': ''}>
                //         <label class="custom-control-label" for="${id}"></label>
                //     </div>
                // </td>
                // <td>
                // <button onclick="showMyArticle('${valor.clave}', '${articulo}', '${desc}', ${precio}, '${marca}', '${tipo}', '${estado}', '${created}');" type="button" class="btn" data-toggle="modal" data-target="#exampleModal"><i class="icofont-eye-alt text-general icono-nav"></i></button>
                // <button onclick="getMyArticleRow(${id}, '${desc}', ${periodo_id}, ${precio}, '${estado}');" type="button" class="btn" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="icofont-edit text-general icono-nav"></i></button>
                // </td></tr>`;
            });
            $('#table-mis-rentas tbody').html(fila);
            // updateActiveArticle()
        }
    })

}

function rentaDetalle(id){
    $.ajax({
        'type': 'get',
        'url': `/rentaDetalle/${id}`,
        beforeSend: function(){
            $('#rentaDetalleModal').html(`<div class="col-12 d-flex justify-content-center mt-5">
            <div class="lds-ripple"><div></div><div></div></div>
        </div>`);
        },
        success: function(response){
            var resp = JSON.parse(response);
            console.log(resp)
            let {articulo : {articulo, precio}, cantidad, fecha_renta, fecha_devolucion, importe} = resp;
            var fila = '';
            $('#rentaDetalleModal').html(`
                <h6 class="fw-4 color-black23">Artículo:</h6>
                <p id="view-articulo" class="fw-5">${articulo}</p>
                <h6 class="fw-4 color-black23">Cantidad rentada:</h6>
                <p id="view-cantidad" class="fw-5">${cantidad}</p>
                <h6 class="fw-4 color-black23">Fecha de renta:</h6>
                <p id="view-f-renta" class="fw-5">${fecha_renta.split(' ')[0]}</p>
                <h6 class="fw-4 color-black23">Fecha de devolución:</h6>
                <p id="view-f-devolucion" class="fw-5">${fecha_devolucion.split(' ')[0]}</p>
                <h6 class="fw-4 color-black23">Importe:</h6>
                <p id="view-importe" class="fw-5">$${importe}</p>
            `)
            // $.each(resp, function(index, valor){
            //     let { fecha_renta, tipo_pago, total, estado} = valor;
            //     console.log(fecha_renta, tipo_pago);
            //     fila += `<tr>
            //         <td>${fecha_renta}</td>
            //         <td>${tipo_pago}</td>
            //         <td>$${total}</td>
            //         <td>${estado}</td>
            //         <tr>
            //     `;
            // });
        }
    })
}