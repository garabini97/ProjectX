<label>Selecione os itens do orçamentos</label>
                    <select id='combo_itens' name='combo_itens' class="form-control">
                        <option>Selecione os itens</option>
                        <?php while ($sql3->fetch()){
                          echo "<option value='$id_item'>$descricao</option>
                          ";
                          }?>
                      </select>


                    <button type="submit" id='incluir' class="btn btn-default"><i class="fa  fa-check    fa-fw"></i>Incluir</button>


                  </div>
<div class="col-lg-6">
                  <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                      <tr>
                        <th>Id</th>
                        <th>Descrição</th>
                        <th>Valor</th>
                        <th>Alterar Cadastro</th>
                      </tr>
                    </thead>
                    <tbody>
                      <div id='resultado'></div>

                     


                    </tbody>
                  </table>

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

              Lista de orçamentos
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

                      <a href="det_orc.php"><i class="fa  fa-plus-circle     fa-fw"></i>Detalhes</a>


                    </td>
                  </tr>
                  <tr class="even gradeC">
                    <td>Trident</td>
                    <td>Internet Explorer 5.0</td>
                    <td>Win 95+</td>
                    <td class="center">5</td>
                    <td class="center">          
                      <a href="det_orc.php"><i class="fa  fa-plus-circle     fa-fw"></i>Detalhes</a>



                    </td>
                  </tr>
                  <tr class="odd gradeA">
                    <td>Trident</td>
                    <td>Internet Explorer 5.5</td>
                    <td>Win 95+</td>
                    <td class="center">5.5</td>
                    <td class="center">          
                      <a href="det_orc.php"><i class="fa fa-plus-circle     fa-fw"></i>Detalhes</a>
                      

                    </td>
                  </tr>

                </tbody>
              </table>