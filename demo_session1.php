<?php
	session_start();
	
	echo " O nome é: ".$_SESSION["name"]."<br>";
	echo "O número de telefone é:".$_SESSION["tel"]."<br>";
	
?>