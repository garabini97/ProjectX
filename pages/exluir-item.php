<?php
include  "../processa/conecta.php";


    $sql = $mysqli->prepare('DELETE from iten_orcamento where id=?');

$sql->bind_param('i',$_POST['id']);
    $sql->execute();
  

   if($sql->error){
    
echo "<div class='alert alert-danger'>
                    <strong>Error!</strong> Erro ao excluir, $sql->error.
                </div>";
}
 
else{
       $mysqli->commit();
      
        echo "<div class='alert alert-success'>
                    <strong>Sucesso!</strong>Excluido com sucesso!
                </div>";
        ;
    }
  $sql->close();




?>