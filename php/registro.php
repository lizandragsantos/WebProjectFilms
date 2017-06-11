<!DOCTYPE html>
<html>
      <head>
      <title>Registro</title>
          <?php
			include "conexao.php";

			$emailerr = $senhaerr = $rsenhaerr = $nomeerr = $sobrenomeerr = $dtnascimentoerr = $cpferr = $telefoneerr = $sexoerr = $enderecoerr = $numeroerr = $bairroerr = $cidadeerr = $uferr = "";
			$email = $senha = $rsenha = $nome = $sobrenome = $cpf = $sexo = $telefone = $celular = $outro = $endereco = $cep = $complemento = $bairro = $cidade = $uf = "";
			$dtnascimento = $numero = 0;
			$cod_pessoa = "";
			$conexao = "";
			$error = 0;

			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				if (empty($_POST["email"])) {
					$emailerr = "Favor preencher o campo 'e-mail'";
					$error = 1;
				}else{
					$email = test_input($_POST["email"]);
				}
				
				if (empty($_POST["senha"])) {
					$senhaerr = "Favor preencher o campo 'senha'";
					$error = 1;
				}else{
					$senha = test_input($_POST["senha"]);
				}

				if (empty($_POST["rsenha"])) {
					$rsenhaerr = "Favor repetir a senha";
					$error = 1;
				}else{
					$rsenha = test_input($_POST["rsenha"]);
					if ($senha != $rsenha) {
						$rsenhaerr = "Senha de confirmação diferente";
						$error = 1;
					}
				}

				if (empty($_POST["nome"])) {
					$nomeerr = "Favor preencher o campo 'nome'";
					$error = 1;
				}else{
					$nome = test_input($_POST["nome"]);
				}

				if (empty($_POST["sobrenome"])) {
					$sobrenomeerr = "Favor preencher o campo 'sobrenome'";
					$error = 1;
				}else{
					$sobrenome = test_input($_POST["sobrenome"]);
				}

				if (empty($_POST["dtnascimento"])) {
					$dtnascimentoerr = "Favor preencher o campo 'data de nascimento'";
					$error = 1;
				}else{
					$dtnascimento = test_input($_POST["dtnascimento"]);
				}

				if (empty($_POST["cpf"])) {
					$cpferr = "Favor preencher o campo 'CPF'";
					$error = 1;
				}else{
					$cpf = test_input($_POST["cpf"]);
				}

				if (empty($_POST["telefone"])) {
					$telefoneerr = "Favor preencher o campo 'telefone'";
					$error = 1;
				}else{
					$telefone = test_input($_POST["telefone"]);
				}

				if (empty($_POST["sexo"])) {
					$sexoerr = "Favor selecionar o sexo";
					$error = 1;
				}else{
					$sexo = test_input($_POST["sexo"]);
				}

				if (empty($_POST["endereco"])) {
					$enderecoerr = "Favor preencher o campo 'endereco'";
					$error = 1;
				}else{
					$endereco = test_input($_POST["endereco"]);
				}

				if (empty($_POST["numero"])) {
					$numeroerr = "Favor preencher o campo 'numero'";
					$error = 1;
				}else{
					$numero = test_input($_POST["numero"]);
				}

				if (empty($_POST["bairro"])) {
					$bairroerr = "Favor preencher o campo 'bairro'";
					$error = 1;
				}else{
					$bairro = test_input($_POST["bairro"]);
				}

				if (empty($_POST["cidade"])) {
					$cidadeerr = "Favor preencher o campo 'cidade'";
					$error = 1;
				}else{
					$cidade = test_input($_POST["cidade"]);
				}

				if (empty($_POST["uf"])) {
					$uferr = "Favor selecionar o estado";
					$error = 1;
				}else{
					$uf = test_input($_POST["uf"]);
				}
				$complemento = test_input($_POST["complemento"]);
				$celular = test_input($_POST["celular"]);
				$outro = test_input($_POST["outro"]);
				$cep = test_input($_POST["cep"]);

				if ($error == 0) {
					if ($conexao = connect()) {
					
					cadPessoa($nome, $sobrenome, $email, $senha, $cpf, $dtnascimento, $sexo, $conexao);
					cadEndereco($endereco, $numero, $cep, $complemento, $bairro, $cidade, $uf, $cpf, $conexao);
					cadTelefone($cod_pessoa, $telefone, $celular, $outro, $conexao);
					
					}
				closeconnection($conexao);
				}
			}


			function cadPessoa($nome, $sobrenome, $email, $senha, $cpf, $dtnascimento, $sexo, $conexao){
				$format_date = date("Y-m-d",strtotime($dtnascimento));
				$sql_cad_pessoa = "INSERT INTO pessoa(nome, sobrenome, email, senha, cpf, dtnascimento, sexo) VALUES ('$nome','$sobrenome','$email','$senha','$cpf','$format_date','$sexo');";
				$sql_select_cpf = "SELECT cpf FROM pessoa WHERE (cpf = '$cpf');";
				$consulta = $conexao->query($sql_select_cpf);
				$linha = $consulta->fetch(PDO::FETCH_ASSOC);
				$consultcpf = $linha['cpf'];

				if (is_null($consultcpf)) {
					$conexao->exec($sql_cad_pessoa) or die(print_r($conexao->errorInfo(),true));
				}else{
					$GLOBALS['cpferr'] = "CPF já cadastrado";
				}

					
			}

			function cadEndereco($endereco, $numero, $cep, $complemento, $bairro, $cidade, $uf, $cpf, $conexao){
				$sql_select_pessoa = "SELECT cod_pessoa FROM pessoa WHERE(cpf = '$cpf');";
				$consulta = $conexao->query($sql_select_pessoa);
				$linha = $consulta->fetch(PDO::FETCH_ASSOC);
				$cod_pessoa = $linha['cod_pessoa'];
				$GLOBALS['cod_pessoa'] = $cod_pessoa;
				$sql_cad_endereco = "INSERT INTO endereco(cod_pessoa, endereco, numero, cep, complemento, bairro, cidade, estado) VALUES ($cod_pessoa,'$endereco',$numero,'$cep','$complemento','$bairro','$cidade','$uf');";

				$conexao->exec($sql_cad_endereco) or die(print_r($conexao->errorInfo(),true));
			}

			function cadTelefone($cod_pessoa, $telefone, $celular, $outro, $conexao){
				$sql_cad_telefone= "INSERT INTO telefone(cod_pessoa, telefone) VALUES ($cod_pessoa,'$telefone');";
				$conexao->exec($sql_cad_telefone) or die(print_r($conexao->errorInfo(),true));
				$sql_cad_celular= "INSERT INTO telefone(cod_pessoa, telefone) VALUES ($cod_pessoa,'$celular');";
				if (is_null($celular)){
					$conexao->exec($sql_cad_celular) or die(print_r($conexao->errorInfo(),true));
				}
				$sql_cad_outro= "INSERT INTO telefone(cod_pessoa, telefone) VALUES ($cod_pessoa,'$outro');";
				if (is_null($outro)){
					$conexao->exec($sql_cad_outro) or die(print_r($conexao->errorInfo(),true));
				
				}
			}

			function test_input($data) {
			  $data = trim($data);
			  $data = stripslashes($data);
			  $data = htmlspecialchars($data);
			  return $data;
			}
