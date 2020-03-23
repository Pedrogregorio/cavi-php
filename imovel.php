<?php 
	session_start();
	include_once 'includes/processos_php/conexao.php';
	if (isset($_GET['id'])) {
		$id = mysqli_escape_string($conexao, $_GET['id']);

		$sql = "SELECT * FROM imoveis WHERE id_imovel = '$id'";
	
		$query = mysqli_query($conexao, $sql);

		$dados_imovel = mysqli_fetch_array($query);
	}
?>
<!DOCTYPE html>
<html style="background: radial-gradient(circle, rgba(2,0,36,1) 0%, rgba(89,0,255,1) 0%, rgba(44,9,121,1) 100%);">
<head>
	<link rel="stylesheet" type="text/css" href="css/dashboard.css">
	<?php 
		include_once 'head.php';
	 ?>
	<title>Imovel</title>
</head>
<body>
	<?php
			if (isset($_SESSION['email'])) {
			
		?>
				
				<?php include_once 'menuAdm.php';?>
		<?php 
			} else{
				include_once 'menu.php';
			}
		?>
	<div class="uk-card uk-align-center uk-card-default uk-card-body uk-width-1-2@m">

		<div class="uk-margin">
			<img src="includes/processos_php/foto/<?php echo $dados_imovel['imagem']; ?>" style="width:100%;height: 100%;">
		</div>
		<ul class="uk-list uk-list-striped">
			<li>
				<div class="uk-margin">
					<strong>Nome do Vendedor:</strong> <?php echo mb_strtoupper($dados_imovel['nome_do_vendedor']); ?>
				</div>
			</li>
			<li>
				<div class="uk-margin">
					<strong>Categoria:</strong> <?php echo mb_strtoupper($dados_imovel['categoria']); ?>
				</div>
			</li>
			<li>
				<div class="uk-margin">
					<strong>Tipo de Anuncio:</strong> <?php echo mb_strtoupper($dados_imovel['tipo_de_anuncio']); ?>
				</div>
			</li>
			<li>
				<div class="uk-margin">
					<strong>Valor:</strong> <?php echo mb_strtoupper($dados_imovel['valor']); ?>
				</div>
			</li>
			<li>
				<div class="uk-margin">
					<strong>Bairro:</strong> <?php echo mb_strtoupper($dados_imovel['bairro']); ?>
				</div>
			</li>
			<li>
				<div class="uk-margin">
					<strong>Rua:</strong> <?php echo mb_strtoupper($dados_imovel['rua']); ?>
				</div>
			</li>
			<li>
				<div class="uk-margin">
					<strong>Numero:</strong> <?php echo mb_strtoupper($dados_imovel['numero']); ?>
				</div>
			</li>
			<li>
				<div class="uk-margin">
					<strong>Telefone:</strong> 	<?php echo ($dados_imovel['telefone']); ?>
				</div>
			</li>
			<li>
				<div class="uk-margin">
					<strong>Descrição:</strong><br> <?php echo ($dados_imovel['descricao']); ?>
				</div>
			</li>
		</ul>
</body>
</html>