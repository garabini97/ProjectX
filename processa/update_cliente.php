<?php
include  "../processa/conecta.php";


    $sql = $mysqli->prepare('UPDATE clientes set cpf=?,nome=?,login=?,senha=?,email=?,telefone=?,celular=?, cep=?,endereco=?,complemento=?,numero=?,bairro=?,cidade =?,estado=?,sexo=? where id=?');

$sql->bind_param('sssssssssssssssi',$_POST['cpf'] ,$_POST['nome'] ,$_POST['login'] ,$_POST['senha'],$_POST['email'],$_POST['telefone'],$_POST['celular'],$_POST['cep'],$_POST['rua'],$_POST['complemento'],$_POST['numero'],$_POST['bairro'],$_POST['cidade'],$_POST['estado'],$_POST['sexo'],$_POST['id']);
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