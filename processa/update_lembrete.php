<?php
include  "../processa/conecta.php";


    $sql = $mysqli->prepare('UPDATE lembretes set descricao=?,data_lembrete=? where id=?');

$sql->bind_param('ssi',$_POST['descricao'] ,$_POST['data_lembrete'] ,$_POST['id_lembrete']);
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