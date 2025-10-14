<?php 



	$nome = $_POST['nome'];
	$email = $_POST['email'];

	if($nome == "richard"&& $email == "richard@etec.cia"){
		echo "válido <br/>";
	} else{
		echo "nao válido <br/>";
	}

 ?>