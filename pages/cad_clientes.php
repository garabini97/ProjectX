 <?php include 'navbar.php';
 include  "../processa/conecta.php";


 $sql = $mysqli->prepare('select id,nome,email,telefone,celular from clientes limit 10');
 $sql->execute();
 $sql->bind_result($id,$nome,$email,$telefone,$celular); 
 $sql->store_result();


 ?>



 <div class="row">
  <div class="col-lg-12">
    <h3 class="page-header">Controle de clientes</h3>
  </div>
  <!-- /.col-lg-12 -->
</div>

<div class="row">

  <ul class="nav nav-tabs">
    <li class="active"><a href="#home" data-toggle="tab">Cadastro</a>
    </li>
    <li><a href="#profile" data-toggle="tab">Atualizar</a>
    </li>
  </ul>
  <div class="tab-content">
    <div class="tab-pane fade in active" id="home">
      <form id='cliente'>
        <div class="row">
          <div class="col-lg-12">
            <div class="panel panel-default">
              <div class="panel-heading">
                Informações básicas
              </div>

              <div class="panel-body">
                <div class="row">
                  <div class="col-lg-12">

                    <div class="form-group">

                      <label>Cpf</label>
                      <input id="cpf" name="cpf" class="form-control">
                      <label>Nome</label>
                      <input id="nome" name="nome" class="form-control">
                      <label>Login</label>
                      <input id="login" name="login" class="form-control">
                      <label>Sexo</label>
                      <input id="sexo" name="sexo" class="form-control">
                      <label>Senha</label>
                      <input id="senha" name="senha" class="form-control">
                      <label>Confirme a senha</label>
                      <input id="c_senha" name="c_senha" class="form-control">

                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="panel panel-default">
              <div class="panel-heading">

                Endereço

              </div>

              <div class="panel-body">

                <div class="row">

                  <div class="col-lg-12">

                    <div class="form-group">
                      <label>Cep</label>
                      <input id="cep" name="cep" class="form-control"> 
                      <label>Rua</label>
                      <input id="rua" name="rua" class="form-control"> 
                      <label>Complemento</label>
                      <input id="complemento" name="complemento" class="form-control"> 
                      <label>Numero</label>
                      <input id="numero" name="numero" class="form-control"> 
                      <label>Bairro</label>
                      <input id="bairro" name="bairro" class="form-control"> 
                      <label>Cidade</label>
                      <input id="cidade" name="cidade" class="form-control"> 
                      <label>Estado</label>
                      <input id="estado" name="estado" class="form-control"> 


                    </div>
                  </div>


                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="panel panel-default">
              <div class="panel-heading">

                Formas de contato
              </div>

              <div class="panel-body">

                <div class="row">

                  <div class="col-lg-12">

                    <div class="form-group">
                      <label>Email</label>
                      <input id="email" name="email" class="form-control"> 
                      <label>Telefone</label>
                      <input id="telefone" name="telefone" class="form-control"> 
                      <label>Celular</label>
                      <input id="celular" name="celular" class="form-control"> 
                      
                    </div>
                  </div>


                </div>
              </div>

              

            </div>
          </div>
          <div class='col-lg-12' id='resultado'></div>
          <button id="submit_cliente" type="submit" class="btn btn-default btn-lg btn-block">Cadastrar</button>
          <input id="funcao" name='funcao' type="hidden" value="cad_cliente" >
        </div>

      </form>
    </div>



    <div class="tab-pane fade" id="profile">

      <div class="row">
        <div class="col-lg-12">
          <div class="panel panel-default">
            <div class="panel-heading">

              Lista de clientes
            </div>
            <div class="panel-body">

              <div class="input-group custom-search-form">
                <input type="text" class="form-control" placeholder="Digite o nome do cliente">
                <span class="input-group-btn">
                  <button class="btn btn-default" type="button">
                    <i class="fa fa-search"></i>
                  </button>
                </span>
              </div>
              <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                  <tr>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Telefone</th>
                    <th>Celular</th>
                    <th>Ações</th>
                  </tr>
                </thead>

                <tbody>

                  <?php while ($sql->fetch()){
                    echo " <tr class='odd gradeX'>
                    <td>$nome</td>
                    <td>$email</td>
                    <td>$telefone</td>
                    <td>$celular</td>
                    <td><a href='edit_clientes.php?id=$id'><i class='fa  fa-pencil    fa-fw'></i>Editar</a>
                    <a href='car_cli.php?id=$id'><i class='fa   fa-car    fa-fw'></i>Ver carros</a></td>
                    </tr>
                    ";
                  }?>
              




              </tbody>
            </table>
            <!-- /.table-responsive -->

          </div>
          <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
      </div>
      <!-- /.col-lg-12 -->
    </div>
  </div>
</div>
</div>

</div>
</body>
</html>




