$(document).ready(function(){

        
    $('#cadastrar_aluno').click(function(){
        $('form#aluno').off();
        $('form#aluno').submit(function(e){
            e.preventDefault();
            var dados = $('form#aluno').serialize();
            $.ajax({
                url:'processa/processa_cadastros.php',
                type:'POST',
                dataType:'html',
                data: dados,
                success: function(data){
                    $('#resultado').empty().html(data);
                }
            });
        });

    });

    
    $('#combo_categorias').click(function(){
        
        var categoria = $('#combo_categorias').serialize();

        $.ajax({
            url:'processa/processa_combo.php',
            type:'POST',
            dataType:'html',
            data: categoria,
            success: function(data){
          
                $('#combo_assunto').empty().html(data);
            }   
        });
    });



 $(document).on("click","#anterior",function(){
    var dados = $('form').serialize();
        $.ajax({
            url:'processa/anterior_prg.php',
            type:'POST',
            dataType:'html',
            data: dados,
            success: function(data){
                
                $('#resultado').empty().html(data);
            }   
        });
    });
       
    
    $(document).on("click","#finalizar",function(){
          var confirmacao = confirm("Tem certeza que deseja finalizar?");
          if (confirmacao == true){
        var dados = $('form').serialize();
        $.ajax({
            url:'processa/grava_resultado.php',
            type:'POST',
            dataType:'html',
            data: dados,
            success: function(data){


        $('#modal').empty().html(data);
        $('#btnTrigger').click();
                
                
            }   
        });
    }});

    $(document).on("click","#close",function(){
        
        top.location.href="dashboard.php"
    
    });



$(document).on("click","#aplicar_filtro",function(){

        $('form#filtros').off();
        $('form#filtros').submit(function(e){
            e.preventDefault();
            var dados = $('form#filtros').serialize();
            $.ajax({
                url:'processa/filtro.php',
                type:'POST',
                dataType:'html',
                data: dados,
                success: function(data){
           
                $('#resultado').empty().html(data);
                    
                }
            });
        });
    });

   $(document).on("keyup","#titulo",function(){
        
            var dados = $('#titulo').serialize();
            $.ajax({
                url:'processa/filtro.php',
                type:'POST',
                dataType:'html',
                data: dados,
                success: function(data){
           
                $('#resultado').empty().html(data);
                    
                }
            });
        });
    


   $(document).on("click","#myquizaplicar_filtro",function(){

        $('form#myquiz').off();
        $('form#myquiz').submit(function(e){
            e.preventDefault();
            var dados = $('form#myquiz').serialize();
            $.ajax({
                url:'processa/filtro_myquiz.php',
                type:'POST',
                dataType:'html',
                data: dados,
                success: function(data){
           
                $('#resultado').empty().html(data);
                    
                }
            });
        });
    });

   $(document).on("keyup","#myquiztitulo",function(){
        
            var dados = $('#myquiztitulo').serialize();
            $.ajax({
                url:'processa/filtro_myquiz.php',
                type:'POST',
                dataType:'html',
                data: dados,
                success: function(data){
           
                $('#resultado').empty().html(data);
                    
                }
            });
        });

   $(document).on("keyup","#filtro_vaga",function(){
        
            var dados = $('#filtro_vaga').serialize();
            $.ajax({
                url:'processa/filtro_vagas.php',
                type:'POST',
                dataType:'html',
                data: dados,
                success: function(data){
           
                $('#resultado').empty().html(data);
                    
                }
            });
        });


   $(document).on("mouseup","#selquiz",function(){
        
            var dados = $('#selquiz').serialize();
            $.ajax({
                url:'processa/processa_ranking.php',
                type:'POST',
                dataType:'html',
                data: dados,
                success: function(data){
           
                $('#resultado').empty().html(data);
                    
                }
            });
        });








 
});
