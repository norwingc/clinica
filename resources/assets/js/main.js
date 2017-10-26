$('.sidebar-menu').tree();
$('.phone').mask('0000-0000');
$('.cedula').mask('000-000000-0000S');


$('.form-examen select').change(function(){
    if($(this).data('target') == undefined) return false;

    let target = $('.'+$(this).data('target'));

    if($(this).val() == 'Si' || $(this).val() == 'Anormal'){
        if($(target).is(':hidden')){
            $(target).toggle('1000');

            let select = $(target).find('select');
            select.prop('required', 'required');

            let input = $(target).find('input');
            input.prop('required', 'required');
        }
    }

    if($(this).val() == 'No' || $(this).val() == 'Normal'){
        if($(target).is(':hidden')){
            return false;
        }else{
            $(target).toggle('1000');

            let select = $(target).find('select');
            select.removeAttr('required');
            select.val('');
            select.selectpicker('deselectAll');

            let input = $(target).find('input');
            input.removeAttr('required');
            input.val('');
        }
    }
});

$('#cantidad_cirugias_pelvicas').change(function(){
    let cantidad = $(this).val();

    if(cantidad == 0) return false;

    let table = $('#table_cantidad_cirugias_pelvicas');
    table.html('');

    let html = "<tr><td><input type='month' class='form-control'></td><td><input type='text' class='form-control'></td><td><input type='text' class='form-control'></td></tr>";

    for (var i=0; i < cantidad; i++) {
        table.append(html);
    }
});

$('#cirugias_pelvicas').change(function(){
    if($(this).val() == 'No'){
        let table = $('#table_cantidad_cirugias_pelvicas');
        table.html('');
    }
});

$('#gesta').change(function(){
    let cantidad = $(this).val();

    if(cantidad == 0){
        $('.gesta_si').hide();
    }else{
        $('.gesta_si').show();
    }
});

$('#embarazada').change(function(){
    if($(this).val() == 'Si'){
        edadGestional();
    }
});

function edadGestional() {
    let fecha    = $('#ultima_regla').val(); //annio-mes-dia
    let textarea = $('#edad_gestional_view');

    if(fecha == '') return false;

    fecha = fecha.split("-");

    fecha_inicio = new Date();
    dia_parto    = new Date();
    hoy          = new Date();
    lleva        = new Date();
    falta        = new Date();

    day   = fecha[2];
    month = fecha[1];
    year  = fecha[0];

    fecha_dada = new Date(year, (month-1), day);//month+"/"+day+"/"+year

     //Calculamos la fecha probable del parto
    fecha_inicio.setTime(fecha_dada.getTime());
    dia_parto.setTime(fecha_inicio.getTime() + (280 * 86400000)); //(14 * 86400000) es la fecha de concepción

    //Calculamos el tiempo que lleva
    lleva.setTime(hoy.getTime() - fecha_inicio.getTime());
    llevasemanas = parseInt(((lleva.getTime()/86400000)/7));
    llevadias = Math.floor(((lleva.getTime()/86400000)%7));
    //Calculamos el tiempo faltante
    falta.setTime(dia_parto.getTime() - hoy.getTime());

    faltasemanas = parseInt(((falta.getTime()/86400000)/7));
    faltadias = parseInt(((falta.getTime()/86400000)%7));

    let semanas = llevasemanas + " semanas y " + llevadias +" d&iacute;as";
    let faltante = faltasemanas + " semanas y " + faltadias+ " d&iacute;as";
    let fechap = dispDate(dia_parto)+", est&aacute; en la semana "+llevasemanas+" de embarazo.";

    let resultado = '<b>Semanas de embarazo:</b> ' + semanas + ' <b>Dias que faltan de embarazo:</b> ' + faltante + ' <b>Fecha probable de parto:</b> ' + fechap;
    textarea.html(resultado);
}

function dispDate(dateObj)
{
    month = dateObj.getMonth()+1;
    var months = new Array(12);
    months[1] = "Enero";
    months[2] = "Febrero";
    months[3] = "Marzo";
    months[4] = "Abril";
    months[5] = "Mayo";
    months[6] = "Junio";
    months[7] = "Julio";
    months[8] = "Agosto";
    months[9] = "Septiembre";
    months[10] = "Octubre";
    months[11] = "Noviembre";
    months[12] = "Diciembre";
    day   = dateObj.getDate();
    var days = new Array(7);
    days[0] = "Domingo";
    days[1] = "Lunes";
    days[2] = "Martes";
    days[3] = "Mi&eacute;rcoles";
    days[4] = "Jueves";
    days[5] = "Viernes";
    days[6] = "S&aacute;bado";
    dayw = dateObj.getDay();
    day = (day < 10) ? "0" + day : day;
    year  = dateObj.getYear();
    if (year < 2000) year += 1900;
    return (days[dayw] + " " + day + " de " + months[month] + " del " + year);
}


$('#talla').focusout(function() {
    let peso = $('#peso').val();
    let talla = $('#talla').val();

    if(peso == '' || talla == '') return false;

    let imc = peso / Math.pow(talla, 2);

    let diag = '';

    if(imc < 18.5){
        diag = 'Desnutricion';
    }else if(imc >= 18.5 && imc <= 24.9){
        diag = 'Eutrofico';
    }else if(imc >= 25 && imc <= 29.9){
        diag = 'Sobrepeso';
    }else if(imc >= 30 && imc <= 34.9){
        diag = 'Obesidad Clase I';
    }else if(imc >= 35 && imc <= 39.9){
        diag = 'Obesidad Clase II';
    }else{
        diag = 'Obesidad Clase III';
    }

    $('#imc').val(Math.round(imc*10)/10 + '% / ' + diag);
});
