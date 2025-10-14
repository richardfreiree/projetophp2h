<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Formularios</title>
</head>
<body>

	<h1>Formularios</h1>
	<form action="cadastrar.php"method="post">
		<label for="nome">nome:</label>
		 <input type="text" name="nome" id="nome">
		 <label for="email">email:</label>
		 <input type="email" name="email" id="email">
		<input type="submit" name="enviar">
		<button>Cadastrar</button>
	</form>

	<a href="<?php echo "oi"; ?>">executando</a>
</body>
</html>