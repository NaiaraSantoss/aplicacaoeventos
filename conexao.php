<?php


// Definir fuso Horário
date_default_timezone_set("America/Sao_Paulo");



//conecxao

$con = new mysqli("127.0.0.1", "root" ,"" , "ST");

if ($con-> connect_error ) {
	die('Erro na conexao :' . $con-> connect_error);
}

?>