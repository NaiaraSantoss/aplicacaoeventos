<?php
// logar.php


	include("../conexao.php");
	session_start();
	if (isset($_POST['usuario']) && isset($_POST['senha']) ) {

		$usuario = $_POST['usuario'];
		$senha = sha1($_POST['senha']);

		$sql = "SELECT * FROM usuario 
				WHERE nome='{$usuario}' AND senha = '{$senha}'";

				$sel = mysqli_query($con, $sql);
				
				if ($sel->num_rows) { //usuario existe
					
						
					$_SESSION['logado'] = true;
					$_SESSION['user']   = $sel->fetch_assoc();

					header("Location: ../main.php?sec=evento/eventos");
					
			    }else {  //usuario nao encontardo
					header("Location: login.php?erro=notfound");
				}
		
	}else {
		header("Location: login.php?erro=empty");
	}

?>