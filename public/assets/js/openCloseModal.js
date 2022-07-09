// 0 - agregar 1 - actualizar
function openClose(id_modal, modulo, desc, tipo){
    switch (modulo){
        case 'marcas':
            if(tipo == 0){
                $('#titulo-modal').html('Agregar marca');
                $('#btn-save').html('Agregar');
            }else{
                $('#titulo-modal').html('Actualizar marca');
                $('#btn-save').html('Actualizar');
            }
        
        case 'periodos':
            if(tipo == 0){
                $('#titulo-modal').html('Agregar periodo');
                $('#btn-save').html('Agregar');
            }else{
                $('#titulo-modal').html('Actualizar periodo');
                $('#btn-save').html('Actualizar');
            }
    }
    $('#'+id_modal).modal({backdrop: 'static', keyboard: false});
}