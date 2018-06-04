     <?php include 'navbar.php'; ?>

 <div class="row">
  <div class="col-lg-12">
    <h3 class="page-header">Atualização de orçamento</h3>
  </div>
  <!-- /.col-lg-12 -->
 </div>

 <div class="row">
  <div class="col-lg-12">
    <div class="panel panel-default">
     
      <div class="panel-body">
    <div class="row">
                <div class="col-lg-12">
                  <div class="col-lg-6">
                    <div class="form-group">

                      <label>Nr.do orçamento</label>
                      <input class="form-control">
                      <label>Data</label>
                      <input type='date' class="form-control">
                      <label>Cliente</label>
                      <input class="form-control">
                   <label>Carro</label>
                      <input class="form-control">



                      <label>Descrição</label>
                      <textarea class="form-control" rows="3"></textarea>

                    </div>

                    <label>Selecione os itens do orçamentos</label>
                    <select class="form-control">
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
                    <button type="button" class="btn btn-default"><i class="fa  fa-check    fa-fw"></i>Incluir</button>


                  </div>

                  <div class="col-lg-6">

                  <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                      <tr>
                        <th>Rendering engine</th>
                        <th>Browser</th>
                        <th>Platform(s)</th>
                        <th>Engine version</th>
                        <th>Alterar Cadastro</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr class="odd gradeX">
                        <td>Trident</td>
                        <td>Internet Explorer 4.0</td>
                        <td>Win 95+</td>
                        <td class="center">4</td>
                        <td class="center">

                          <a href="#"><i class="fa  fa-times    fa-fw"></i>Excluir</a>

                        </td>
                      </tr>

                    </tbody>
                  </table>

                </div>



              </div>


              
            </div>


          </div>
        </div>
     

          <button type="button" class="btn btn-default btn-lg btn-block">Atualizar</button>
          <button type="button" class="btn btn-default btn-lg btn-block">Cancelar</button>

        </div>
      </div>
       </div>
</body>
</html>
 


