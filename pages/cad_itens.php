 <?php include 'navbar.php';
 include  "../processa/conecta.php";


 $sql = $mysqli->prepare('select id,descricao,valor from itens limit 10');
 $sql->execute();
 $sql->bind_result($id,$descricao,$valor); 
 $sql->store_result();


 ?>

 <div class="row">
  <div class="col-lg-12">
    <h3 class="page-header">Controle de itens</h3>
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
      <form id='cad_item'>
      <div class="row">
        <div class="col-lg-12">
          <div class="panel panel-default">

            <div class="panel-body">
              <div class="row">
                <div class="col-lg-12">
                  <div class="col-lg-6">
                    <div class="form-group">

                     
                      <label>Descrição</label>
                      <input id="descr" name="descricao" class="form-control">
                      <label>Valor</label>
                      <input id="valor" name="valor" class="form-control">


                    </div>
                  </div>
                  
                 
                </div>

              </div>
            </div>

       
          </div>

      <div class='col-lg-12' id='resultado'></div>
            <button id="submit_item" type="submit" class="btn btn-default btn-lg btn-block">Cadastrar</button>
            <input id="funcao" name='funcao' type="hidden" value="cad_item" >

        </div>

      </div>
      </form>
    </div>


    <div class="tab-pane fade" id="profile">

      <div class="row">
        <div class="col-lg-12">
          <div class="panel panel-default">
            <div class="panel-heading">

              Lista de itens
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
                    <th>Id</th>
                    <th>Descrição</th>
                    <th>Valor</th>
                    <th>Ações</th>
                  </tr>
                </thead>

                <tbody>

                  <?php while ($sql->fetch()){
                    echo " <tr class='odd gradeX'>
                    <td>$id</td>
                    <td>$descricao</td>
                    <td>$valor</td>
                    <td><a href='edit_itens.php?id=$id'><i class='fa  fa-pencil    fa-fw'></i>Editar</a></
                    
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

