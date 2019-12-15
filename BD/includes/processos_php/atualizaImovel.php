<?php  
	session_start();
	include_once("conexao.php");
			$email = $_SESSION['email'];
			$arquivo = $_FILES['arquivo']['name'];
			$nome_do_vendedor = $_POST['nome'];
			$bairro = $_POST['bairro'];
			$id = $_POST['id'];
			$rua = $_POST['rua'];
			$numero = $_POST['numero'];
			$categoria = $_POST['categoria'];
			$tipo_de_anuncio = $_POST['tipo_de_anuncio'];
			$valor = $_POST['valor'];
			$descricao = $_POST['descricao'];

			// Apagar Imovel

			$sql = "SELECT imagem FROM imoveis WHERE id_imovel = '$id'";
			
			$img = mysqli_query($conexao,$sql);

			$ft_imovel = mysqli_fetch_array($img);

			if (is_file('foto/'.$ft_imovel['imagem'])) {
				$deletar = unlink('foto/'.$ft_imovel['imagem']);
			}
			
			//Pasta onde o arquivo vai ser salvo
			$_UP['pasta'] = 'foto/';
			
			//Tamanho máximo do arquivo em Bytes
			$_UP['tamanho'] = 1024*1024*100; //5mb
			
			//Array com a extensões permitidas
			$_UP['extensoes'] = array('png', 'jpg', 'jpeg', 'gif');
			
			//Renomeiar
			$_UP['renomeia'] = false;
			
			//Array com os tipos de erros de upload do PHP
			$_UP['erros'][0] = 'Não houve erro';
			$_UP['erros'][1] = 'O arquivo no upload é maior que o limite do PHP';
			$_UP['erros'][2] = 'O arquivo ultrapassa o limite de tamanho especificado no HTML';
			$_UP['erros'][3] = 'O upload do arquivo foi feito parcialmente';
			$_UP['erros'][4] = 'Não foi feito o upload do arquivo';
			
			//Verifica se houve algum erro com o upload. Sem sim, exibe a mensagem do erro
			if($_FILES['arquivo']['error'] != 0){
				die("Não foi possivel fazer o upload, erro: <br />". $_UP['erros'][$_FILES['arquivo']['error']]);
				exit; //Para a execução do script
			}
			
			//Faz a verificação da extensao do arquivo
			$extensao = strtolower(end(explode('.', $_FILES['arquivo']['name'])));
			if(array_search($extensao, $_UP['extensoes'])=== false){		
				echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/TCC-CAVI2/BD/edcao.php'>
					<script type=\"text/javascript\">
						alert(\"A imagem não foi cadastrada extesão inválida.\");
					</script>
				";
			}
			
			//Faz a verificação do tamanho do arquivo
			else if ($_UP['tamanho'] < $_FILES['arquivo']['size']){
				echo "
					<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/TCC-CAVI2/BD/edcao.php'>
					<script type=\"text/javascript\">
						alert(\"Arquivo muito grande.\");
					</script>
				";
			}
			
			//O arquivo passou em todas as verificações, hora de tentar move-lo para a pasta foto
			else{
				//Primeiro verifica se deve trocar o nome do arquivo
				if($_UP['renomeia'] == true){
					//Cria um nome baseado no UNIX TIMESTAMP atual e com extensão .jpg
					$nome_final = time().'.jpg';
				}else{
					//mantem o nome original do arquivo
					$nome_final = $_FILES['arquivo']['name'];
				}
				//Verificar se é possivel mover o arquivo para a pasta escolhida
				if(move_uploaded_file($_FILES['arquivo']['tmp_name'], $_UP['pasta']. $nome_final)){
					//Upload efetuado com sucesso, exibe a mensagem
					$query = mysqli_query($conexao, "UPDATE `imoveis` SET `nome_do_vendedor` = '$nome_do_vendedor', `bairro` = '$bairro', `rua` = '$rua', `numero` = '$numero', `imagem` = '$nome_final', `categoria` = '$categoria', `tipo_de_anuncio` = '$tipo_de_anuncio', `valor` = '$valor', `descricao` = '$descricao',`email` = '$email' WHERE id_imovel = '$id'");
					echo "
						<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/TCC-CAVI2/BD/admin.php'>
						<script type=\"text/javascript\">
							alert(\"Imovel Atualizado com Sucesso.\");
						</script>
					";	
				}else{
					//Upload não efetuado com sucesso, exibe a mensagem
					echo "
						<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/TCC-CAVI2/BD/admin.php'>
						<script type=\"text/javascript\">
							alert(\"Nao foi possivel Atualizar o Imovel.\");
						</script>
					";
				}
			}
			
?>