function getArticulos(){
    $.ajax({
        'type': 'GET',
        'url': 'getArticulos',
        beforeSend: function(){

        },
        success: function(response){
            var data = JSON.parse(response);
            var card = '';
            $.each(data, function(index, valor){
                card += `
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <a href="#"  class="text-decoration-none">
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
                                <p class="card-text text-muted">$${valor.precio} MXN/Día</p>
                            </div>
                            <div class="border p-1 text-center bg-info text-white">
                                <i class="icofont-car p-2 pt-4"></i><small>2 km</small> <i class="icofont-clock-time p-2 pt-4"></i><small>27 min</small>
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