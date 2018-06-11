 <?php include 'navbar.php';
 include  "../processa/conecta.php";

$id_orc = $_GET['id'];

  $sql = $mysqli->prepare('select orc.id,date_format(orc.data_cadastro,"%Y-%m-%dT%H:%i"),c.nome,car.modelo,car.placa,orc.observacao,orc.status from clientes as c ,carros as car,osm as orc where car.id = orc.id_carro and c.id = orc.id_cliente and orc.id = ? ');
  $sql->bind_param('i',$id_orc);
  $sql->execute();
  $sql->bind_result($id_osm,$data,$nome_cli,$modelo,$placa,$descricao,$status); 
  $sql->fetch();
 ?>

 <div class="row">

  <div class="col-lg-12">
    <h3 class="page-header">Atualização de ordens de serviço</h3>
  </div>
  <!-- /.col-lg-12 -->
 </div>

 <div class="row">
  <form id='osm'>
  <div class="col-lg-12">
    <div class="panel panel-default">
     
      <div class="panel-body">
    <div class="row">
                <div class="col-lg-12">
                  <div class="col-lg-6">
                    <div class="form-group">

                      <label>Nr.do orçamento</label>
                      <input  id="id" name="id" class="form-control" value=<?php echo "$id_osm"?> disabled>
                      <label>Data</label>
                      <input type='datetime-local' id="data" name="data" class="form-control" value=<?php echo "$data"?>>
                      <label>Cliente</label>
                      <input class="form-control" id="cliente" name="cliente" class="form-control" value=<?php echo "$nome_cli"?> disabled>
                   <label>Carro</label>
                      <input class="form-control" id="carro" name="carro" class="form-control" value=<?php echo "$modelo/$placa"?> disabled>



                      <label>Descrição</label>
                      <textarea class="form-control" id="descricao" name="descricao" class="form-control"><?php echo "$descricao"?></textarea>

                    </div>

                    
                  </div>

            



              </div>


              
            </div>


          </div>
       </div>
 <input id="id_osm" name='id_osm' type="hidden" value=<?php echo "$id_osm"?>>
        
    <div class='col-lg-12' id='resultado'></div>

    <button id='submit_edit_osm' type="submit" class="btn btn-default btn-lg btn-block">Atualizar</button>

  <?php

      if($status == 'A'){
      echo "<button  id='submit_inat_osm' type='submit' class='btn btn-default btn-lg btn-block'>Cancelar</button>";}


     else{

echo "<button  id='submit_ati_osm' type='submit' class='btn btn-default btn-lg btn-block'>Re-Cadastrar</button>";


     };

     ?>

  </div>
</form>
      </div>
       </div>

</body>
</html>
 


