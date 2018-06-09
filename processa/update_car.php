<?php
include  "../processa/conecta.php";

    $sql = $mysqli->prepare('UPDATE carros set marca=?,modelo=?,versao=?,placa=?,ano=?,ano_modelo=?,tipo_combustivel=?,cor=? where id=?');

$sql->bind_param('ssssssssi',$_POST['marca'] ,$_POST['modelo'] ,$_POST['versao'] ,$_POST['placa'],$_POST['ano'],$_POST['ano_modelo'],$_POST['tipo_combustivel'],$_POST['cor'],$_POST['id_carro']);
    $sql->execute();
  

   if($sql->error){
    
echo "<div class='alert alert-danger'>
                    <strong>Error!</strong> Erro ao atualizar, $sql->error.
                </div>";
}
 
else{



$sql = $mysqli->prepare('UPDATE carro_cliente set id_cliente=? where id_carro=?');

$sql->bind_param('ii',$_POST['proprietario'] ,$_POST['id_carro']);
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
}




?>