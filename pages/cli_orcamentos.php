 <?php include 'navbar.php';
 include  "../processa/conecta.php";

  $sql2 = $mysqli->prepare('select o.id,c.nome,car.modelo,car.placa,o.observacao,o.data_cadastro from orcamento as o ,clientes as c,carros as car where o.id_cliente = c.id and o.id_carro = car.id');
  $sql2->execute();
  $sql2->bind_result($id_orc,$nome_cli,$modelo,$placa,$descricao,$data ); 
  $sql2->store_result();
  ?>

 <div class="row">
  <div class="col-lg-12">
    <h3 class="page-header">Meus orçamentos</h3>
  </div>
  <!-- /.col-lg-12 -->
</div>

<div class="row">


        <div class="col-lg-12">
          <div class="panel panel-default">
          
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
                    <th>Num.Orçamento</th>
                     <th>Cliente</th>
                    <th>Carro</th>
                    <th>Descrição</th>
                    <th>Data</th>
                    <th>Valor</th>
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
                    <td>Valor</td>
                  
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
</body>
</html>
 


