<?php
include  "../processa/conecta.php";



if(isset($_POST['funcao']) && $_POST['funcao'] == 'cad_cliente'){



$sql = $mysqli->prepare('INSERT INTO clientes(cpf,nome,login,senha,email,telefone,celular,cep,endereco,complemento,numero,bairro,cidade,estado,sexo)
    VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)');

$sql->bind_param('sssssssssssssss',$_POST['cpf'] ,$_POST['nome'] ,$_POST['login'] ,$_POST['senha'],$_POST['email'],$_POST['telefone'],$_POST['celular'],$_POST['cep'],$_POST['rua'],$_POST['complemento'],$_POST['numero'],$_POST['bairro'],$_POST['cidade'],$_POST['estado'],$_POST['sexo']);
$mysqli->autocommit(FALSE);

$sql->execute();


    if($sql->error){
    
echo "<div class='alert alert-danger'>
                    <strong>Error!</strong> Erro ao cadastrar, $sql->error.
                </div>";
}
 
else{

        echo "<div class='alert alert-success'>
                    <strong>Sucesso!</strong> Cadastrado com sucesso.
                </div>";
        $mysqli->commit();
        $sql->close();
    }
}


if(isset($_POST['funcao']) && $_POST['funcao'] == 'cad_usuario'){



$sql = $mysqli->prepare('INSERT INTO usuarios(cpf,nome,login,senha,email,telefone,celular)
    VALUES(?,?,?,?,?,?,?)');

$sql->bind_param('sssssss',$_POST['cpf'] ,$_POST['nome'] ,$_POST['login'] ,$_POST['senha'],$_POST['email'],$_POST['telefone'],$_POST['celular']);
$mysqli->autocommit(FALSE);

$sql->execute();


    if($sql->error){
    
echo "<div class='alert alert-danger'>
                    <strong>Error!</strong> Erro ao cadastrar, $sql->error.
                </div>";
}
 
else{

        echo "<div class='alert alert-success'>
                    <strong>Sucesso!</strong> Cadastrado com sucesso.
                </div>";
        $mysqli->commit();
        $sql->close();
    }
}

if(isset($_POST['funcao']) && $_POST['funcao'] == 'cad_carros'){



  $sql = $mysqli->prepare('INSERT INTO carros(marca,modelo,versao,placa,ano,ano_modelo,tipo_combustivel,cor)
  VALUES(?,?,?,?,?,?,?,?)');

$sql->bind_param('ssssssss',$_POST['marca'] ,$_POST['modelo'] ,$_POST['versao'] ,$_POST['placa'],$_POST['ano'],$_POST['ano_modelo'],$_POST['tp_combustivel'],$_POST['cor']);
$mysqli->autocommit(FALSE);

$sql->execute();


    if($sql->error){
    
echo "<div class='alert alert-danger'>
                    <strong>Error!</strong> Erro ao cadastrar, $sql->error.
                </div>";
}
 
else{
         $sql = $mysqli->prepare('INSERT INTO carro_cliente(id_carro,id_cliente)
         VALUES(LAST_INSERT_ID(),?)');

        $sql->bind_param('i',$_POST['proprietario']);
        $mysqli->autocommit(FALSE);

        $sql->execute();




        echo "<div class='alert alert-success'>
                    <strong>Sucesso!</strong> Cadastrado com sucesso.
                </div>";
        $mysqli->commit();
        $sql->close();
    }
}



if(isset($_POST['funcao']) && $_POST['funcao'] == 'cad_item'){



$sql = $mysqli->prepare('INSERT INTO itens(descricao,valor)
    VALUES(?,?)');

$sql->bind_param('ss',$_POST['descricao'] ,$_POST['valor']);
$mysqli->autocommit(FALSE);
$sql->execute();


    if($sql->error){
    
echo "<div class='alert alert-danger'>
                    <strong>Error!</strong> Erro ao cadastrar, $sql->error.
                </div>";
}
 
else{

        echo "<div class='alert alert-success'>
                    <strong>Sucesso!</strong> Cadastrado com sucesso.
                </div>";
        $mysqli->commit();
        $sql->close();
    }
}


if(isset($_POST['funcao']) && $_POST['funcao'] == 'cad_lembretes'){



$sql = $mysqli->prepare('INSERT INTO lembretes(id_usuarios,descricao,data_lembrete) VALUES(?,?,?)');

$sql->bind_param('iss',$_POST['combo_destinatario'],$_POST['descricao'] ,$_POST['data']);
$mysqli->autocommit(FALSE);
$sql->execute();


    if($sql->error){
    
echo "<div class='alert alert-danger'>
                    <strong>Error!</strong> Erro ao cadastrar, $sql->error.
                </div>";
}
 
else{

        echo "<div class='alert alert-success'>
                    <strong>Sucesso!</strong> Cadastrado com sucesso.
                </div>";
        $mysqli->commit();
        $sql->close();
    }
}
