<!-- adicionar usuarios -->
<?php
	

	
	include("../conexao.php");
	 session_start();

	$TituloEvente = $_POST['TituloEvente'];
	$descricao = $_POST['descricao'];
	
	$data = date("Y-m-d H:i:s");
	$dataInicio =( $_POST['dataInicio']);
	$dataFim =( $_POST['dataFim']);
	$id = $_SESSION['user']['id'];
	$qtdVagas = $_POST['qtdVagas'];

	$sql = "INSERT INTO `evento`( `TituloEvente`, `descricao`, `dataInicio`, `dataFim`,`idUsuario`,`qtdVagas`) VALUES ('$TituloEvente','$descricao','$dataInicio','$dataFim','$id','$qtdVagas')";
	if (mysqli_query($con, $sql)) {
		header("Location: ../main.php?sec=evento/cadastrarEvento");
	 } else {
		echo "Error: " . $sql . "<br>" . mysqli_error($con);
	 }

	//header("Location: ../usuario/login.php");

?>