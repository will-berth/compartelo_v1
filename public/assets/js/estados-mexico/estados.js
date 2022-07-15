let estados = [
    { "clave": "AGS", "nombre": "AGUASCALIENTES" },
    { "clave": "BC",  "nombre": "BAJA CALIFORNIA" },
    { "clave": "BCS", "nombre": "BAJA CALIFORNIA SUR" },
    { "clave": "CHI", "nombre": "CHIHUAHUA" },
    { "clave": "CHS", "nombre": "CHIAPAS" },
    { "clave": "CMP", "nombre": "CAMPECHE" },
    { "clave": "DIF", "nombre": "CIUDAD DE MEXICO" },
    { "clave": "COA", "nombre": "COAHUILA" },
    { "clave": "COL", "nombre": "COLIMA" },
    { "clave": "DGO", "nombre": "DURANGO" },
    { "clave": "GRO", "nombre": "GUERRERO" },
    { "clave": "GTO", "nombre": "GUANAJUATO" },
    { "clave": "HGO", "nombre": "HIDALGO" },
    { "clave": "JAL", "nombre": "JALISCO" },
    { "clave": "MCH", "nombre": "MICHOACAN" },
    { "clave": "MEX", "nombre": "MEXICO" },
    { "clave": "MOR", "nombre": "MORELOS" },
    { "clave": "NAY", "nombre": "NAYARIT" },
    { "clave": "NL",  "nombre": "NUEVO LEON" },
    { "clave": "OAX", "nombre": "OAXACA" },
    { "clave": "PUE", "nombre": "PUEBLA" },
    { "clave": "QR",  "nombre": "QUINTANA ROO" },
    { "clave": "QRO", "nombre": "QUERETARO" },
    { "clave": "SIN", "nombre": "SINALOA" },
    { "clave": "SLP", "nombre": "SAN LUIS POTOSI" },
    { "clave": "SON", "nombre": "SONORA" },
    { "clave": "TAB", "nombre": "TABASCO" },
    { "clave": "TLX", "nombre": "TLAXCALA" },
    { "clave": "TMS", "nombre": "TAMAULIPAS" },
    { "clave": "VER", "nombre": "VERACRUZ" },
    { "clave": "YUC", "nombre": "YUCATAN" },
    { "clave": "ZAC", "nombre": "ZACATECAS" } 
];

function getEstadosList(){
    estados.forEach(estado => {
        let {clave, nombre} = estado;
        let estadosHtml = `<option value=${clave}>${nombre}</option>`;
        $("#form-estados").append(estadosHtml);
        // console.log(clave);
    });
}