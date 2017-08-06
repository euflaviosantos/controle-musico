//JQuery Validation 
$(function(){
    $('.formulario').validate({
        rules: {
            data: {
                required: true,
                minlength: 10,
                maxlength: 10,
            },
            hora: {
                required: true,
                minlength: 5,
                maxlength: 5,
            },
            descricao: 'required',
        },
        messages: {
            data: {
                required: 'Obrigat�ria',
                minlength: '10 no m�nimo',
                maxlength: '10 no m�ximo',
            },
            hora: {
                required: 'Obrigat�ria',
                minlength: '5 no m�nimo',
                maxlength: '5 no m�ximo',
            },
            descricao: 'Descri��o obrigat�ria',
        },
        submitHandler: function(form){
            form.submit();
        }
    });
});


//Jquery Mask
$('.data').mask('99/99/9999');
$('.hora').mask('99:99');