 <?php include 'navbar.php';
 include  "../processa/conecta.php";


$id_lembrete = $_GET['id'];

 $sql = $mysqli->prepare('select id_usuarios,c.nome,descricao,data_lembrete,l.status from lembretes as l,clientes as c where l.id=? and l.id_usuarios = c.id');
 $sql->bind_param('i',$id_lembrete);
 $sql->execute();
 $sql->bind_result($id_usuarios,$nome_cli,$descricao,$data_lembrete,$status); 
 $sql->fetch();
 $sql->store_result();

 ?>

 <div class="row">

  <div class="col-lg-12">
    <h3 class="page-header">Atualização de lembretes </h3>
  </div>
  <!-- /.col-lg-12 -->
 </div>

  <div class="row">
     <form id='lembrete'>
        <div class="col-lg-12">
          <div class="panel panel-default">

            <div class="panel-body">
              <div class="row">
                <div class="col-lg-12">
                  <div class="col-lg-6">
                    <div class="form-group">

                       <label>Data</label>
                      <input type='date'  id="data" name="data_lembrete" class="form-control" value=<?php echo "$data_lembrete"?>>
	
                     <label>Cliente</label>
                      <input  id="cliente" name="cliente" class="form-control" value=<?php echo "$nome_cli"?>>
                     


                      <label>Descrição</label>
                      <textarea  rows="3" id="descricao" name="descricao" class="form-control"><?php echo "$descricao"?></textarea>
                     


                    </div>
                  </div>


                </div>

              </div>
            </div>


          </div>
        <input id="id_lembrete" name='id_lembrete' type="hidden" value=<?php echo "$id_lembrete"?>>
        
    <div class='col-lg-12' id='resultado'></div>

    <button id='submit_edit_lem' type="submit" class="btn btn-default btn-lg btn-block">Atualizar</button>

    <?php

      if($status == 'A'){
      echo "<button  id='submit_inat_lem' type='submit' class='btn btn-default btn-lg btn-block'>Inativar</button>";}


     else{

echo "<button  id='submit_ativar_lem' type='submit' class='btn btn-default btn-lg btn-block'>Ativar</button>";


     };

     ?>
    

  </div>
</form>
      </div>
       </div>
</body>
</html>
 

