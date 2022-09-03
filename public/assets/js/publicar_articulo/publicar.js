$(document).ready(function() {
    loadMarcasSelect()
    loadCategorias()

    $('#publicar-nombre').submit(function(e){
        e.preventDefault();
        let articulo = $('#articulo').val();
        localStorage.articulo = articulo;
        $('.container').html(`<div class="col-12 d-flex justify-content-center mt-5">
        <div class="lds-ripple"><div></div><div></div></div>
    </div>`);
        $('body').load('/publicar/categoria');
    })

    $('#publicar-section-categoria').submit(function(e){
        e.preventDefault();
        $('body').load('/publicar/descripcion');
    })

    $('#publicar-section-desc').submit(function(e){
        e.preventDefault();
        let desc = $('#desc').val();
        localStorage.desc = desc;
        $('body').load('/publicar/status');
    })

    $('#publicar-section-status').submit(function(e){
        e.preventDefault();
        let form = $('#publicar-section-status');
        form.addClass('was-validated');
        let statusValidate = form[0].checkValidity();
        if(statusValidate) {
            localStorage.estado = $('select[name=estado] option').filter(':selected').val();
            localStorage.periodo = $('select[name=periodo] option').filter(':selected').val();
            let periodoText = $('select[name=periodo] option').filter(':selected').text();
            localStorage.marca = $('select[name=marca] option').filter(':selected').val();
            let marcaText = $('select[name=marca] option').filter(':selected').text();
            localStorage.precio = $('#precio').val();
            let renta = `$${localStorage.precio}/${periodoText}`;
            localStorage.resumen_marca = marcaText;
            localStorage.resumen_renta = renta;
            $('body').load('/publicar/caracteristicas');
        }
    })

    $('#nueva-caracteristica').click(function(){
        let childrenRowCar = $('#publicar-section-caracteristicas .row-inputs-car').children();
        let cantChildren = childrenRowCar.length;
        let inputsAct = cantChildren;
        let nuevaCaracteristicaHtml = `<div id="position-${inputsAct}" class="col-10 col-sm-10 col-lg-11 mt-2">
            <input id="input-${inputsAct}" name="input-${inputsAct}" type="text" class="form-control p-4" placeholder="Agrega una caracteristica." required>
        </div>
        <div id="position-${inputsAct + 1}" class="col-2 col-sm-2 col-lg-1 mt-2">
            <button type="button" id="${inputsAct + 1}" class="btn p-2 button-1 h-100 w-100 remove-input-car"><i class="icofont-trash"></i></button>
        </div>`
        $(nuevaCaracteristicaHtml).insertAfter(`#position-${inputsAct - 1}`)
        addEventRemoveRowInputCaracteristica()
    })

    addEventRemoveRowInputCaracteristica()

    $('#publicar-section-caracteristicas').submit(function(e){
        e.preventDefault();
        let valuesFormat = getCaracteristicas();
        let valuesCar = valuesFormat.substring(0, valuesFormat.length - 2)
        localStorage.caracteristicas = valuesCar;
        $('body').load('/publicar/imagenes');
    })
})

function loadCategorias(){
    if($('#publicar-section-categoria').length === 1){
        $.ajax({
            'type': 'GET',
            'url': '/getCategorias/0',
            beforeSend: function(){
                $('#publicar-section-categoria').html(`<div class="col-12 d-flex justify-content-center mt-5">
                <div class="lds-ripple"><div></div><div></div></div>
            </div>`);
            },
            success: function(response){
                var resp = JSON.parse(response);
                var itemsRow = '';
                //Recorrer todo el JSON
                resp.forEach(item => {
                    itemsRow += `<div class="col-3 col-sm-3 col-md-3 col-lg-1 mt-2">
                        <div id="${item.id}" class="card-categoria d-flex flex-column justify-content-center align-items-center h-100 w-100 category-inactive">
                            <i class="${item.icono}"></i>
                            <p>${item.categoria}</p>
                        </div>
                    </div>`;
                })
                itemsRow += `<div class="col-sm-12 col-lg-1 mt-2">
                    <button type="submit" class="btn p-2 button-1 h-100 w-100">Avanzar</button>
                </div>`;
                row = '<div class="form-row">' + itemsRow + '</div>';
                $('#publicar-section-categoria').html(row);
                addEventClickCategory();
            }
        })
    }
}

// Añade el evento del click a cada categoria cuando la función sea llamada
function addEventClickCategory(){
    $('.card-categoria').click(function(e) {
        let idCategoriaSelect = $(this).attr('id');
        if($(this).hasClass('category-inactive')){
            addNewIdCategory(idCategoriaSelect);
            $(this).removeClass('category-inactive');
            $(this).addClass('category-active');
        }else{
            removeIdCategory(idCategoriaSelect);
            $(this).removeClass('category-active');
            $(this).addClass('category-inactive');
        }
    })
}

function addNewIdCategory(id){
    //Revisa si la clave "categorias" existe en nuestro localStorage
    if(localStorage.getItem('categorias') === null){
        localStorage.categorias = `${id}`;
    }else{
        let dataStorage = localStorage.categorias;
        localStorage.categorias = `${dataStorage},${id}`;
    }
}

function removeIdCategory(id){
    let localData = localStorage.categorias;
    let values = localData.split(',');
    let newValues = values.filter( categoriaId => categoriaId != id);
    localStorage.removeItem('categorias');
    newValues.forEach(id => {
        addNewIdCategory(id);
    })
}

// Añade el evento del click al boton de eliminado de caracteristica
function addEventRemoveRowInputCaracteristica(){
    // Primeramente removemos el evento del click de borrado, ya que la creamos dos veces, una cuando se crea la vista
    // y otra cuando agregamos una nueva caracteristica al formulario.
    $('.remove-input-car').off('click');

    // Creamos el evento de click de borrado
    $('.remove-input-car').click(function (e) {
        let rowInputAct = parseInt($(this).attr('id')) - 1;
        $('#publicar-section-caracteristicas .row-inputs-car').children().eq(rowInputAct).remove();
        $('#publicar-section-caracteristicas .row-inputs-car').children().eq(rowInputAct).remove();
        resizeClassesRowInputsCar()
    })
}

function resizeClassesRowInputsCar() {
    let childrenRowCar = $('#publicar-section-caracteristicas .row-inputs-car').children();
    $.each(childrenRowCar, function(index, value){
        let positionInput = index % 2;
        let showChildAct = $('#publicar-section-caracteristicas .row-inputs-car').children().eq(index)
        showChildAct.attr('id', `position-${index}`);
        if(positionInput === 0){
            showChildAct.children().eq(0).attr('id', `input-${index}`)
            showChildAct.children().eq(0).attr('name', `input-${index}`)
        }else{
            let showChildAct = $('#publicar-section-caracteristicas .row-inputs-car').children().eq(index)
            showChildAct.children().eq(0).attr('id', index)
        }
    })
}

function getCaracteristicas(){
    let valuesStr = '';
    let childrenRowCar = $('#publicar-section-caracteristicas .row-inputs-car').children();
    let showJustInputs = childrenRowCar.filter(index => (index % 2) === 0);
    $.each(showJustInputs, function(index, value){
        valuesStr += `${value.children[0].value}&/`
    })
    return valuesStr;
}

function loadMarcasSelect(){
    if($('#marca').length === 1){
        $.ajax({
            'type': 'GET',
            'url': '/getMarcas/0',
            success: function(response){
                var resp = JSON.parse(response);
                //Recorrer todo el JSON
                resp.forEach(item => {
                    $('#marca').append(`<option value="${item.id}">${item.marca}</option>`);
                })
            }
        })
    }
}