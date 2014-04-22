<?php

	function conexao() {
		try {
			$pdo = new PDO("mysql:host=localhost;dbname=cinema", "root", "ezeksoft8080");
		} catch(PDOExeption $e) {
			echo "Erro: ".$e->getMessage();
		}
		return $pdo;
	}
	