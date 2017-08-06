

$(document).ready(function (){

    $( "a" ).click(function( event ){
        event.preventDefault();
        var href = $(this).attr('href');
        $("#principal").load(href);
    });


    
    $( "#apagar" ).change(function(){
        var c = this.checked ? '#f00' : '';
        $('form').css('color',c);

        if(this.checked){
            //alert("Esse evento será excluído. Pense bem.");
        }
    })
});


