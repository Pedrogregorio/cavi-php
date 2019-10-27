<?php  
	session_start();

	include_once 'verifica_login.php'
?>

<h2><?php echo $_SESSION['email'];  ?></h2>
<h2><a href="logout.php">sair</a></h2>