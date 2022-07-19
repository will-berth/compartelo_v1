$(document).ready(function() {
    FilePond.registerPlugin(FilePondPluginImagePreview);
    FilePond.registerPlugin(FilePondPluginFileValidateType);
    $('#ine_frontal').filepond({
        storeAsFile: true,
        acceptedFileTypes: ['image/*'],
        allowImagePreview: true
    });
    $('#ine_reverso').filepond({
        storeAsFile: true,
        acceptedFileTypes: ['image/*'],
        allowImagePreview: true
    });
    $('#comprobante').filepond({
        storeAsFile: true,
        acceptedFileTypes: ['image/*'],
        allowImagePreview: true
    });
    FilePond.setOptions(labels_es_ES)
});