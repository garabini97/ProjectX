<?php
include  "../processa/conecta.php";


$sql2 = $mysqli->prepare('select c.id,marca,modelo,placa,ano from carros as c,carro_cliente as cl where c.id = cl.id_carro and cl.id_cliente = ?');
$sql2->bind_param('i',$_POST['combo_proprietario']);
  $sql2->execute();
  $sql2->bind_result($id,$marca,$modelo,$placa,$ano); 
  $sql2->store_result();


			echo	"	 <option>Selecione o carro</option>";

                      while ($sql2->fetch()){

                         echo	" <option value='$id'>$modelo $placa</option>";
                          
                          }
		   
		



 
