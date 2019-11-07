<?php  
	include_once("includes/processos_php/conexao.php")
?>
<!DOCTYPE html>
<html>
	<head>
		<?php  
			include_once 'head.php';
		?>
		<title>..:: C A V I ::..</title>
	</head>
	<body>
		<?php 
			include_once 'menu.php';
		?>
		<?php						
			$result_card = "SELECT * FROM imoveis ORDER BY id ASC";
			$resultado_card = mysqli_query($conexao, $result_card);
			while($row_card = mysqli_fetch_assoc($resultado_card)){ 
		?>
			<!--CARDDDDD-->

		<?php
			}
		?>
	</body>
</html>