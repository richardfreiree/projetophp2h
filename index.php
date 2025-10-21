<!DOCTYPE html>
<html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Formulário de cadastro</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/styles.css">

</head>
<body>


	<main class="container-md">
	<h1>Cadastro de Usuários</h1>
		<form action="#" method="post"> 
			<div class="md-3">
			<label for="primeiroNome">Primeiro Nome</label>
			<input type="text" name="primeiroNome" id="primeiroNome" placeholder="Insira o Primeiro Nome" maxlength="50" required autofocus>
		</div>
		<div class="md-3">
			<label for="sobrenome">Sobrenome</label>
			<input type="text" name="sobrenome" id="sobrenome" placeholder="Insira o Sobrenome" maxlength="50" required>
		</div>
		<div class="md-3">
			<label for="escolhaPets">Escolha seu Pet</label>
			<select id="escolhaPets" name="escolhaPets">
				<option value="nenhum">Nenhum</option>	
				<option value="cachorro">Cachorro</option>	
				<option value="peixe">Peixe</option>
				<option value="passaro">Pássaro</option>
			</select>
			</div>
			<div class="md-3">
			<button type="submit" id="enviar" class="btn btn-primary">Enviar</button>
			</div>
			<div class="md-3">
			<button type="reset" id="limpar" class="btn btn-secondary">Limpar</button>
			</div>
		</form>
	</main>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous" ></script>
</body>
</html>