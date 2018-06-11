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


        $('#submit_edit_cli').click(function(){

        $('form#cliente').off();
        $('form#cliente').submit(function(e){
 

e.preventDefault();

            var dados = $('form#cliente').serialize();

            $.ajax({
                url:'../processa/update_cliente.php',
                type:'POST',
                dataType:'html',
                data: dados,
                success: function(data){

                    $('#resultado').empty().html(data);
                  
                }
            });

             
        });

    });



        $('#submit_inat_cli').click(function(){

        $('form#cliente').off();
        $('form#cliente').submit(function(e){
 

e.preventDefault();

            var dados = $('form#cliente').serialize();

            $.ajax({
                url:'../processa/inat_cli.php',
                type:'POST',
                dataType:'html',
                data: dados,
                success: function(data){
                    $('#resultado').empty().html(data);
                  
                }
            });

             
        });

    });


        $('#submit_ativar_cli').click(function(){

        $('form#cliente').off();
        $('form#cliente').submit(function(e){
 

e.preventDefault();

            var dados = $('form#cliente').serialize();

            $.ajax({
                url:'../processa/ati_cli.php',
                type:'POST',
                dataType:'html',
                data: dados,
                success: function(data){
                    $('#resultado').empty().html(data);
                  
                }
            });

             
        });

    });


$('#submit_edit_car').click(function(){

        $('form#carro').off();
        $('form#carro').submit(function(e){
 

e.preventDefault();

            var dados = $('form#carro').serialize();

            $.ajax({
                url:'../processa/update_car.php',
                type:'POST',
                dataType:'html',
                data: dados,
                success: function(data){

                    $('#resultado').empty().html(data);
                  
                }
            });

             
        });

    });



        $('#submit_inat_car').click(function(){

        $('form#carro').off();
        $('form#carro').submit(function(e){
 

e.preventDefault();

            var dados = $('form#carro').serialize();

            $.ajax({
                url:'../processa/inat_car.php',
                type:'POST',
                dataType:'html',
                data: dados,
                success: function(data){
                    $('#resultado').empty().html(data);
                  
                }
            });

             
        });

    });


        $('#submit_ativar_car').click(function(){

        $('form#carro').off();
        $('form#carro').submit(function(e){
 

e.preventDefault();

            var dados = $('form#carro').serialize();

            $.ajax({
                url:'../processa/ati_car.php',
                type:'POST',
                dataType:'html',
                data: dados,
                success: function(data){
 
                    $('#resultado').empty().html(data);
                  
                }
            });

             
        });

    });

$('#submit_edit_usr').click(function(){

        $('form#usuario').off();
        $('form#usuario').submit(function(e){
 

e.preventDefault();

            var dados = $('form#usuario').serialize();

            $.ajax({
                url:'../processa/update_usr.php',
                type:'POST',
                dataType:'html',
                data: dados,
                success: function(data){

                    $('#resultado').empty().html(data);
                  
                }
            });

             
        });

    });



        $('#submit_inat_usr').click(function(){

        $('form#usuariousuario').off();
        $('form#usuario').submit(function(e){
 

e.preventDefault();

            var dados = $('form#usuario').serialize();

            $.ajax({
                url:'../processa/inat_usr.php',
                type:'POST',
                dataType:'html',
                data: dados,
                success: function(data){
                    $('#resultado').empty().html(data);
                  
                }
            });

             
        });

    });


        $('#submit_ativar_usr').click(function(){

        $('form#usuario').off();
        $('form#usuario').submit(function(e){
 

e.preventDefault();

            var dados = $('form#usuario').serialize();

            $.ajax({
                url:'../processa/ati_usr.php',
                type:'POST',
                dataType:'html',
                data: dados,
                success: function(data){
 
                    $('#resultado').empty().html(data);
                  
                }
            });

             
        });

    });

