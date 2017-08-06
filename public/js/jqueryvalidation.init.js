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
                required: 'Obrigatória',
                minlength: '10 no mínimo',
                maxlength: '10 no máximo',
            },
            hora: {
                required: 'Obrigatória',
                minlength: '5 no mínimo',
                maxlength: '5 no máximo',
            },
            descricao: 'Descrição obrigatória',
        },
        submitHandler: function(form){
            form.submit();
        }
    });
});


//Jquery Mask
$('.data').mask('99/99/9999');
$('.hora').mask('99:99');