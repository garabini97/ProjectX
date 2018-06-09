 <?php include 'navbar.php';
 include  "../processa/conecta.php";

 $id_item = $_GET['id'];


 $sql = $mysqli->prepare('select id,descricao,valor,status from itens where id=?' );
$sql->bind_param('i',$id_item);
 $sql->execute();
 $sql->bind_result($id,$descricao,$valor,$status); 
$sql->fetch();
$sql->close();






 ?>

 <div class="row">
  <div class="col-lg-12">
    <h3 class="page-header">Controle de itens</h3>
  </div>
  <!-- /.col-lg-12 -->
 </div>
 <div class="row">
        <div class="col-lg-12">
          <form id='item'>
       <div class="panel panel-default">

            <div class="panel-body">
              <div class="row">
                <div class="col-lg-12">
                  <div class="col-lg-6">
                    <div class="form-group">

                     
                      <label>Descrição</label>
                      <input  id="descricao" name="descricao" class="form-control" value=<?php echo "$descricao"?>>
                      <label>Valor</label>
                      <input  id="valor" name="valor" class="form-control" value=<?php echo "$valor"?>>

                    </div>
                  </div>
                  
                 
                </div>

              </div>
            </div>

       
         </div>
 <input id="id_item" name='id_item' type="hidden" value=<?php echo "$id_item"?>>
        
    <div class='col-lg-12' id='resultado'></div>

    <button id='submit_edit_item' type="submit" class="btn btn-default btn-lg btn-block">Atualizar</button>

  <?php

      if($status == 'A'){
      echo "<button  id='submit_inat_item' type='submit' class='btn btn-default btn-lg btn-block'>Inativar</button>";}


     else{

echo "<button  id='submit_ativar_item' type='submit' class='btn btn-default btn-lg btn-block'>Ativar</button>";


     };

     ?>

</form>
  </div>

      </div>
       </div>
</body>
</html>
 

