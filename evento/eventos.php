<?php

include("conexao.php");


$sqlEventos = "SELECT * FROM evento";
$selEventos = $con -> query($sqlEventos);

$evento = [];



if ($selEventos->num_rows > 0) {

	echo "<div class='row'>";
	//retorna a linha no formato de um array
	while($evento = $selEventos->fetch_assoc()){
		$id = $evento['id'];
		$titulo = $evento['TituloEvente'];
		$descricao = $evento['descricao'];
		
		$qtdVagas = $evento['qtdVagas'];
		$idAutor = $_SESSION['user']['id'];
		$autor = $_SESSION['user']['nome'];

		$sqlParticipar = "SELECT * FROM `participar` WHERE `idUsuario` = {$idAutor} AND`idEvento`= {$id}";
		$result=mysqli_query($con,$sqlParticipar);
		
		$rowcount=mysqli_num_rows($result);
		echo "<div class='evento' class='col-sm-6 poster text-center'>";
		//echo '<img src="' . $poster . '">';
		
			echo "<h1><b>Titolo:</b> {$titulo}</h1> <br>";
			echo "<h1><b>descrição:</b> {$descricao}</h1><br>";
			echo "<h1><b>Autor:</b> {$autor}</h1> <br>";
			echo "<h1><b>Vagas restantes:</b> {$qtdVagas}</h1> <br>";
			?>
			<?php if ( $rowcount == 0): ?>
				<a href="procedimentos/participarEV.php?id=<?php echo $id;?>&qtdVagas=<?php echo $qtdVagas;?>"><button class='botoon'>Participar</button></a>
			<?php else: ?>
				<button class='botoon'>Cadastrado</button>		
			<?php endif; ?>	
			
			<?php
			echo "";
		echo "</div>";
	}
	echo "</div>";
}
?>



