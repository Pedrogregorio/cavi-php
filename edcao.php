<?php  
	session_start();
	include_once 'includes/processos_php/verifica_login.php';
	include_once 'includes/processos_php/conexao.php';
?>

<!DOCTYPE html>
<html style="background: radial-gradient(circle, rgba(2,0,36,1) 0%, rgba(89,0,255,1) 0%, rgba(44,9,121,1) 100%);">
<head>
	<link rel="stylesheet" type="text/css" href="css/dashboard.css">
	<?php include_once 'head.php';?>
</head>
<body>
	<?php include_once 'menuAdm.php' ?>
	<div class="uk-container  uk-margin">
		<!-- Msg Deletado -->
		<?php 
			if (isset($_SESSION['msg_deletar'])) {
				if ($_SESSION['msg_deletar'] == "Imovel Deletado") {
					$stl = "success";
				}else{
					$stl = "danger";
				}
		?>
				<div class="uk-alert-<?php echo $stl;?>" uk-alert>
				    <a class="uk-alert-close" uk-close></a>
				    <p><?php echo $_SESSION['msg_deletar']; ?></p>
				</div>

		<?php
			}
			unset($_SESSION['msg_deletar']);
		?>
		<!-- Msg Atualização -->
		<?php 
			if (isset($_SESSION['msg_at'])) {
				if ($_SESSION['msg_at'] == "Imovel atualizado com Sucesso!") {
					$stl = "success";
				}else{
					$stl = "danger";
				}
		?>
				<div class="uk-alert-<?php echo $stl;?>" uk-alert>
				    <a class="uk-alert-close" uk-close></a>
				    <p><?php echo $_SESSION['msg_at']; ?></p>
				</div>

		<?php
			}
			unset($_SESSION['msg_at']);
		?>
		
		<div class="uk-child-width-1-2@s uk-child-width-1-4@m uk-text-center" uk-grid>
		<?php
			$email = $_SESSION['email'];
			$sql = "SELECT * FROM imoveis where email = '$email'";
			$consulta = mysqli_query($conexao,$sql);
			if (mysqli_num_rows($consulta) == 0) {
		?>
			<div class="uk-card uk-align-center uk-card-default uk-card-body uk-width-1-2@m ">
				<h3 class="uk-card-title">Você nao tem Imoveis cadastrados</h3>	
			</div>
		<?php
			}else{
				while ($exibirRegistros = mysqli_fetch_array($consulta)) {
							/*
								$id = $exibirRegistros["id"];
								$nome = $exibirRegistros["nome_do_vendedor"];
								$bairro = $exibirRegistros["bairro"];
								$rua = $exibirRegistros["rua"];
								$publicacao = $exibirRegistros["publicação"];
								$imagem = $exibirRegistros["imagem"];
								$categoria = $exibirRegistros["categoria"];
								$tipo = $exibirRegistros["tipo_de_anuncio"];
								$valor = $exibirRegistros["valor"];
								$descricao = $exibirRegistros["descricao"];
								*/
				?>
					<div>
				        <div>
				        	<div class="uk-card uk-card-default">
					            <div class="uk-card-media-top">
					                <img src="includes/processos_php/foto/<?php echo $exibirRegistros["imagem"]; ?>" style="width:100%;height: 200px;">
					            </div>
					            <div class="uk-card-body">

					                <p class="uk-text-bold uk-text-truncate" ><?php echo mb_strtoupper($exibirRegistros["bairro"]); ?></p>
					                <p> <?php echo $exibirRegistros["categoria"]; ?><br><?php echo $exibirRegistros["tipo_de_anuncio"]; ?> : R$<?php echo $exibirRegistros["valor"]; ?></p>

					                	<a href="imovelEdcao.php?id=<?php echo $exibirRegistros['id_imovel']; ?>" class="uk-button uk-button-primary" uk-icon="icon: file-edit"></a>
					                	<a uk-icon="icon: trash" href="#modal-example" uk-toggle   href="includes/processos_php/deletarImovel.php?id=<?php echo $exibirRegistros['id_imovel']; ?>" class="uk-button uk-button-danger"></a>
										<!-- modal de confirmação -->
					                	<div id="modal-example" uk-modal>
										    <div class="uk-modal-dialog uk-modal-body">
										        <h2 class="uk-modal-title">Tem certeza?</h2>
										        <p>Apos a confirmação, mais nenhum usuario tera acesso ao imovel.</p>
										        <p class="uk-text-right">
										            <button class="uk-button uk-button-default uk-modal-close" type="button">Cancelar</button>
										            <a  href="includes/processos_php/deletarImovel.php?id=<?php echo $exibirRegistros['id_imovel']; ?>" class="uk-button uk-button-danger" type="button">Deletar</a>
										        </p>
										    </div>
										</div>
					            </div>
			        		</div>
			    		</div>
				    </div>
			<?php 
				}
					} 

			?>
			</div>
		</div>
	</div>

			
</body>
</html>