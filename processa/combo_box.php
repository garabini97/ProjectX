<?php
include  "../processa/conecta.php";





	$sql = $mysqli->prepare('SELECT id,nome from clientes ');
	$sql->execute();
	$sql->bind_result($id,$nome);
	
	echo " <option>Selecione o proprietário</option>";
		while ($sql->fetch()){
			echo "
					<option value='$id'>$nome </option>
			
				 ";
		   
		}



 
