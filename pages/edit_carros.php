 <?php include 'navbar.php';
 include  "../processa/conecta.php";



 $id_carro = $_GET['id'];


 $sql = $mysqli->prepare('select cli.id,cli.nome,marca,modelo,versao,placa,ano,ano_modelo,tipo_combustivel,cor,c.status from carros as c,clientes as cli,carro_cliente as cl where c.id=? and c.id=cl.id_carro and cl.id_cliente = cli.id' );
$sql->bind_param('i',$id_carro);
 $sql->execute();
 $sql->bind_result($id_prop,$nome_prop,$marca,$modelo,$versao,$placa,$ano,$ano_modelo,$tipo_combustivel,$cor,$status); 
$sql->fetch();
$sql->close();

 $sql1 = $mysqli->prepare('select c.id,c.nome from clientes as c limit 10');

 $sql1->execute();
 $sql1->bind_result($id_prop,$nome_prop); 
$sql1->store_result();

 


  ?>
 <div class="row">
  <div class="col-lg-12">
    <h3 class="page-header">Atualização de carros - <?php echo "$placa";?></h3>
  </div>
  <!-- /.col-lg-12 -->
 </div>

      <div class="row">

        <form id='carro'>
          <div class="col-lg-12">
          <div class="panel panel-default">

            <div class="panel-body">
              <div class="row">
                <div class="col-lg-12">
                  <div class="col-lg-6">
                  <div class="form-group">

                  
                      <label>Selecione o proprietário</label>
                       <select id='combo_proprietario' name='proprietario' class="form-control">
                 <?php   echo "<option value='$id_prop'>$nome_prop</option>"?>
                        <?php while ($sql1->fetch()){
                          echo "<option value='$id_prop'>$nome_prop</option>
                          ";
                          }?>
                      </select>
              

                    <label>Marca</label>
                    <input id="marca" name="marca" class="form-control" value=<?php echo "$marca"?>>
                    <label>Modelo</label>
                    <input id="modelo" name="modelo" class="form-control" value=<?php echo "$modelo"?>>
                    <label>Versão</label>
                    <input id="versao" name="versao" class="form-control" value=<?php echo "$versao"?>>
                    <label>Placa</label>
                    <input id="placa" name="placa" class="form-control" value=<?php echo "$placa"?>>

</div>
</div>
  
        <div class="col-lg-6">
        

                  <div class="form-group">
                  <label>Ano</label>
                    <input id="ano" name="ano" class="form-control" value=<?php echo "$ano"?>>
                    <label>Ano/modelo</label>
                    <input id="ano_modelo" name="ano_modelo" class="form-control" value=<?php echo "$ano_modelo"?>>
                    <label>Tipo de combustivel</label>
                    <input id="tipo_combustivel" name="tipo_combustivel" class="form-control" value=<?php echo "$tipo_combustivel"?>>
                    <label>Cor</label>
                    <input id="cor" name="cor" class="form-control" value=<?php echo "$cor"?>>
                    
                  </div>
                </div>
</div>

              </div>
            </div>
          </div>
 <input id="id_carro" name='id_carro' type="hidden" value=<?php echo "$id_carro"?>>
        
    <div class='col-lg-12' id='resultado'></div>

    <button id='submit_edit_car' type="submit" class="btn btn-default btn-lg btn-block">Atualizar</button>

  <?php

      if($status == 'A'){
      echo "<button  id='submit_inat_car' type='submit' class='btn btn-default btn-lg btn-block'>Inativar</button>";}


     else{

echo "<button  id='submit_ativar_car' type='submit' class='btn btn-default btn-lg btn-block'>Ativar</button>";


     };

     ?>

  </div>


          
            

</form>
      </div>
      
       </div>
</body>
</html>
 



       
      
   