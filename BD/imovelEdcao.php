<?php  
	session_start();
	include_once 'includes/processos_php/verifica_login.php';
	include_once 'includes/processos_php/conexao.php';
	if (isset($_GET['id'])) {
		$id = mysqli_escape_string($conexao, $_GET['id']);

		$sql = "SELECT * FROM imoveis WHERE id_imovel = '$id'";
	
		$query = mysqli_query($conexao, $sql);

		$dados_imovel = mysqli_fetch_array($query);
	}
?>
<head>
	<?php include_once 'head.php';?>
	<script type="text/javascript" >
	    function limpa_formulário_cep() {
	            //Limpa valores do formulário de cep.
	            document.getElementById('rua').value=("");
	            document.getElementById('bairro').value=("");
	    }

	    function meu_callback(conteudo) {
	        if (!("erro" in conteudo)) {
	            //Atualiza os campos com os valores.
	            document.getElementById('rua').value=(conteudo.logradouro);
	            document.getElementById('bairro').value=(conteudo.bairro);
	            
	        } //end if.
	        else {
	            //CEP não Encontrado.
	            limpa_formulário_cep();
	            alert("CEP não encontrado.");
	        }
	    }
	        
	    function pesquisacep(valor) {

	        //Nova variável "cep" somente com dígitos.
	        var cep = valor.replace(/\D/g, '');

	        //Verifica se campo cep possui valor informado.
	        if (cep != "") {

	            //Expressão regular para validar o CEP.
	            var validacep = /^[0-9]{8}$/;

	            //Valida o formato do CEP.
	            if(validacep.test(cep)) {

	                //Preenche os campos com "..." enquanto consulta webservice.
	                document.getElementById('rua').value="...";
	                document.getElementById('bairro').value="...";

	                //Cria um elemento javascript.
	                var script = document.createElement('script');

	                //Sincroniza com o callback.
	                script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

	                //Insere script no documento e carrega o conteúdo.
	                document.body.appendChild(script);

	            } //end if.
	            else {
	                //cep é inválido.
	                limpa_formulário_cep();
	                alert("Formato de CEP inválido.");
	            }
	        } //end if.
	        else {
	            //cep sem valor, limpa formulário.
	            limpa_formulário_cep();
	        }
	    };

    </script>
    <script language="javascript">   
