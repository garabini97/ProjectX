 <?php include 'navbar.php'; ?>

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
      
      <div class="tab-pane fade in active" id="home">
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
                      <input class="form-control">
                      <label>Nome</label>
                      <input class="form-control">
                      <label>Login</label>
                      <input class="form-control">
                      <label>Senha</label>
                      <input class="form-control">
                      <label>Confirme a senha</label>
                      <input class="form-control">

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
                      <input class="form-control"> 
                      <label>Rua</label>
                      <input class="form-control"> 
                      <label>Complemento</label>
                      <input class="form-control"> 
                      <label>Numero</label>
                      <input class="form-control"> 
                      <label>Bairro</label>
                      <input class="form-control"> 
                      <label>Cidade</label>
                      <input class="form-control"> 
                      <label>Estado</label>
                      <input class="form-control"> 


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
                      <input class="form-control"> 
                      <label>Telefone</label>
                      <input class="form-control"> 
                      <label>Celular</label>
                      <input class="form-control"> 
                      
                    </div>
                  </div>


                </div>
              </div>

              
          
            </div>
            <button type="button" class="btn btn-default btn-lg btn-block">Cadastrar</button>
          </div>

          
          


          
        </div>
        
        



      </div>

      

    </div>



    <div class="tab-pane fade" id="profile">

      <div class="row">
        <div class="col-lg-12">
          <div class="panel panel-default">
            <div class="panel-heading">

              Lista de clientes
            </div>
            <div class="panel-body">
              <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                  <tr>
                    <th>Rendering engine</th>
                    <th>Browser</th>
                    <th>Platform(s)</th>
                    <th>Engine version</th>
                    <th>Ações</th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="odd gradeX">
                    <td>Trident</td>
                    <td>Internet Explorer 4.0</td>
                    <td>Win 95+</td>
                    <td class="center">4</td>
                    <td class="center">

                      <a href="edit_clientes.php"><i class="fa  fa-pencil    fa-fw"></i>Editar</a>
                        <a href="car_cli.php"><i class="fa   fa-car    fa-fw"></i>Ver carros</a>
                      

                    </td>
                  </tr>
                  <tr class="even gradeC">
                    <td>Trident</td>
                    <td>Internet Explorer 5.0</td>
                    <td>Win 95+</td>
                    <td class="center">5</td>
                    <td class="center">          
                      <a href="edit_clientes.php"><i class="fa  fa-pencil      fa-fw"></i>Editar</a>
                      <a href="car_cli.php"><i class="fa  fa-car      fa-fw"></i>Ver carros</a>

                    </td>
                  </tr>
                  <tr class="odd gradeA">
                    <td>Trident</td>
                    <td>Internet Explorer 5.5</td>
                    <td>Win 95+</td>
                    <td class="center">5.5</td>
                    <td class="center">          
                      <a href="edit_clientes.php"><i class="fa  fa-pencil    fa-fw"></i>Editar</a>
                      <a href="car_cli.php"><i class="fa  fa-car      fa-fw"></i>Ver carros</a>
                    </td>
                  </tr>
                  
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
 



