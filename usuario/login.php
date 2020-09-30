<h1>Entrar</h1>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<?php
if (isset($_GET['erro']) ) {

	$erro = $_GET['erro'];

	if ($erro == 'empty') {

		$msg = 'Você deve informar um usuario e senha';

	
	}elseif ( $erro == 'notfound') {

		$msg = 'Usuario não encontrado.';
	
	}
	
	echo "<div class='alert alert-danger'>{$msg}</div>";
}
?>

<form action="logar.php" method="post">
	<div class="form-group">
		

		<label for="usuario">Usuário:</label>
		<input type="text" name="usuario" class="form-control" id="usuario">

	</div>

	<div class="form-group">

		<label for="senha">Senha:</label>
		<input type="password" name="senha" class="form-control" id="senha">

	</div>

	<button type="submit" class="btn btn-dark">Entrar</button>

</form>