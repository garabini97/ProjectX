 <?php include 'navbar.php';
 include  "../processa/conecta.php";


  $sql = $mysqli->prepare('select id,nome from clientes');
  $sql->execute();
  $sql->bind_result($id,$nome); 
  $sql->store_result();

  $sql2 = $mysqli->prepare('select o.id,c.nome,car.modelo,car.placa,o.observacao,o.data_cadastro from osm as o ,clientes as c,carros as car where o.id_cliente = c.id and o.id_carro = car.id');
  $sql2->execute();
  $sql2->bind_result($id_orc,$nome_cli,$modelo,$placa,$descricao,$data ); 
  $sql2->store_result();


    $sql3 = $mysqli->prepare('select id,descricao,valor from itens');
  $sql3->execute();
  $sql3->bind_result($id_item,$descricao,$valor); 
  $sql3->store_result();



  ?>
 <div class="row">
  <div class="col-lg-12">
    <h3 class="page-header">Controle de ordens de serviço</h3>
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
        <form id='orcamento'>
        <div class="col-lg-12">
          <div class="panel panel-default">

            <div class="panel-body">
              <div class="row">
                <div class="col-lg-12">
                  <div class="col-lg-6">
                    <div class="form-group">

                      <label>Data</label>
                      <input type='date'  id="data" name="data" class="form-control">
                      <label>Selecione o cliente</label>
                      <select id='combo_proprietario' name='combo_proprietario' class="form-control">
                        <option>Selecione o cliente</option>
                        <?php while ($sql->fetch()){
                          echo "<option value='$id'>$nome</option>
                          ";
                          }?>
                      </select>
                      <label>Selecione o carro</label>
                      <select id='combo_carro' name='combo_carro' class="form-control">
                        <option>Selecione o cliente antes</option>
                    
                      </select>


                        <label>Descrição</label>
                      <textarea id="descricao" name="descricao" class="form-control"></textarea>
                     
                    </div>

  <input id="funcao" name='funcao' type="hidden" value="cad_orcamento" >
    <div class='col-lg-12' id='resultado'></div>
     <button type="submit" id='cad_orcamento' class="btn btn-default btn-lg btn-block">Cadastrar</button>
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
                     <th>Id</th>
                     <th>Cliente</th>
                    <th>Carro</th>
                    <th>Descrição</th>
                    <th>Data</th>
                    <th>Ações</th>
                  </tr>
                </thead>
               <tbody>

                  <?php while ($sql2->fetch()){
                    echo " <tr class='odd gradeX'>
                      <td>$id_orc</td>
                    <td>$nome_cli</td>
                    <td>$modelo/placa</td>
                    <td>$descricao</td>
                    <td>$data</td>
                    <td><a href='lancamento_itens.php?id=$id_orc'><i class='fa  fa-pencil    fa-fw'></i>Lançamento de itens</a><a href='det_os.php?id=$id_orc'><i class='fa  fa-pencil    fa-fw'></i>Editar</a>
                  
                    </tr>
                    ";
                  }?>
              




              </tbody>
              </table>
              </div>
            </div>
          </div>
</div>
</div>
</div>
</div>
</div>
</body>
</html>
