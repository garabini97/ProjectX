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
                      <input  id="id" name="id" class="form-control" value=<?php echo "$id"?>>
                      <label>Data</label>
                      <input type='date' id="data" name="data" class="form-control" value=<?php echo "$data"?>>
                      <label>Cliente</label>
                      <input class="form-control" id="cliente" name="cliente" class="form-control" value=<?php echo "$nome_cli"?>>
                   <label>Carro</label>
                      <input class="form-control" id="carro" name="carro" class="form-control" value=<?php echo "$carro"?>>



                      <label>Descrição</label>
                      <textarea class="form-control" id="descricao" name="descricao" class="form-control"><?php echo "$descricao"?>></textarea>

                    </div>

                    
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
 