?>
          <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
          <meta charset="utf-8">
          <link rel="stylesheet" type="text/css" href="../css/estilo_registro.css">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
          <script type="text/javascript" src="../javascript/jquery.mask.min.js"></script>
  		  <script>
		  $(document).ready(function(){
		  		$(function() {
					$("#nav").load("/html/navigation.html");
				});
		  	});
				$(function(){
					$("#telefone").mask("(99) 9999-9999");
					$("#celular").mask("(99) 99999-9999");
					$("#outro").mask("(99) 99999-9999");
					$("#cpf").mask("999.999.999-99");
					$("#cep").mask("99999-999")
					
				});
		  </script>

      </head>
      <body>
      
         <div id="nav"></div> 
         <div id="container">
              <div class="defaul-container">
             		<h3>Cadastro</h3>
					<p class="text-spacing">NetFilms é um aplicativo de streaming de vídeo por assinaturas, permitindo você assistir a filmes e séries quando e onde desejar.</p>
                    <p class="text-spacing">Você pode ter acesso ao catálogo por um plano mensal de ASSINATURA de R$ 10,90, sendo 7 DIAS totalmente GRÁTIS.</p>
                    <p class="text-spacing">No catálogo do NetFilms você encontra o conteúdo mais diversificado do mercado com cerca de milhares de filmes, incluindo os principais estúdios e muito outros parceiros de conteúdo do Brasil.</p> 
          	  </div>
              <form id="form-cadastro" method="post" action="cad_usuario1.php">	  
           	  		<div class="defaul-container">
						<h3>Dados de Acesso</h3>
						<div class="row justify-content-start">
							<div class="col-lg-6 col-xs-6 col-md-6 col-sm-6">
								<div class="form-group">
									<label for="email">Email:</label>
									<input type="text" class="form-control" id="email" placeholder="exemplo@exemplo.com.br" name="email">
									<span class="msg-erro"><?php echo $emailerr;?></span>
								</div>
								<div class="form-group">
									<label for="senha">Senha:</label>
									<input type="password" class="form-control" id="senha" placeholder="Digite a senha" name="senha">
									<span class="msg-erro"><?php echo $senhaerr;?></span>
								</div>
								<div class="form-group">
									<label for="rsenha">Confirmar senha:</label>
									<input type="password" class="form-control" id="rsenha" placeholder="Digite a senha" name="rsenha">
									<span class="msg-erro"><?php echo $rsenhaerr;?></span>
								</div>
							</div>
						</div>
					</div>
					<div class="defaul-container">
						<h3>Dados pessoais</h3>
						<div class="row justify-content-center">
							<div class="col-lg-6 col-xs-6 col-md-6 col-sm-6">					
								<div class="form-group">
									<label for="nome">Nome:</label>
									<input type="text" class="form-control" id="nome" placeholder="Digite o nome" name="nome">
									<span class="msg-erro "><?php echo $nomeerr;?></span>
								</div>
								<div class="form-group">
									<label for="sobrenome">Sobrenome:</label>
									<input type="text" class="form-control" id="sobrenome" placeholder="Digite o sobrenome" name="sobrenome">
									<span class="msg-erro"><?php echo $sobrenomeerr;?></span>
								</div>
								<div class="form-group">
									<label for="cpf">CPF</label>
									<input type="text" class="form-control" id="cpf" placeholder="000.000.000-00" name="cpf">
									<span class="msg-erro"><?php echo $cpferr;?></span>
								</div>
								<div class="form-group">
									<label for="example-datetime-local-input">Data de nascimento</label>
									<input type="date" class="form-control" id="dtnascimento" placeholder="DD/MM/AAAA" name="dtnascimento">
									<span class="msg-erro"><?php echo $dtnascimentoerr;?></span>
								</div>
							</div>
							<div class="col-lg-6 col-xs-6 col-md-6 col-sm-6">
								<div class="form-group">
									<label for="telefone">Telefone:</label>
									<input type="tel" class="form-control" id="telefone" placeholder="(00) 0000-0000" name="telefone">
									<span class="msg-erro"><?php echo $telefoneerr;?></span>
								</div>
								<div class="form-group">
									<label for="celular">Celular:</label>
									<input type="text" class="form-control" id="celular" placeholder="(00) 00000-0000" name="celular">
								</div>
								<div class="form-group">
									<label for="celular">Outro:</label>
									<input type="text" class="form-control" id="outro" placeholder="(00) 00000-0000" name="outro">
								</div>
								<div class="form-group">
									<label for="sexo">Sexo:</label>
										<select class="form-control" name="sexo" id="sexo">
					    					<option value="">Selecione o Sexo</option>
					    					<option value="Feminino">Feminino</option>
					    					<option value="Masculino">Masculino</option>
					  					</select>
					  				<span class="msg-erro"><?php echo $sexoerr;?></span>
			  					</div>
							</div>
						</div>
					</div>
					<div class="defaul-container">
						<h3>Endereço</h3>
						<div class="row justify-content-center">
							<div class="col-lg-6 col-xs-6 col-md-6 col-sm-6">
								<div class="form-group">
									<label for="cep">CEP:</label>
									<input type="text" class="form-control" id="cep" placeholder="00000-000" name="cep">
								</div>
								<div class="form-group">
									<label for="endereco">Endereço:</label>
									<input type="text" class="form-control" id="endereco" placeholder="Digite o endereço" name="endereco">
									<span class="msg-erro"><?php echo $enderecoerr;?></span>
								</div>
								<div class="form-group">
									<label for="numero">Número:</label>
									<input type="text" class="form-control" id="numero" placeholder="Digite o número" name="numero">
									<span class="msg-erro"><?php echo $numeroerr;?></span>
								</div>
								<div class="form-group">
									<label for="complemento">Complemento:</label>
									<input type="text" class="form-control" id="complemento" placeholder="Digite o complemento" name="complemento">
								</div>
							</div>
							<div class="col-lg-6 col-xs-6 col-md-6 col-sm-6">
								<div class="form-group">
									<label for="bairro">Bairro:</label>
									<input type="text" class="form-control" id="bairro" placeholder="Digite o bairro" name="bairro">
									<span class="msg-erro"><?php echo $bairroerr;?></span>
								</div>
								<div class="form-group">
									<label for="cidade">Cidade:</label>
									<input type="text" class="form-control" id="cidade" placeholder="Digite a cidade" name="cidade">
									<span class="msg-erro"><?php echo $cidadeerr;?></span>
								</div>
								<div class="form-group">
									<label for="uf">UF:</label>
									<select class="form-control" name="uf" id="uf">
										<option value="">--</option>
										<option value="Rio de Janeiro">Rio de Janeiro</option>
										<option value="Sao Paulo">São Paulo</option>
										<option value="Brasilia">Brasilia</option>
										<option value="Minas Gerais">Minas Gerais</option>
										<option value="Rio Grande do Sul">Rio Grande do Sul</option>
										<option value="Rio Grande do Norte">Rio Grande do Norte</option>
										<option value="Bahia">Bahia</option>
									</select>
									<span class="msg-erro"><?php echo $uferr;?></span>
								</div> 
							</div>
						</div>
						<button type="submit" class="btn btn-default">Cadastrar</button>
						<span class="msg-erro"></span>
					</div>
                </form>
			</div>
		<div id="footer">&copy; Todos os direitos reservados</div>
    </body>
    <script type="text/javascript" src="../javascript/functions.js"></script>

      
</html>