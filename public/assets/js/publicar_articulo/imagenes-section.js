$(document).ready(function(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    FilePond.registerPlugin(FilePondPluginImagePreview);
    FilePond.registerPlugin(FilePondPluginFileValidateType);
    let filepondConfig = {
        storeAsFile: true,
        acceptedFileTypes: ['image/*'],
        allowImagePreview: true,
        allowMultiple: false,
        maxFiles: 2,
    }
    $('#img1').filepond(filepondConfig);
    $('#img2').filepond(filepondConfig);
    $('#img3').filepond(filepondConfig);
    $('#img4').filepond(filepondConfig);
    FilePond.setOptions(labels_es_ES)

    $('#publicar-section-imagenes').submit(function(e){
        e.preventDefault();
        // pendiente
        let imagesData = new FormData(this);
        var claveRandom = randomString(50, '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ');
        imagesData.set('articulo', localStorage.articulo);
        imagesData.set('categorias', localStorage.categorias);
        imagesData.set('desc', localStorage.desc);
        imagesData.set('estado', localStorage.estado);
        imagesData.set('periodo_id', localStorage.periodo);
        imagesData.set('precio', localStorage.precio);
        imagesData.set('marca_id', localStorage.marca);
        imagesData.set('caracteristicas', localStorage.caracteristicas);
        imagesData.set('user_id', 1);
        imagesData.set('clave', claveRandom);
        $.ajax({
            url  : "/addArticulos",
            type : 'POST',
            data: imagesData,
            cache: false,
            contentType : false,
            processData: false,
            success: function(response){
                var resp = JSON.parse(response);
                localStorage.clear();
                Swal.fire({
                    icon: resp.type,
                    title: resp.title,
                    text: resp.text,
                    footer: `<a href="/item-details/${resp.clave}">Puedes ver tu articulo aquí.</a>`,
                    timer: 8000
                }).then((result) => {
                    window.location.href = `/item-details/${resp.clave}`;
                })
            }, error: function(jqXhr, json, errorThrown){
                var resp = JSON.parse(json);
                Swal.fire({
                    icon: resp.type,
                    title: resp.title,
                    text: resp.text,
                    timer: 6000
                }).then((result) => {
                    window.location.href = `/publicar`;
                })
            }
        })
    })

    cargarResumen();
})

function randomString(length, chars) {
    var result = '';
    for (var i = length; i > 0; --i) result += chars[Math.floor(Math.random() * chars.length)];
    return result;
}

function cargarResumen(){
    $('#resumen-articulo').text(localStorage.articulo);
    $('#resumen-desc').text(localStorage.desc);
    $('#resumen-marca').text(localStorage.resumen_marca);
    $('#resumen-estado').text(localStorage.estado);
    $('#resumen-renta').text(localStorage.resumen_renta);
    $('#resumen-caracteristicas').html('');
    let caracteristicas = localStorage.caracteristicas.split('&/');
    caracteristicas.forEach(caracteristica => {
        $('#resumen-caracteristicas').append(`<li class="ml-3" class="fw-5">${caracteristica}</li>`)
    })
}