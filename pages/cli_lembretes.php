 <?php include 'navbar.php';
 include  "../processa/conecta.php";


$id_destinatario = '11';


 $sql1 = $mysqli->prepare('select id,id_usuarios,descricao,data_cadastro,data_lembrete from lembretes where id_usuarios = ? limit 10');
 $sql1->bind_param('i',$id_destinatario);
 $sql1->execute();
 $sql1->bind_result($id_lembrete,$id_usuarios,$descricao,$data_cadastro,$data_lembrete); 
 $sql1->store_result();

 ?>
 <div class="row">
  <div class="col-lg-12">
    <h3 class="page-header">Controle de lembretes</h3>
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
      <form id='lembretes'>
      <div class="row">
        <div class="col-lg-12">
          <div class="panel panel-default">

            <div class="panel-body">
              <div class="row">
                <div class="col-lg-12">
                  <div class="col-lg-6">
                    <div class="form-group">

                       <label>Data</label>
                      <input type="datetime-local" id="data" name="data" class="form-control">
  
            
                     


                      <label>Descrição</label>
                      <textarea id="descricao" name="descricao" class="form-control" rows="3"></textarea>
                     


                    </div>
                  </div>


                </div>

              </div>
            </div>


          </div> 
           <input id="id_usuarios" name='combo_destinatario' type="hidden" value=<?php echo "$id_destinatario"?>>
  <input id="funcao" name='funcao' type="hidden" value="cad_lembretes" >
    <div class='col-lg-12' id='resultado'></div>
     <button type="submit" id='cad_lembretes' class="btn btn-default btn-lg btn-block">Cadastrar</button>

        </div>

      </div>
      </form>
    </div>
  

    <div class="tab-pane fade" id="profile">

      <div class="row">
        <div class="col-lg-12">
           <div class="panel panel-default">
            <div class="panel-heading">

              Lista de lembretes
            </div>
            <div class="panel-body">

              <div class="input-group custom-search-form">
                <input type="text" class="form-control" placeholder="Digite a data do lembrete">
                <span class="input-group-btn">
                  <button class="btn btn-default" type="button">
                    <i class="fa fa-search"></i>
                  </button>
                </span>
              </div>
              <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                  <tr>
            
                    <th>Descrição</th>
                    <th>Dt Cadastro</th>
                    <th>Dt Lembrete</th>
                    <th>Ações</th>
                  </tr>
                </thead>
               <tbody>

                  <?php while ($sql1->fetch()){
                    echo " <tr class='odd gradeX'>
        
                    <td>$descricao</td>
                    <td>$data_cadastro</td>
                    <td>$data_lembrete</td>
                    <td><a href='edit_lembretes.php?id=$id_lembrete'><i class='fa  fa-pencil    fa-fw'></i>Editar</a>
                  
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
 




