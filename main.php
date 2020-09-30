<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles/global.css">
  <link rel="stylesheet" href="styles/home.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400;700&display=swap" rel="stylesheet"> 
  <title>Event+</title>
</head>
<body>
  <div id="container">
    <div class="content">
    	<div class="nav-user">
			<?php session_start(); ?>
			
			<h3>seja bem vindo <?php echo $_SESSION['user']['nome']; ?> </h3>
			
		</div>
      <div class="logoContent">  
        <h1>
          <img src="Assets/img/logoEvent.png" alt="Logo Event+">
        </h1>
      </div>
        <a href="main.php?sec=evento/cadastrarEvento"><button id="Criar">Crie seus eventos</button></a>
        <a href="main.php?sec=evento/eventos"><button id="Participar">Participe de eventos</button></a>
    </div>
    
    <!-- Inicio container-fluid site-main -->
		<section id="Background"  class="container-fluid site-main">
			
			<!-- Inicio container -->
			<div  class="container">

				<!-- Inicio Class row -->
			    <div  class="row">

					<?php
					//verificando qual pagina sera incluida no meio do site
					if (isset($_GET['sec'])) {

						// seçoes aceitaveis para inclusao
						$secoes = ['evento/cadastrarEvento','evento/eventos'];
						$sec = $_GET['sec'];

						if (in_array($sec, $secoes)) { //existe esta secao
							include( $sec . ".php");
						}else{ // nao existe
							include("main.php'");
						}
					}else{
						include('main.php');

					}

					?>
				</div>
				<!-- Fim class row-->
			</div>
			<!-- Fim container -->
		</section>
		<!-- Fim container-fluid site-main -->
  </div>    
</body>
</html> 