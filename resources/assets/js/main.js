$('.sidebar-menu').tree();
$('.phone').mask('0000-0000');
$('.cedula').mask('000-000000-0000S');


$('.form-examen select').change(function(){
    if($(this).data('target') == undefined) return false;

    let target = $('.'+$(this).data('target'));

    if($(this).val() == 'Si'){
        if($(target).is(':hidden')){
            $(target).toggle('1000');

            let select = $(target).find('select');
            select.prop('required', 'required');

            let input = $(target).find('input');
            input.prop('required', 'required');
        }
    }

    if($(this).val() == 'No'){
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
