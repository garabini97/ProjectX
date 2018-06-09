 <?php include 'navbar.php';
 include  "../processa/conecta.php";


 $id_cliente = $_GET['id'];


 $sql = $mysqli->prepare('select id,cpf,nome,login,senha,email,telefone,celular,cep,endereco,complemento,numero,bairro,cidade,estado,sexo,status from clientes where id=?');
$sql->bind_param('i',$id_cliente);
 $sql->execute();
 $sql->bind_result($id,$cpf,$nome,$login,$senha,$email,$telefone,$celular,$cep,$endereco,$complemento,$numero,$bairro,$cidade,$estado,$sexo,$status); 
$sql->fetch();
 ?>



 <div class="row">

 	<div class="col-lg-12">
 		<h3 class="page-header">Atualização de clientes</h3>
 	</div>
 	<!-- /.col-lg-12 -->
 </div>

 <div class="row">
<form id='cliente'>
 	<div class="col-lg-12">
 		<div class="panel panel-default">
 			<div class="panel-heading">
 				Informações básicas
 			</div>
 			<div class="panel-body">
 				<div class="row">
 					<div class="col-lg-12">
 						<div class="form-group">
							


 							<label>Cpf</label>
 							<input id="cpd" name="cpf" class="form-control" value=<?php echo "$cpf"?>>
 							<label>Nome</label>
 							<input id="nome" name="nome" class="form-control" value=<?php echo "$nome"?>>
 							<label>Login</label>
 							<input id="login" name="login" class="form-control" value=<?php echo "$login"?>>
 							  <label>Sexo</label>
                     		 <input id="sexo" name="sexo" class="form-control" value=<?php echo "$sexo"?>>
 							<label>Senha</label>
 							<input id="senha" name="senha" type='password' class="form-control" value=<?php echo "$senha"?>>
 							<label>Confirme a senha</label>
 							<input id="c_senha" name="c_senha" type='password' class="form-control" value=<?php echo "$senha"?>>

 						</div>
 					</div>

 				</div>
 			</div>
 		</div>
 	</div>
 	<div class="col-lg-12">
 		<div class="panel panel-default">
 			<div class="panel-heading">

 				Endereço

 			</div>

 			<div class="panel-body">

 				<div class="row">

 					<div class="col-lg-12">

 						<div class="form-group">
 							<label>Cep</label>
 							<input id="cep" name="cep" class="form-control" value=<?php echo "$cep"?>>
 							<label>Rua</label>
 							<input id="rua" name="rua" class="form-control" value=<?php echo "$endereco"?>> 
 							<label>Complemento</label>
 							<input id="complemento" name="complemento" class="form-control" value=<?php echo "$complemento"?>> 
 							<label>Numero</label>
 							<input id="numero" name="numero" class="form-control" value=<?php echo "$numero"?>> 
 							<label>Bairro</label>
 							<input id="bairro" name="bairro" class="form-control" value=<?php echo "$bairro"?>> 
 							<label>Cidade</label>
 							<input id="cidade" name="cidade" class="form-control" value=<?php echo "$cidade"?>>
 							<label>Estado</label>
 							<input id="estado" name="estado" class="form-control" value=<?php echo "$estado"?>> 


 						</div>
 					</div>


 				</div>
 			</div>
 		</div>
 	</div>
 	<div class="col-lg-12">
 		<div class="panel panel-default">
 			<div class="panel-heading">

 				Formas de contato
 			</div>

 			<div class="panel-body">

 				<div class="row">

 					<div class="col-lg-12">

 						<div class="form-group">
 							<label>Email</label>
 							<input id="email" name="email" class="form-control" value=<?php echo "$email"?>> 
 							<label>Telefone</label>
 							<input id="telefone" name="telefone" class="form-control" value=<?php echo "$telefone"?>> 
 							<label>Celular</label>
 							<input id="celular" name="celular" class="form-control" value=<?php echo "$celular"?>> 

 						</div>
 					</div>


 				</div>
 			</div>


 		</div>
   			<input id="id_cliente" name='id' type="hidden" value=<?php echo "$id"?>>
 		    
    <div class='col-lg-12' id='resultado'></div>

 		<button id='submit_edit_cli' type="submit" class="btn btn-default btn-lg btn-block">Atualizar</button>

 		<?php

 			if($status == 'A'){
 			echo "<button  id='submit_inat_cli' type='submit' class='btn btn-default btn-lg btn-block'>Inativar</button>";}


 		 else{

echo "<button  id='submit_ativar_cli' type='submit' class='btn btn-default btn-lg btn-block'>Ativar</button>";


 		 };

 		 ?>
 		

 	</div>





</form>
 </div>
</div>
</body>
</html>










