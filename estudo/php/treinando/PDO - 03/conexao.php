<?php

	function conecta() {
		try {
			$pdo = new PDO("mysql:host=localhost;dbname=faceduty", "root", "ezeksoft8080");
		} catch(PDOExeption $e) {
			echo "Erro ao conectar com o banco de dados. Código do erro: ".$e->getCode();
		}
		return $pdo;
	}
