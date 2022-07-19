let estados = [
    { "clave": "AGS", "nombre": "Aguascalientes" },
    { "clave": "BC",  "nombre": "Baja California" },
    { "clave": "BCS", "nombre": "Baja California Sur" },
    { "clave": "CHI", "nombre": "Chihuahua" },
    { "clave": "CHS", "nombre": "Chiapas" },
    { "clave": "CMP", "nombre": "Campeche" },
    { "clave": "DIF", "nombre": "Ciudad De Mexico" },
    { "clave": "COA", "nombre": "Coahuila" },
    { "clave": "COL", "nombre": "Colima" },
    { "clave": "DGO", "nombre": "Durango" },
    { "clave": "GRO", "nombre": "Guerrero" },
    { "clave": "GTO", "nombre": "Guanajuato" },
    { "clave": "HGO", "nombre": "Hidalgo" },
    { "clave": "JAL", "nombre": "Jalisco" },
    { "clave": "MCH", "nombre": "Michoacan" },
    { "clave": "MEX", "nombre": "Estado de Mexico" },
    { "clave": "MOR", "nombre": "Morelos" },
    { "clave": "NAY", "nombre": "Nayarit" },
    { "clave": "NL",  "nombre": "Nuevo Leon" },
    { "clave": "OAX", "nombre": "Oaxaca" },
    { "clave": "PUE", "nombre": "Puebla" },
    { "clave": "QR",  "nombre": "Quintana Roo" },
    { "clave": "QRO", "nombre": "Queretaro" },
    { "clave": "SIN", "nombre": "Sinaloa" },
    { "clave": "SLP", "nombre": "San Luis Potosi" },
    { "clave": "SON", "nombre": "Sonora" },
    { "clave": "TAB", "nombre": "Tabasco" },
    { "clave": "TLX", "nombre": "Tlaxcala" },
    { "clave": "TMS", "nombre": "Tamaulipas" },
    { "clave": "VER", "nombre": "Veracruz" },
    { "clave": "YUC", "nombre": "Yucatan" },
    { "clave": "ZAC", "nombre": "Zacatecas" } 
];

function getEstadosList(){
    estados.forEach(estado => {
        let {nombre} = estado;
        let estadosHtml = `<option value="${nombre}">${nombre}</option>`;
        $("#estado").append(estadosHtml);
        // console.log(clave);
    });
}