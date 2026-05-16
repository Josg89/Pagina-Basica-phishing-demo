// Dentro de Funcion.js
$(document).ready(function() {

    
    $('#Dato').submit(function(e) {
        e.preventDefault();
    
        $.ajax({
            url: 'ajax.php',
            type: "POST",
            async: true,
            data: $('#Dato').serialize(),
    
            success: function(response) {   
                console.log(response);
            },
    
            error: function(error) {
                console.log(error);
            }   
        });  
    });
    
    
 
});
