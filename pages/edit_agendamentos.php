 <?php include 'navbar.php';
 include  "../processa/conecta.php";



 $id_agendamento = $_GET['id'];

  $sql2 = $mysqli->prepare('select c.nome,car.modelo,car.placa,a.descricao,a.data,a.status from agendamentos as a ,clientes as c,carros as car where a.id_cliente = c.id and a.id_carro = car.id and a.id = ?');

$sql2->bind_param('i',$id_agendamento);
  $sql2->execute();
  $sql2->bind_result($nome_cli,$modelo,$placa,$descricao,$data,$status); 
$sql2->fetch();
$sql2->close();



 ?>

 <div class="row">
  <div class="col-lg-12">
    <h3 class="page-header">Atualização de agendamentos</h3>
  </div>
  <!-- /.col-lg-12 -->
</div>

      <div class="row">
        <form id="agendamentos">
        <div class="col-lg-12">
          <div class="panel panel-default">

            <div class="panel-body">
              <div class="row">
                <div class="col-lg-12">
                  <div class="col-lg-6">
                    <div class="form-group">

                       <label>Data</label>
                      <input type='datetime-local' id="data" name="data" class="form-control" value=<?php echo "$data"?> >
                      <label>Cliente</label>
                      <input id="cliente" name="cliente" class="form-control" value=<?php echo "$nome_cli"?> disabled >
                      <label>Carro</label>
                      <input id="carro" name="carro" class="form-control" value=<?php echo "$modelo/$placa"?> disabled >
                      <label>Descrição</label>
                      <textarea  id="descricao" name="descricao" class="form-control" rows="3"><?php echo "$descricao"?> </textarea>
                     


                    </div>
                  </div>


                </div>

              </div>
            </div>


             </div>
 <input id="id_agendamento" name='id_agendamento' type="hidden" value=<?php echo "$id_agendamento"?>>
        
    <div class='col-lg-12' id='resultado'></div>

    <button id='submit_edit_age' type="submit" class="btn btn-default btn-lg btn-block">Atualizar</button>

  <button  id='submit_exc_age' type='submit' class='btn btn-default btn-lg btn-block'>Excluir</button>


  </div>
</form>
      </div>
       </div>
</body>
</html>
 


  
