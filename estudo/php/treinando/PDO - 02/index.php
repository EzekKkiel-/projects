<?php

	require_once("conexao.php");

	$pdo = conexao();

	// GRAVA
	$query = $pdo->prepare("INSERT INTO usuarios(nome, snome, email, senha)VALUES(:nome, :snome, :email, :senha)");
	$query->bindValue(":nome", "EEZZEEKKIIEELL");
	$query->bindValue(":snome", "MMOORRAAEESS MMEELLOO");
	$query->bindValue(":email", "contato@MICROSOFT.COM");
	$query->bindValue(":senha", "10101202023030340404");
	$query->execute();

	if($query->rowCount() > 0) {
		echo "Gravou";
	} else {
		echo "Erro";
	}

	// SELECIONA
	$query2 = $pdo->prepare("SELECT * FROM usuarios");
	$query2->execute();
	$lista = $query2->fetchAll(PDO::FETCH_ASSOC);
	// MOSTRA
	foreach($lista as $v) {
		echo $v['nome']."<hr>";
	}



