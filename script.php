<?php
	$nome = $_REQUEST["nome"];
    $telefone = $_REQUEST["telefone"];

	session_start();
	
	$_SESSION["name"] = $_POST["nome"];
	$_SESSION["tel"] = $_POST["telefone"];
	echo "<a href='demo_session1.php'>Vizualizar os dados digitados</a>";
 
?>