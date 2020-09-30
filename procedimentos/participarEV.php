<!-- adicionar usuarios -->
<?php
	

	
	include("../conexao.php");
	 session_start();

	
	$idUsuario = $_SESSION['user']['id'];
	

	if (isset($_GET['id'])) {
		$idEvento = $_GET['id'];
	}

	if (isset($_GET['qtdVagas'])) {
		$qtdVagas = $_GET['qtdVagas'];
		$qtdVagas = $qtdVagas - 1;
	}	

	$sqlParticipar = "INSERT INTO `participar`(`idUsuario`, `idEvento`) VALUES ('$idUsuario','$idEvento')";
	$sqlUpdEv = "UPDATE `evento` SET `qtdVagas` = '$qtdVagas' WHERE `evento`.`id` = '$idEvento'";
	if (mysqli_query($con, $sqlUpdEv)) {
		mysqli_query($con, $sqlParticipar  );
		//echo "Error: " . $sqlUpdEv . "<br>" . mysqli_error($con);
		header("Location: ../main.php?sec=evento/eventos");
		
	 } else {
		echo "Error: " . $sqlUpdEv . "<br>" . mysqli_error($con);
	 }

	//header("Location: ../usuario/login.php");

?>