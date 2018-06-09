 <?php include 'navbar.php';
 include  "../processa/conecta.php";


  
 $id_cliente = $_GET['id'];

$sql = $mysqli->prepare('select id,marca,modelo,placa,ano from carros as c,carro_cliente as cl where cl.id_cliente = ? and c.id = cl.id_carro');
$sql->bind_param('i',$id_cliente);
 $sql->execute();
 $sql->bind_result($id,$marca,$modelo,$placa,$ano); 
  $sql->store_result();

$sql1 = $mysqli->prepare('select nome from clientes where id= ?');
$sql1->bind_param('i',$id_cliente);
$sql1->execute();
 $sql1->bind_result($nome_cli); 
$sql1->fetch();




 

 ?>


 <div class="row">
  <div class="col-lg-12">
    <h3 class="page-header">Controle de carros - <?php echo "$nome_cli";?></h3>
  </div>
  <!-- /.col-lg-12 -->
 </div>

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

                  <?php while ($sql->fetch()){
                    echo " <tr class='odd gradeX'>
                    <td>$marca</td>
                    <td>$modelo</td>
                    <td>$placa</td>
                    <td>$ano</td>
                    <td><a href='edit_carros.php?id=$id'><i class='fa  fa-pencil    fa-fw'></i>Editar</a>
                  
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
</div>
</div>
</body>
</html>
