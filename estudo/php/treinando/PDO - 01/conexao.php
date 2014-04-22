<?php

	function conectar() {
		try {
			$con = new PDO("mysql:host=localhost;dbname=faceduty", "root", "ezeksoft8080");
		} catch(PDOExeption $e) {
			echo "Erro: ".$e->getMessage();
		}
		return $con;
	}