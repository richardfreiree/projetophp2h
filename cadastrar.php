<?php 



	$nome = $_POST['nome'];
	$email = $_POST['email'];

	if($nome == "richard"&& $email == "richard@etec.cia"){
		echo "<table border=1>";
		echo "<tr>";
		echo "<td>";
		echo "<strong>Bem vindo ao sistema<strong/> <br/>";
			echo "</td>";
		echo "</tr>";
		echo "</table>";
	} else{
		echo " <strong>usuário inválido<strong/><br/>";
	}

 ?>