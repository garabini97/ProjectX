 <?php include 'navbar.php';
 include  "../processa/conecta.php";


  $sql = $mysqli->prepare('select id,nome from clientes');
  $sql->execute();
  $sql->bind_result($id,$nome); 
  $sql->store_result();

  $sql2 = $mysqli->prepare('select a.id,c.nome,car.modelo,car.placa,a.descricao,a.data from agendamentos as a ,clientes as c,carros as car where a.id_cliente = c.id and a.id_carro = car.id');
  $sql2->execute();
  $sql2->bind_result($id_agendamento,$nome_cli,$modelo,$placa,$descricao,$data ); 
  $sql2->store_result();



  ?>
 <div class="row">
  <div class="col-lg-12">
    <h3 class="page-header">Controle de agendamentos</h3>
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
      <form id='agendamentos'>
      <div class="row">
        <div class="col-lg-12">
          <div class="panel panel-default">

            <div class="panel-body">
              <div class="row">
                <div class="col-lg-12">
                  <div class="col-lg-6">
                    <div class="form-group">

                       <label>Data</label>
                      <input type='date' id="data" name="data" class="form-control">
	
                      <label>Selecione o cliente</label>
                      <select id='combo_proprietario' name='combo_proprietario' class="form-control">
                        <option>Selecione o proprietário</option>
                        <?php while ($sql->fetch()){
                          echo "<option value='$id'>$nome</option>
                          ";
                          }?>
                      </select>
                      <label>Selecione o carro</label>
                         <select id='combo_carro' name='combo_carro' class="form-control">
                        <option>Selecione o proprietário antes</option>
                    
                      </select>

                      <label>Descrição</label>
                      <textarea id="descricao" name="descricao" class="form-control"></textarea>
                     

                  </div>


                </div>

              </div>
            </div>



          </div>

        <input id="funcao" name='funcao' type="hidden" value="cad_agendamento" >
    <div class='col-lg-12' id='resultado'></div>
     <button type="submit" id='cad_agendamento' class="btn btn-default btn-lg btn-block">Cadastrar</button>
</div>
</div>
</div>
</form>
</div>



    
   

    <div class="tab-pane fade" id="profile">

      <div class="row">
        <div class="col-lg-12">
          <div class="panel panel-default">
            <div class="panel-heading">

              Lista de agendamentos
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
                    <td>$nome_cli</td>
                    <td>$modelo/placa</td>
                    <td>$descricao</td>
                    <td>$data</td>
                    <td><a href='edit_agendamentos.php?id=$id_agendamento'><i class='fa  fa-pencil    fa-fw'></i>Editar</a>
                  
                    </tr>
                    ";
                  }?>
              




              </tbody>
              </table><!-- /.table-responsive -->

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

