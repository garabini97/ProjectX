<?php
include  "../processa/conecta.php";


    $sql = $mysqli->prepare('UPDATE usuarios set cpf=?,nome=?,login=?,senha=?,email=?,telefone=?,celular=? where id=?');

$sql->bind_param('sssssssi',$_POST['cpf'] ,$_POST['nome'] ,$_POST['login'] ,$_POST['senha'],$_POST['email'],$_POST['telefone'],$_POST['celular'],$_POST['id_usuario']);
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