$('#submit_edit_item').click(function(){

        $('form#item').off();
        $('form#item').submit(function(e){
 

e.preventDefault();

            var dados = $('form#item').serialize();

            $.ajax({
                url:'../processa/update_item.php',
                type:'POST',
                dataType:'html',
                data: dados,
                success: function(data){

                    $('#resultado').empty().html(data);
                  
                }
            });

             
        });

    });



        $('#submit_inat_item').click(function(){

        $('form#item').off();
        $('form#item').submit(function(e){
 

e.preventDefault();

            var dados = $('form#item').serialize();

            $.ajax({
                url:'../processa/inat_item.php',
                type:'POST',
                dataType:'html',
                data: dados,
                success: function(data){
                    $('#resultado').empty().html(data);
                  
                }
            });

             
        });

    });


        $('#submit_ativar_item').click(function(){

        $('form#item').off();
        $('form#item').submit(function(e){
 

e.preventDefault();

            var dados = $('form#item').serialize();

            $.ajax({
                url:'../processa/ati_item.php',
                type:'POST',
                dataType:'html',
                data: dados,
                success: function(data){
 
                    $('#resultado').empty().html(data);
                  
                }
            });

             
        });

    });


   $('#cad_lembretes').click(function(){

        $('form#lembretes').off();
        $('form#lembretes').submit(function(e){
 

e.preventDefault();

            var dados = $('form#lembretes').serialize();

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

$('#submit_edit_lem').click(function(){

        $('form#lembrete').off();
        $('form#lembrete').submit(function(e){
 

e.preventDefault();

            var dados = $('form#lembrete').serialize();

            $.ajax({
                url:'../processa/update_lembrete.php',
                type:'POST',
                dataType:'html',
                data: dados,
                success: function(data){

                    $('#resultado').empty().html(data);
                  
                }
            });

             
        });

    });



        $('#submit_inat_lem').click(function(){

        $('form#lembrete').off();
        $('form#lembrete').submit(function(e){
 

e.preventDefault();

            var dados = $('form#lembrete').serialize();

            $.ajax({
                url:'../processa/inat_lembrete.php',
                type:'POST',
                dataType:'html',
                data: dados,
                success: function(data){
                    $('#resultado').empty().html(data);
                  
                }
            });

             
        });

    });


        $('#submit_ativar_lem').click(function(){

        $('form#lembrete').off();
        $('form#lembrete').submit(function(e){
 

e.preventDefault();

            var dados = $('form#lembrete').serialize();

            $.ajax({
                url:'../processa/ati_lembrete.php',
                type:'POST',
                dataType:'html',
                data: dados,
                success: function(data){
 
                    $('#resultado').empty().html(data);

                  
                }
            });

             
        });

    });



    $('#combo_proprietario').click(function(){
        
        var categoria = $('#combo_proprietario').serialize();
        $.ajax({
            url:'../processa/combo_box.php',
            type:'POST',
            dataType:'html',
            data: categoria,
            success: function(data){
    
                $('#combo_carro').empty().html(data);
            }   
        });
    });



$('#cad_agendamento').click(function(){

        $('form#agendamentos').off();
        $('form#agendamentos').submit(function(e){
 

e.preventDefault();

            var dados = $('form#agendamentos').serialize();

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


$('#submit_edit_age').click(function(){

        $('form#agendamentos').off();
        $('form#agendamentos').submit(function(e){
 

e.preventDefault();

            var dados = $('form#agendamentos').serialize();

            $.ajax({
                url:'../processa/update_age.php',
                type:'POST',
                dataType:'html',
                data: dados,
                success: function(data){

                    $('#resultado').empty().html(data);
                  
                }
            });

             
        });

    });


    $('#submit_exc_age').click(function(){

     

        $('form#agendamentos').off();
        $('form#agendamentos').submit(function(e){
            e.preventDefault();
     var confirmacao = confirm("Tem certeza que deseja excluir?");
          if (confirmacao == true){



            var dados = $('form#agendamentos').serialize();

            $.ajax({
                url:'../processa/exc_agendamento.php',
                type:'POST',
                dataType:'html',
                data: dados,
                success: function(data){
                    $('#resultado').empty().html(data);
                    top.location.href="agendamentos.php"
                  
                }
            });

            }  
        });
   

    });






        $('#cad_orcamento').click(function(){

        $('form#orcamento').off();
        $('form#orcamento').submit(function(e){
 

e.preventDefault();

            var dados = $('form#orcamento').serialize();

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



        $('#incluir').click(function(){

        $('form#itens').off();
        $('form#itens').submit(function(e){
 

e.preventDefault();

            var dados = $('form#itens').serialize();

            $.ajax({
                url:'../processa/inclui_itens.php',
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

         
   

