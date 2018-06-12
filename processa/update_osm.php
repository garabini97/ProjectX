<?php
include  "../processa/conecta.php";


    $sql = $mysqli->prepare('UPDATE osm set data=?,observacao=? where id=?');

$sql->bind_param('ssi',$_POST['data'] ,$_POST['descricao'],$_POST['id_osm']);
    $sql->execute();
  

   if($sql->error){
    
echo "<div class='alert alert-danger'>
                    <strong>Error!</strong> Erro ao atualizar, $sql->error.
                </div>";
}
 
else{
       $mysqli->commit();
      
        echo "<div class='alert alert-success'>
                    <strong>Sucesso!</strong>Atualizado com sucesso!
                </div>";
        ;
    }
  $sql->close();




?>