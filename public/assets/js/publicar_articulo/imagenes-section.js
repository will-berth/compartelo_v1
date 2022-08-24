$(document).ready(function(){
    FilePond.registerPlugin(FilePondPluginImagePreview);
    FilePond.registerPlugin(FilePondPluginFileValidateType);
    let filepondConfig = {
        storeAsFile: true,
        acceptedFileTypes: ['image/*'],
        allowImagePreview: true
    }
    $('#img1').filepond(filepondConfig);
    $('#img2').filepond(filepondConfig);
    $('#img3').filepond(filepondConfig);
    $('#img4').filepond(filepondConfig);
    FilePond.setOptions(labels_es_ES)

    $('#publicar-section-imagenes').submit(function(e){
        e.preventDefault();
        // pendiente
    })
})