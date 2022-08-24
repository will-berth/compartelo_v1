$(document).ready(function() {
    $.ajax({
        'type': 'GET',
        'url': 'getCategorias/0',
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

    $('#publicar-nombre').submit(function(e){
        e.preventDefault();
        let articulo = $('#articulo').val();
        localStorage.articulo = articulo;
        $('body').load('/categoria-select');
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
        // pendiente
        $('body').load('/publicar/imagenes');
    })

})

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