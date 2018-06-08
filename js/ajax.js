$(document).ready(function(){

  $('#submit_cliente').click(function(){


        $('form#cliente').off();
        $('form#cliente').submit(function(e){
           
           
e.preventDefault();

            var dados = $('form#cliente').serialize();
            $.ajax({
                url:'../processa/cadastros.php',
                type:'POST',
                dataType:'html',
                data: dados,
                success: function(data){
                    $('#resultado').empty().html(data);
                
                }
            });

             
        });

    });

   $('#submit_usuario').click(function(){


        $('form#usuario').off();
        $('form#usuario').submit(function(e){
        
e.preventDefault();

            var dados = $('form#usuario').serialize();
            $.ajax({
                url:'../processa/cadastros.php',
                type:'POST',
                dataType:'html',
                data: dados,
                success: function(data){
                    $('#resultado').empty().html(data);
                  
                }
            });

             
        });

    });

   $('#cad_carros').click(function(){


        $('form#carros').off();
        $('form#carros').submit(function(e){
        
e.preventDefault();

            var dados = $('form#carros').serialize();

            $.ajax({
                url:'../processa/cadastros.php',
                type:'POST',
                dataType:'html',
                data: dados,
                success: function(data){
                    $('#resultado').empty().html(data);
                  
                }
            });

             
        });

    });

    $('#cad_item').click(function(){


        $('form#cad_item').off();
        $('form#cad_item').submit(function(e){
        
e.preventDefault();

            var dados = $('form#cad_item').serialize();
     
            $.ajax({
                url:'../processa/cadastros.php',
                type:'POST',
                dataType:'html',
                data: dados,
                success: function(data){
                    $('#resultado').empty().html(data);
                  
                }
            });

             
        });

    });


   
});
