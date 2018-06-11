<?php
include  "../processa/conecta.php";





    $sql = $mysqli->prepare('UPDATE orcamento set status= "A" where id=?');

$sql->bind_param('i',$_POST['id_orc']);
    $sql->execute();
  

   if($sql->error){
    
echo "<div class='alert alert-danger'>
                    <strong>Error!</strong> Erro ao inativar, $sql->error.
                </div>";
}
 
else{
       $mysqli->commit();
      
        echo "<div class='alert alert-success'>
                    <strong>Sucesso!</strong>Ativado com sucesso!
                </div>";
        ;
    }
  $sql->close();




?>