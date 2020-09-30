<!-- adicionar usuarios -->
<?php
	

	
	include("../conexao.php");


	$nome = $_POST['nome'];
	$telefone = $_POST['telefone'];
	$email = $_POST['email'];
	$senha =sha1( $_POST['senha']);
	
	

	$sql = "INSERT INTO `usuario`( `nome`, `telefone`, `email`, `senha`) VALUES ('$nome','$telefone','$email','$senha')";
	if (mysqli_query($con, $sql)) {
		header("Location: ../usuario/logar.php");
	 } else {
		echo "Error: " . $sql . "<br>" . mysqli_error($con);
	 }

	//header("Location: ../usuario/login.php");

?>