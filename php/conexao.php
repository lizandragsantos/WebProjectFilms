<?php


function connect(){

	$servername = "localhost";
	$username = "root";
	$password = "";
	
	try {

		$conn = new PDO("mysql:host=$servername;dbname=netfilms", $username, $password);

		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   		echo "Conectado com sucesso";
   		return $conn; 
  		
	} catch (PDOExceptio $e) {
	
		echo "Conexao falhou: " . $e->getMessage();	
		return false;
	}
}	
function closeconnection($connect){
	$connect = null;
	if (!(is_null($connect))) {
		echo"Impossivel fechar a conexão";
		return false;
	}else{
		echo "Conexao encerrada!";
		return true;
	}
}

?>