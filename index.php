<?php  
	include_once("includes/processos_php/conexao.php");
	session_start();
?>
<!DOCTYPE html>
<html style="background: radial-gradient(circle, rgba(2,0,36,1) 0%, rgba(89,0,255,1) 0%, rgba(44,9,121,1) 100%);">
	<head>
		<link rel="stylesheet" type="text/css" href="css/dashboard.css">
		<?php  
			include_once 'head.php';
		?>
	</head>
	<body>
		<!-- fazer o menuAdm, caso usuario esteje logado -->
		<?php
			if (isset($_SESSION['email'])) {
			
				include_once 'menuAdm.php';

			}else{

				include_once 'menu.php';
			}
		?>
		<div class="card-category position-top-center" style="background-image: linear-gradient(rgba(255,255,255,.2), rgba(255,255,255,.1)), url(IMAGENS/banner2.png)">
		  <!-- CAVI -->
		</div>
		<!-- filtragem -->
		<div class="uk-card uk-align-center uk-card-default uk-card-body uk-width-1-2@m ">
			<h3 class="uk-card-title">Qual o seu imovel ideal?</h3>
			<form method="get" action="index.php">
				<!-- Imagem do imovel: <input type="file" name="arquivo"><br> -->
				
				<div class="uk-margin">
					<div class="uk-inline uk-width-1-1">
						<span class="uk-form-icon" uk-icon="icon:  location"></span>
						<input class="uk-input uk-form-large" id="bairro" placeholder="Bairro" type="text" maxlength="17" name="bairro">
					</div>
				</div>
				<div class="uk-margin">
					<div class="uk-inline uk-width-1-1">
						<span class="uk-form-icon" uk-icon="icon:  location"></span>
						<input class="uk-input uk-form-large" id="rua" placeholder="Rua" type="text" maxlength="20" name="rua">
					</div>
				</div>
				<div class="uk-margin">
					<select class="uk-select" id="form-stacked-select" name="categoria">
		                <option disabled="" class="uk-text-bold">-- Residencial/urbano --</option>
		                <option value="Casa"> Casa </option>
		                <option value="Casa - condomínio"> Casa - condomínio </option>
		                <option value="Casa - kitnet"> Casa - kitnet</option>
		                <option value="Sobrado"> Sobrado </option>
		                <option value="Apartamento"> Apartamento </option>
		                <option value="Terreno"> Terreno </option>
		                <option value="Terreno - condomínio"> Terreno - condomínio </option>

		                <option disabled="" class="uk-text-bold">-- Residencial/Rural --</option>
		                <option value="Terreno"> Terreno </option>
		                <option value="Fazenda"> Fazenda </option>
		                <option value="Chacara"> Chacara </option>
		                <option value="Sitio"> Sitio </option>

		                <option disabled="" class="uk-text-bold">-- Comercial --</option>
		                <option value="Area"> Area </option>
		                <option value="Casa - Comercial"> Casa Comercial </option>
		                <option value="Sala"> Sala </option>
		                <option value="Salão"> Salão </option>
		            </select>
				</div>
				<div class="uk-margin">
		            <select class="uk-select" id="form-stacked-select" name="tipo_de_anuncio">
		                <option value="Venda"> Venda </option>
		                <option value="Aluguel"> Aluguel </option>
		            </select>
		        </div>
	            <div class="uk-margin">
					<div class="uk-inline uk-width-1-1">

						<input class="uk-input uk-form-large" placeholder="Valor R$:" type="text" name="valor" onKeyPress="return(moeda(this,'.',',',event))">
					</div>
				</div>
				<input class="uk-button uk-button-primary" type="submit" value="Filtrar" name="filtro">
			</form>
		</div>
		<div class="uk-container">
			<hr class="uk-divider-icon">
			<div class="uk-child-width-1-2@s uk-child-width-1-4@m uk-text-center" uk-grid>
				<?php
					$bairro = isset($_GET['bairro'])?$_GET['bairro']:"";
					$rua = isset($_GET['rua'])?$_GET['rua']:"";
					$categoria = isset($_GET['categoria'])?$_GET['categoria']:"";
					$tipo_de_anuncio = isset($_GET['tipo_de_anuncio'])?$_GET['tipo_de_anuncio']:"";
					$valor = isset($_GET['valor'])?$_GET['valor']:"";

					$sql = "SELECT * FROM imoveis where bairro like '%$bairro%' and rua like '%$rua%' and categoria like '%$categoria%' and tipo_de_anuncio like '%$tipo_de_anuncio%' and valor like '%$valor%'";
					$consulta = mysqli_query($conexao,$sql);
					if (mysqli_num_rows($consulta) == 0) {
				?>
					<div class="uk-card uk-align-center uk-card-default uk-card-body uk-width-1-2@m ">
						<h3 class="uk-card-title">Nenhum imovel Encontardo :(</h3><br>
						<a href="index.php" class="uk-button uk-button-danger">Cancelar</a>	
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

					                <p><?php echo $exibirRegistros["categoria"]; ?></p>
					                <p class="uk-text-truncate">
					                	<?php echo $exibirRegistros["tipo_de_anuncio"]; ?> : R$<?php echo $exibirRegistros["valor"]; ?>
					                		
					                </p>

					                	<a href="imovel.php?id=<?php echo $exibirRegistros['id_imovel']; ?>" class="uk-button uk-button-primary">Saiba Mais</a>	
					            </div>
			        		</div>
			    		</div>
				    </div>
			<?php 
					}
				} 
			?>
		</div>
		<hr class="uk-divider-icon">
		<div class="uk-container uk-margin">
				<article class="uk-article uk-card uk-card-default uk-card-body">
				    <h1 class="uk-article-title"><a class="uk-link-reset" href="">C A V I "Compra Alguel e Venda de Imoveis"</a></h1>
				    <p class="uk-article-meta">Inicio do Projeto: Janeiro 2018.<p>
				    <p class="uk-text-lead uk-text-justify">Sabemos que um dia teremos que desapegar-nos de algo, um exemplo que vemos com frequência, é desprender-se de um imóvel, quando isso acontecer temos que ir a procura de uma nova moradia. Vender, alugar ou comprar um imóvel, aos olhos de muitas pessoas podem parecer tarefas muito simples, com tudo em uma pesquisa de campo que fizemos com 40 pessoas constatou que mais de 65% delas tem uma dificuldade em executar essas tarefas, por conta de muitos fatores como os meios de locomover-se, mercantilizar e adquirir um imóvel em uma região almejada, também com essa pesquisa podemos analisar que a população tem uma grande dificuldade em comprar um imóvel'</p>
				    
				    
				</article>
				</div>
	</div>
		
	</body>
</html>