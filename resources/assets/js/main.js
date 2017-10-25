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
            input.val('');
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
