 <?php include 'navbar.php';
 include  "../processa/conecta.php";


  $sql2 = $mysqli->prepare('select a.id,c.nome,car.modelo,car.placa,a.descricao,a.data,a.data_cadastro from agendamentos as a ,clientes as c,carros as car where a.id_cliente = c.id and a.id_carro = car.id');
  $sql2->execute();
  $sql2->bind_result($id_agendamento,$nome_cli,$modelo,$placa,$descricao,$data,$data_cadastro ); 
  $sql2->store_result();



  ?>
 <div class="row">
  <div class="col-lg-12">
    <h3 class="page-header">Controle de agendamentos</h3>
  </div>
  <!-- /.col-lg-12 -->
</div>

<div class="row">


  

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
  
                    <th>Carro</th>
                    <th>Descrição</th>
                     <th>Dt de cadastro</th>
                    <th>Data</th>
              
                  </tr>
                </thead>
               <tbody>

                  <?php while ($sql2->fetch()){
                    echo " <tr class='odd gradeX'>
       
                    <td>$modelo/$placa</td>
                    <td>$descricao</td>
                    <td>$data_cadastro</td>
                    <td>$data</td>
                    
                  
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
</body>
</html>

