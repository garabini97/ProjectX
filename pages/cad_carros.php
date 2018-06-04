 <?php include 'navbar.php'; ?>

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
        <div class="col-lg-12">
          <div class="panel panel-default">

            <div class="panel-body">
              <div class="row">
                <div class="col-lg-12">
                  <div class="col-lg-6">
                    <div class="form-group">

                      
                      <label>Selecione o proprietário</label>
                      <select class="form-control">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                      </select>
                      

                      <label>Marca</label>
                      <input class="form-control">
                      <label>Modelo</label>
                      <input class="form-control">
                      <label>Versão</label>
                      <input class="form-control">
                      <label>Placa</label>
                      <input class="form-control">


                    </div>
                  </div>
                  
                  <div class="col-lg-6">
                    

                    <div class="form-group">
                      <label>Ano</label>
                      <input class="form-control">
                      <label>Ano/modelo</label>
                      <input class="form-control">
                      <label>Tipo de combustivel</label>
                      <input class="form-control">
                      <label>Cor</label>
                      <input class="form-control">

                    </div>
                  </div>
                </div>

              </div>
            </div>

       
          </div>

     <button type="button" class="btn btn-default btn-lg btn-block">Cadastrar</button>

        </div>

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

                      <a href="edit_carros.php"><i class="fa  fa-pencil    fa-fw"></i>Editar</a>
                      

                    </td>
                  </tr>
                  <tr class="even gradeC">
                    <td>Trident</td>
                    <td>Internet Explorer 5.0</td>
                    <td>Win 95+</td>
                    <td class="center">5</td>
                    <td class="center">          
                      <a href="edit_carros.php"><i class="fa  fa-pencil    fa-fw"></i>Editar</a>
                      

                    </td>
                  </tr>
                  <tr class="odd gradeA">
                    <td>Trident</td>
                    <td>Internet Explorer 5.5</td>
                    <td>Win 95+</td>
                    <td class="center">5.5</td>
                    <td class="center">          
                      <a href="edit_carros.php"><i class="fa  fa-pencil    fa-fw"></i>Editar</a>

                      
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
