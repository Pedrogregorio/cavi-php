<?php  
	session_start();
	include_once 'includes/processos_php/verifica_login.php';
	include_once 'includes/processos_php/conexao.php';
?>

<!DOCTYPE html>
<html>
<head>
	<?php include_once 'head.php';?>
	<title></title>
</head>
<body>
	<?php include_once 'menuI.php' ?>
	<div class="uk-container">
			
			<div class="uk-child-width-1-2@s uk-child-width-1-4@m uk-text-center" uk-grid>
			<?php
					$email = $_SESSION['email'];
					$sql = "SELECT * FROM imoveis where email = '$email'";
					$consulta = mysqli_query($conexao,$sql);
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
				        	<div class="uk-card uk-card-red">
					            <div class="uk-card-media-top">
					                <img src="includes/processos_php/foto/<?php echo $exibirRegistros["imagem"]; ?>" style="width:100%;height: 200px;">
					            </div>
					            <div class="uk-card-body">

					                <p class="uk-text-bold uk-text-truncate" ><?php echo mb_strtoupper($exibirRegistros["bairro"]); ?></p>
					                <p> <?php echo $exibirRegistros["categoria"]; ?><br><?php echo $exibirRegistros["tipo_de_anuncio"]; ?> : R$<?php echo $exibirRegistros["valor"]; ?></p>

					                	<p><a href="imovelEdcao.php?id=<?php echo $exibirRegistros['id_imovel']; ?>" class="uk-button uk-button-primary">Editar</a></p>
					                	<p><a href="includes/processos_php/deletarImovel.php?id=<?php echo $exibirRegistros['id_imovel']; ?>" class="uk-button uk-button-danger">Deletar</a></p>	
					            </div>
			        		</div>
			    		</div>
				    </div>
			<?php } ?>
			</div>
		</div>
	</div>

			
</body>
</html>