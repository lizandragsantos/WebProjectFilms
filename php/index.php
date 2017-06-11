<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<?php
	include "conexao.php";

	$emailerr = $senhaerr= $email = $senha ="";

	session_start();

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if (empty($_POST["email"])) {
			$emailerr = "Favor preencher o campo 'e-mail'";
		}else{
			$email = test_input($_POST["email"]);
		}
		if (empty($_POST["senha"])) {
			$senhaerr = "Favor preencher o campo 'senha'";
		}else{
			$senha = test_input($_POST["senha"]);
		}

		if ($conexao = connect()) {

		buscaLogin($email, $senha, $conexao);
			
		}
		closeconnection($conexao);
	}

	function buscaLogin($email, $senha, $conexao){
		$sql_select_login = "SELECT * FROM pessoa WHERE ((email = '$email') AND (senha = '$senha'));";
		$consulta = $conexao->query($sql_select_login);
		$result = $consulta->fetch(PDO::FETCH_ASSOC);

		if ($result) {
			$_SESSION["email"] = $email;
			$_SESSION["senha"] = $senha;
			header("location:http://netfilms/php/netfilms.php");
			
		}else{
			unset ($_SESSION["email"]);
			unset ($_SESSION["senha"]);
			header("http://netfilms/php/index.php");
			$senhaerr = "usuário ou senha incorreta";
			
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
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
	
	<script type="text/javascript">
       function abreLink(){
          window.location.assign("registro.php");
       }
    </script>
    <style type="text/css">
    	#container{
    		height: 625px;
    	}
		#footer{
		  padding: 1.5rem 0;
		  border-top: 1px solid #999999;
		  font-family: 'Roboto', sans-serif;
		  font-size: 1.125rem;
		  color: #999999;
		  text-align: center;
		  height: 25px
		  
		}
		.msg-erro{
			color: red;
			display: block;
		}
    </style>
</head>
<body>
	<div class="container" id="container">
		<div class="col-md-12">
		    <div class="modal-dialog" style="margin-bottom:0; margin-top: 100px">
		        <div class="modal-content">
		            <div class="panel-heading">
		                <h3 class="panel-title">Acesso</h3>
		            </div>
		            <div class="panel-body">
		                <form role="form" id="form-acesso" action="index.php" method="post">
		                    <fieldset>
		                        <div class="form-group">
		                            <input class="form-control" id="email" placeholder="E-mail" name="email" type="email">
		                            <span class="msg-erro msg-email"><?php echo $emailerr;?></span>
		                        </div>
		                        <div class="form-group">
		                            <input class="form-control" id="senha" placeholder="senha" name="senha" type="password">
		                            <span class="msg-erro msg-senha"><?php echo $senhaerr;?></span>
		                        </div>
		                        <div class="checkbox">
		                            <label>
		                                <input name="remember" type="checkbox" value="Remember Me">Lembrar-me
		                            </label>
		                        </div>
		                        <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-ok-sign"></span> Acessar</button>
		                        <!--<input type="submit" class="btn btn-default" value="Acessar">-->
		                        <a class="btn btn-primary" href="#" onclick="abreLink()" target="_self"> Cadastrar-se</a>
		                    </fieldset>
		                </form>
		            </div>
		        </div>
		    </div>
		</div>
	</div>
	
<div id="footer">&copy; Todos os direitos reservados</div>
</body>
<!--<script type="text/javascript" src="../javascript/validacao_form.js"></script>-->
</html>