function moeda(a, e, r, t) {
    let n = ""
      , h = j = 0
      , u = tamanho2 = 0
      , l = ajd2 = ""
      , o = window.Event ? t.which : t.keyCode;
    if (13 == o || 8 == o)
        return !0;
    if (n = String.fromCharCode(o),
    -1 == "0123456789".indexOf(n))
        return !1;
    for (u = a.value.length,
    h = 0; h < u && ("0" == a.value.charAt(h) || a.value.charAt(h) == r); h++)
        ;
    for (l = ""; h < u; h++)
        -1 != "0123456789".indexOf(a.value.charAt(h)) && (l += a.value.charAt(h));
    if (l += n,
    0 == (u = l.length) && (a.value = ""),
    1 == u && (a.value = "0" + r + "0" + l),
    2 == u && (a.value = "0" + r + l),
    u > 2) {
        for (ajd2 = "",
        j = 0,
        h = u - 3; h >= 0; h--)
            3 == j && (ajd2 += e,
            j = 0),
            ajd2 += l.charAt(h),
            j++;
        for (a.value = "",
        tamanho2 = ajd2.length,
        h = tamanho2 - 1; h >= 0; h--)
            a.value += ajd2.charAt(h);
        a.value += r + l.substr(u - 2, u)
    }
    return !1
}
 </script>  
  <script type="text/javascript">
        function mascara(telefone){ 
            if(telefone.value.length == 0)
                telefone.value = '(' + telefone.value; 
            if(telefone.value.length == 3)
                telefone.value = telefone.value + ') 9 '; 
 
            if(telefone.value.length == 11)
                telefone.value = telefone.value + '-';
  
}
    </script>
		<title>..:: C A V I ::..</title>

		<link rel="stylesheet" type="text/css" href="css/dashboard.css">
	</head>
	<body> 
		
		<?php include_once 'menuAdm.php' ?>
		<!-- Mesnsagem -->
		<?php 
			if (isset($_SESSION['msg'])) {
				if ($_SESSION['msg'] == "Imovel cadastrado com Sucesso!.") {
					$stl = "success";
				}else{
					$stl = "danger";
				}
		?>
				<div class="uk-alert-<?php echo $stl ?>" uk-alert>
				    <a class="uk-alert-close" uk-close></a>
				    <p><?php echo $_SESSION['msg']; ?></p>
				</div>

		<?php
			}
			unset($_SESSION['msg']);
		?>
		<!-- fimMensagem -->

			
		<!-- informaçõe imovel -->
		<div class="uk-container uk-margin">
		<div class="uk-card uk-align-center uk-card-red uk-card-body uk-width-1-2@m">
			<h3 class="uk-text-center uk-text-whi">Atualização das informações do Imovel</h3>
			<p class="uk-text-justify">Acresente, exclua ou edite alguma informação sobre o imovel anunciado.</p>
			
			<form method="POST" action="includes/processos_php/atualizaImovel.php" enctype="multipart/form-data">
				<input type="hidden" name="id" value="<?php echo $dados_imovel['id_imovel'] ?>">
				<div class="uk-margin">
					<div class="uk-inline uk-width-1-1">
						<span class="uk-form-icon" uk-icon="icon:  user"></span>
						<input class="uk-input uk-form-large" placeholder="Nome do Vendedor" value="<?php echo $dados_imovel["nome_do_vendedor"]; ?>" type="text" maxlength="50" name="nome">
					</div>
				</div>
				<div uk-form-custom="target: true">
		            <input type="file" name="arquivo">
		            <input class="uk-input uk-form-width-medium" value="imovel" type="text" placeholder="Selecione uma Imagem" disabled>
		        </div>
				<!-- Imagem do imovel: <input type="file" name="arquivo"><br> -->
				<div class="uk-margin">
					<div class="uk-inline uk-width-1-1">
						<span class="uk-form-icon" uk-icon="icon:  location"></span>
						<input class="uk-input uk-form-large" id="cep" placeholder="CEP" value="79062120" onblur="pesquisacep(this.value);" type="text" maxlength="17" name="cep" autofocus>
					</div>
				</div>
				<div class="uk-margin">
					<div class="uk-inline uk-width-1-1">
						<span class="uk-form-icon" uk-icon="icon:  location"></span>
						<input class="uk-input uk-form-large" id="bairro" placeholder="Bairro do Imovel" type="text" maxlength="17" name="bairro">
					</div>
				</div>
				<div class="uk-margin">
					<div class="uk-inline uk-width-1-1">
						<span class="uk-form-icon" uk-icon="icon:  location"></span>
						<input class="uk-input uk-form-large" id="rua" placeholder="Rua do Imovel" type="text" maxlength="20" name="rua">
					</div>
				</div>
				<div class="uk-margin">
					<div class="uk-inline uk-width-1-1">
						<span class="uk-form-icon" uk-icon="icon:  home"></span>
						<input class="uk-input uk-form-large" placeholder="Numero de Imovel" value="<?php echo $dados_imovel["numero"]; ?>" type="tel" maxlength="6" name="numero">
					</div>
				</div>
				<select class="uk-select" id="form-stacked-select" value="<?php echo $dados_imovel["categoria"]; ?>" name="categoria">
	                <option value="Casa"> Casa </option>
	                <option value="Apartamento"> Apartamento </option>
	                <option value="Terreno"> Terreno </option>
	                <option value="Fazenda"> Fazenda </option>
	                <option value="Chacara"> Chacara </option>
	                <option value="Salão"> Salão </option>
	            </select><br>
	            <select class="uk-select" id="form-stacked-select" value="<?php echo $dados_imovel["tipo_de_anuncio"]; ?>" name="tipo_de_anuncio">
	                <option value="Venda"> Venda </option>
	                <option value="Aluguel"> Aluguel </option>
	            </select><br>
	            <div class="uk-margin">
					<div class="uk-inline uk-width-1-1">

						<input class="uk-input uk-form-large" placeholder="Valor do Imovel R$:" value="<?php echo $dados_imovel["valor"]; ?>" type="text" name="valor" onKeyPress="return(moeda(this,'.',',',event))">
					</div>
				</div>
				<div class="uk-margin">
					<div class="uk-inline uk-width-1-1">
						<span class="uk-form-icon" uk-icon="icon:  phone"></span>
						<input class="uk-input uk-form-large" id="telefone" placeholder="(XX) X XXXX-XXXX" value="<?php echo $dados_imovel["telefone"]; ?>" maxlength="16" type="text" name="telefone" onkeypress="mascara(this)">
					</div>
				</div>
				<div class="uk-margin">
		            <textarea class="uk-textarea" rows="5" name="descricao" value="<?php echo $dados_imovel["descricao"]; ?>" placeholder="Breve Descrição(Possiveis acordos, Requisitos para a posse do Imovel, caracteristicas mais detaladas, etc...)"></textarea>
		        </div>
				<input type="submit" class="uk-button uk-button-primary" value="Atualizar">
			</form>
		</div>
		
	</div>
	</body>