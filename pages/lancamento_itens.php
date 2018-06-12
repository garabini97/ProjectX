 <?php include 'navbar.php'; ?>

 <div class="row">
  <div class="col-lg-12">
    <h3 class="page-header">Controle de ordens de serviço</h3>
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
                    



                  <label>Selecione os itens da OS</label>
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
                      <th>ID</th>
                      <th>Nome</th>
                      <th>Valor</th>
                      <th>Ações</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="odd gradeX">
                      <td>2</td>
                      <td>Suspensão - FIAT - PALIO</td>
                      <td>R$800,00</td>
                      
<td>
                        <a href="#"><i class="fa  fa-times    fa-fw"></i>Excluir</a>
</td>
                      </td>
                    </tr>

                  </tbody>
                </table>

              </div>

</div>

            </div>



          </div>



        </div>

      
      </div>
    </div>
  </div>

  <div class="tab-pane fade" id="profile">

    <div class="row">
      <div class="col-lg-12">
        <div class="panel panel-default">
          <div class="panel-heading">

            Lista de ordens de serviço
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

                    <a href="det_os.php"><i class="fa  fa-plus-circle     fa-fw"></i>Detalhes</a>
                    

                  </td>
                </tr>
                <tr class="even gradeC">
                  <td>Trident</td>
                  <td>Internet Explorer 5.0</td>
                  <td>Win 95+</td>
                  <td class="center">5</td>
                  <td class="center">          
                    <a href="det_os.php"><i class="fa  fa-plus-circle     fa-fw"></i>Detalhes</a>
                    


                  </td>
                </tr>
                <tr class="odd gradeA">
                  <td>Trident</td>
                  <td>Internet Explorer 5.5</td>
                  <td>Win 95+</td>
                  <td class="center">5.5</td>
                  <td class="center">          
                   <a href="det_os.php"><i class="fa fa-plus-circle     fa-fw"></i>Detalhes</a>


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
