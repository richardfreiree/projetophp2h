<?php 

if ($_SERVER['REQUEST_METHOD'] == 'get') {
	$primeiroNome = $_POST['primeiroNome'];
$sobrenome = $_POST['sobrenome'];
$escolhaPets = $_POST['escolhaPets'];

echo($primeiroNome . " - " . $sobrenome . " - " . $escolhaPets);

echo '<br><br><a href="../index.php">Voltar</a>';

// header("location: ../index.php");
} else{
	echo "É post";
}


?>