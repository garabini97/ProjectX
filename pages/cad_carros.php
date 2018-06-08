 <?php include 'navbar.php';
 include  "../processa/conecta.php";


  $sql = $mysqli->prepare('select id,nome from clientes');
  $sql->execute();
  $sql->bind_result($id,$nome); 
  $sql->store_result();
  $sql2 = $mysqli->prepare('select id,marca,modelo,placa,ano from carros');
  $sql2->execute();
  $sql2->bind_result($id,$marca,$modelo,$placa,$ano); 
  $sql2->store_result();


  ?>

 <div class="row">
  <div class="col-lg-12">
    <h3 class="page-header">Controle de carros</h3>
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
      <div class="row">
        <form id='carros'
        <div class="col-lg-12">
          <div class="panel panel-default">

            <div class="panel-body">
              <div class="row">
                <div class="col-lg-12">
                  <div class="col-lg-6">
                    <div class="form-group">
                       <label>Proprietário</label>
                     <select id='combo_proprietario' name='proprietario' class="form-control">
                        <option>Selecione o proprietário</option>
                        <?php while ($sql->fetch()){
                          echo "<option value='$id'>$nome</option>
                          ";
                          }?>
                      </select>

                      <label>Marca</label>
                      <input id="marca" name="marca" class="form-control">
                      <label>Modelo</label>
                      <input id="modelo" name="modelo" class="form-control">
                      <label>Versão</label>
                      <input id="versao" name="versao" class="form-control">
                      <label>Placa</label>
                      <input id="placa" name="placa" class="form-control">


                    </div>
                  </div>
                  
                  <div class="col-lg-6">
                    

                    <div class="form-group">
                      <label>Ano</label>
                      <input id="ano" name="ano" class="form-control">
                      <label>Ano/modelo</label>
                      <input id="ano_modelo" name="ano_modelo" class="form-control">
                      <label>Tipo de combustivel</label>
                      <input id="tp_combustivel" name="tp_combustivel" class="form-control">
                      <label>Cor</label>
                      <input id="cor" name="cor" class="form-control">

                    </div>
                  </div>
                </div>

              </div>
            </div>

       
          </div>
    <input id="funcao" name='funcao' type="hidden" value="cad_carros" >
    <div class='col-lg-12' id='resultado'></div>
     <button type="submit" id='cad_carros' class="btn btn-default btn-lg btn-block">Cadastrar</button>
</form>
        </div>

      </div>
   

    <div class="tab-pane fade" id="profile">

      <div class="row">
        <div class="col-lg-12">
          <div class="panel panel-default">
            <div class="panel-heading">

              Lista de carros
            </div>
            <div class="panel-body">

              <div class="input-group custom-search-form">
                <input type="text" class="form-control" placeholder="Digite a placa do carro">
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

                  <?php while ($sql2->fetch()){
                    echo " <tr class='odd gradeX'>
                    <td>$marca</td>
                    <td>$modelo</td>
                    <td>$placa</td>
                    <td>$ano</td>
                    <td><a href='edit_clientes.php'><i class='fa  fa-pencil    fa-fw'></i>Editar</a>
                    <a href='car_cli.php'><i class='fa   fa-car    fa-fw'></i>Ver carros</a></td>
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
