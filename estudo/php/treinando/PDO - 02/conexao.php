<?php

	function conexao() {
		try {
			$con = new PDO("mysql:host=localhost;dbname=faceduty", "root", "ezeksoft8080");
		} catch(PDOExeption $e) {
			echo "Erro ao conectar: ".$e->getMessage();
		}
		return $con;
	}
