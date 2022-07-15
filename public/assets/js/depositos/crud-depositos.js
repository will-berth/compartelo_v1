
//Obtener los datos de depositos
function getDepositos(filtro){
    $.ajax({
        'type': 'GET',
        'url': 'getDepositos/'+filtro,
        beforeSend: function(){
            $('#table-depositos tbody').html('<tr><td colspan="4"><div class="progress"><div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"><center><b class="h6">Cargando...</b></center></div></div></td></tr>');
        },
        success: function(response){
            var resp = JSON.parse(response);
            var row = '';
            //Recorrer todo el JSON
            $.each(resp, function(index, valor){
                row += `<tr><td>${valor.monto}</td><td>${valor.fecha}</td><td>${valor.comprobante}</td><td>${valor.estado}</td></tr>`;
            })
            $('#table-depositos tbody').html(row);
        }
    })
}
//cuando busquemos un dato nos refleje las coincidencias
$('#buscar').keyup(function(){
    var filtro = $(this).val();
    if(filtro == ''){
        getDepositos(0);
    }else{
        getDepositos(filtro);
    }
    
});