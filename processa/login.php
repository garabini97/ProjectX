<?php
include('conecta.php');
session_start();

    $sql = $mysqli->prepare('SELECT id,login from usuarios where login= ? and senha = ?  ');
    $sql->bind_param('ss',$_POST['login'],$_POST['senha']);
    $sql->execute();
    $sql->bind_result($id,$login);
    $sql->store_result();
    $sql->fetch();
    if(($sql->num_rows()) > 0){


         $_SESSION['id'] = $id;
        $_SESSION['login'] = $login;
		$_SESSION['tipo'] = 'U';
            
echo '<script>top.location.href="index.html";</script>';
}

else{

  $sql = $mysqli->prepare('SELECT id,login from clientes where login= ? and senha = ?  ');
    $sql->bind_param('ss',$_POST['login'],$_POST['senha']);
    $sql->execute();
    $sql->bind_result($id,$login);
    $sql->store_result();
    $sql->fetch();
 	if(($sql->num_rows()) > 0){


         $_SESSION['id'] = $id;
        $_SESSION['login'] = $login;
		$_SESSION['tipo'] = 'C';
            
echo '<script>top.location.href="index.html";</script>';

}


 else{

    
echo "<div class='alert alert-danger'>
                   Usuário ou senha incorretos, tente novamente.
                </div>";

            

}
}

       
       

		
?>