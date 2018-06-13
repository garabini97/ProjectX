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

if(isset($_POST['funcao']) && $_POST['funcao'] == 'cad_agendamento'){



$sql = $mysqli->prepare('INSERT INTO agendamentos(id_cliente,id_carro,descricao,data) VALUES(?,?,?,?)');

$sql->bind_param('iiss',$_POST['combo_proprietario'],$_POST['combo_carro'] ,$_POST['descricao'],$_POST['data']);
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

if(isset($_POST['funcao']) && $_POST['funcao'] == 'cad_orcamento'){



$sql = $mysqli->prepare('INSERT INTO orcamento(id_cliente,id_carro,observacao,data_cadastro) VALUES(?,?,?,?)');

$sql->bind_param('iiss',$_POST['combo_proprietario'],$_POST['combo_carro'] ,$_POST['descricao'],$_POST['data']);
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

if(isset($_POST['funcao']) && $_POST['funcao'] == 'cad_osm'){



$sql = $mysqli->prepare('INSERT INTO osm(id_cliente,id_carro,observacao,data) VALUES(?,?,?)');

$sql->bind_param('iis',$_POST['combo_proprietario'],$_POST['combo_carro'] ,$_POST['descricao'],$_POST['data']);
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



if(isset($_POST['funcao']) && $_POST['funcao'] == 'cad_os_item'){



$sql = $mysqli->prepare('INSERT INTO itens_orcamento(id_item,id_orcamento,quantidade,valor) VALUES(?,?,?,?)');

$sql->bind_param('iiis',$_POST['id_item'],$_POST['id_orc'],$_POST['quantidade'] ,$_POST['valor']);
$mysqli->autocommit(FALSE);
$sql->execute();


    if($sql->error){
    
echo "<div class='alert alert-danger'>
                    <strong>Error!</strong> Erro ao cadastrar, $sql->error.
                </div>";
}
 
else{
        $mysqli->commit();
        $sql->close();


$sql = $mysqli->prepare('select io.id,i.id,i.descricao,io.quantidade,io.valor,(io.valor*io.quantidade) from itens_orcamento as io,itens as i where i.id = io.id_item and io.id_orcamento = ?');
$sql->bind_param('i',$_POST['id_orc']);
  $sql->execute();
  $sql->bind_result($id,$id_item,$descricao,$quantidade,$valor,$total); 
  $sql->store_result();

echo "  <table width='100%'' class='table table-striped table-bordered table-hover' id='dataTables-example'>
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
                  <tbody>";
                   while ($sql->fetch()){


echo "   <tr class='odd gradeX'>
                      <td>$id_item</td>
                      <td>$descricao</td>
                      <td>$quantidade</td>
                      <td>$valor</td>
                      <td>$total</td>
                      <td>
                   <button id='excluir_item' type='submit' value=$id_item><i class='fa  fa-times    fa-fw'></i>Excluir</a>
                      </td>
                    </tr>"; 

                }

                    echo"
                 </tbody>
               </div>
               </table>";

 

    }
}

if(isset($_POST['funcao']) && $_POST['funcao'] == 'cad_os_item_os'){



$sql = $mysqli->prepare('INSERT INTO itens_osm(id_item,id_osm,quantidade,valor) VALUES(?,?,?,?)');

$sql->bind_param('iiis',$_POST['id_item'],$_POST['id_os'],$_POST['quantidade'] ,$_POST['valor']);
$mysqli->autocommit(FALSE);
$sql->execute();


    if($sql->error){
    
echo "<div class='alert alert-danger'>
                    <strong>Error!</strong> Erro ao cadastrar, $sql->error.
                </div>";
}
 
else{
        $mysqli->commit();
        $sql->close();


$sql = $mysqli->prepare('select io.id,i.id,i.descricao,io.quantidade,io.valor,(io.valor*io.quantidade) from itens_osm as io,itens as i where i.id = io.id_item');
  $sql->execute();
  $sql->bind_result($id,$id_item,$descricao,$quantidade,$valor,$total); 
  $sql->store_result();

echo "  <table width='100%'' class='table table-striped table-bordered table-hover' id='dataTables-example'>
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
                  <tbody>";
                   while ($sql->fetch()){


echo "   <tr class='odd gradeX'>
                      <td>$id_item</td>
                      <td>$descricao</td>
                      <td>$quantidade</td>
                      <td>$valor</td>
                      <td>$total</td>
                      <td>
                   <button id='excluir_item' type='submit' value=$id_item><i class='fa  fa-times    fa-fw'></i>Excluir</a>
                      </td>
                    </tr>"; 

                }

                    echo"
                 </tbody>
               </div>
               </table>";

 
    }
}