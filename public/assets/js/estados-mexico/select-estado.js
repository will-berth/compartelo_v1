$(document).ready(function(){
    $('#estado').on('change', function(){
        let municipiosSelect = [... municpios[this.value]];
        $("#municipio").html('');
        municipiosSelect.forEach(municipioOption => {
            let municipiosHtml = `<option value="${municipioOption}">${municipioOption}</option>`;
            $("#municipio").append(municipiosHtml);
        });
    });
});