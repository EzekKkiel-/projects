<?php

	function conexao() {
		try {
			$pdo = new PDO("mysql:host=localhost;dbname=faceduty", "root", "ezeksoft8080");
		} catch(PDOExeption $e) {
			echo "Erro: ".$e->getMessage();
		}
		return $pdo;
	}
	
	$conn = conexao();
	
	$inserir = $conn->prepare("INSERT INTO usuarios(nome, snome, email, senha)VALUES(:nome, :snome, :email, :senha)");
	$inserir->bindValue(":nome", "EZEQUIEL_____");
	$inserir->bindValue(":snome", "MORAES______");
	$inserir->bindValue(":email", "eze@e.ee3");
	$inserir->bindValue(":senha", md5("ezequiel"));

	$seleciona = $conn->prepare("SELECT * FROM usuarios WHERE email=?");
	$seleciona->execute(array("eze@e.ee3"));
	
	if($seleciona->rowCount() == 0):
		echo "<h1>GRAVOU!</h1>";$inserir->execute();
	else:
		echo "<h2>EXISTE!</h2>";
	endif;
	
	
	