 <?php include 'navbar.php';
 include  "../processa/conecta.php";


 $id_usuario = $_GET['id'];


 $sql = $mysqli->prepare('select id,cpf,nome,login,senha,email,telefone,celular,status from usuarios where id=?');
$sql->bind_param('i',$id_usuario);
 $sql->execute();
 $sql->bind_result($id,$cpf,$nome,$login,$senha,$email,$telefone,$celular,$status); 
$sql->fetch();
 ?>


 <div class="row">
  <div class="col-lg-12">
    <h3 class="page-header">Atualização de usuários</h3>
  </div>
  <!-- /.col-lg-12 -->
 </div>
<form id='usuario'>
      <div class="row">

        <div class="col-lg-6">
          <div class="panel panel-default">
            <div class="panel-heading">
              Informações básicas
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group">

                      <label>Cpf</label>
              <input id="cpd" name="cpf" class="form-control" value=<?php echo "$cpf"?>>
              <label>Nome</label>
              <input id="nome" name="nome" class="form-control" value=<?php echo "$nome"?>>
              <label>Login</label>
              <input id="login" name="login" class="form-control" value=<?php echo "$login"?>>
              <label>Senha</label>
              <input id="senha" name="senha" type='password' class="form-control" value=<?php echo "$senha"?>>
              <label>Confirme a senha</label>
              <input id="c_senha" name="c_senha" type='password' class="form-control" value=<?php echo "$senha"?>>


                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="panel panel-default">
            <div class="panel-heading">

              Formas de contato
            </div>

            <div class="panel-body">

              <div class="row">

                <div class="col-lg-12">

                  <div class="form-group">
                  <label>Email</label>
              <input id="email" name="email" class="form-control" value=<?php echo "$email"?>> 
              <label>Telefone</label>
              <input id="telefone" name="telefone" class="form-control" value=<?php echo "$telefone"?>> 
              <label>Celular</label>
              <input id="celular" name="celular" class="form-control" value=<?php echo "$celular"?>> 

                  </div>
                </div>


              </div>
            </div>
          
             

        </div>


 </div>
        <input id="id_usuario" name='id_usuario' type="hidden" value=<?php echo "$id_usuario"?>>
        
    <div class='col-lg-12' id='resultado'></div>

    <button id='submit_edit_usr' type="submit" class="btn btn-default btn-lg btn-block">Atualizar</button>

    <?php

      if($status == 'A'){
      echo "<button  id='submit_inat_usr' type='submit' class='btn btn-default btn-lg btn-block'>Inativar</button>";}


     else{

echo "<button  id='submit_ativar_usr' type='submit' class='btn btn-default btn-lg btn-block'>Ativar</button>";


     };

     ?>
    

  </div>
</form>
 </div>
</body>
</html>
 



