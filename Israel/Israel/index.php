<?php

session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	olá,
	<?php
		if(isset($_SESSION['nome'])==null){
	?>
		visitante<br>
	<a href = "login.php">login</a>
	<?php 
	} else{ 
		echo $_SESSION['nome']; ?>
	<br><a href = "cadastro.php">cadastrar</a><br>
	<a href = "logout.php">sair</a>
	<?php } ?>	
</body>
</html>