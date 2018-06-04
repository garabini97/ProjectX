 <?php include 'navbar.php'; ?>

 <div class="row">
  <div class="col-lg-12">
    <h3 class="page-header">Controle de carros - Usuário</h3>
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
</div>
</div>
</body>
</html>
