 <?php include 'navbar.php';
 include  "../processa/conecta.php";

$id_orc = $_GET['id'];

  $sql = $mysqli->prepare('select id,descricao,valor from itens');
  $sql->execute();
  $sql->bind_result($id_item,$descricao,$valor); 
  $sql->store_result();


  $sql2 = $mysqli->prepare('select io.id,i.id,i.descricao,io.quantidade,io.valor,(io.quantidade * io.valor) from itens_orcamento as io,itens as i where i.id = io.id_item and io.id_orcamento = ?');
  $sql2->bind_param('i',$id_orc);
  $sql2->execute();
  $sql2->bind_result($id,$id_item,$descricao,$quantidade,$valor,$total); 
  $sql2->store_result();

 ?>
 <div class="row">
  <div class="col-lg-12">
    <h3 class="page-header">Lançamento de itens</h3>
  </div>
  <!-- /.col-lg-12 -->
</div>


      <div class="row">

        <form id='lanc_orc'
        <div class="col-lg-12">
          <div class="panel panel-default">

            <div class="panel-body">
              <div class="row">
                <div class="col-lg-12">
                  <div class="col-lg-6">
  
 <select id='id_item' name='id_item' class="form-control">
                        <option>Selecione os itens</option>
                        <?php while ($sql->fetch()){
                          echo "<option value='$id_item'>$descricao</option>
                          ";
                          }?>
                      </select>

     <label>Quantidade</label>
                       <input id="quantidade" name='quantidade' type="number"  class="form-control" >
                        <input id="funcao" name='funcao' type="hidden" value="cad_os_item" >
                 <input id="id_orc" name='id_orc' type="hidden" value=<?php echo "$id_orc"?>>
                    <input id="valor" name='valor' type="hidden" value=<?php echo "$valor"?>>
        
     <div class='col-lg-12' id='resultado'></div>

       <button id='submit_itens_osm' type="submit" class="btn btn-default btn-lg btn-block">Incluir</button>

                </div>
   

   <div class="col-lg-6" id='item-tabela'>
                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                  <div id='tabela-itens'>
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Nome</th>
                            <th>Quantidade</th>
                      <th>Valor</th>
                           <th>Sub-total</th>
                      <th>Ações</th>
                    </tr>
                  </thead>
                  <tbody>
             <?php       while ($sql2->fetch()){


echo "   <tr class='odd gradeX'>
                      <td>$id_item</td>
                      <td>$descricao</td>
                      <td>$quantidade</td>
                      <td>$valor</td>
                      <td>$total</td>
                      <td>
                        <button id='excluir_item' type='submit' value=$id_item><i class='fa  fa-times    fa-fw'></i>Excluir</button>
                      </td>
                    </tr>"; 

                }?>
                 </tbody>
               </div>
               </table>
             </div>
           </div>
         </div>
       </div>
     </div>
   </form>
   </div>
 </div>

      </div>

</body>
</html>
 
