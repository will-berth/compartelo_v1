// 0 - agregar 1 - actualizar
function openModal(id_modal, modulo, desc, tipo){
    if(tipo == 0){
        $('#id').prop('disabled', true);
    }else{
        $('#id').prop('disabled', false);
    }
    switch (modulo){
        case 'marcas':
            if(tipo == 0){
                $('#titulo-modal').html('Agregar marca');
                $('#btn-save').html('Agregar');
            }else{
                $('#titulo-modal').html('Actualizar marca '+desc);
                $('#btn-save').html('Actualizar');
            }
            break;
        
        case 'periodos':
            if(tipo == 0){
                $('#titulo-modal').html('Agregar periodo');
                $('#btn-save').html('Agregar');
            }else{
                $('#titulo-modal').html('Actualizar periodo');
                $('#btn-save').html('Actualizar');
            }

        case 'categorias':
            if(tipo == 0){
                $('#titulo-modal').html('Agregar categoria');
                $('#btn-save').html('Agregar');
            }else{
                $('#titulo-modal').html('Actualizar categoria '+desc);
                $('#btn-save').html('Actualizar');
            }
    }
    $('#'+id_modal).modal({backdrop: 'static', keyboard: false});
}
function closeModal(id_modal, id_from){
    $('#'+id_modal).modal('hide');
    $('#'+id_from).trigger('reset');
}