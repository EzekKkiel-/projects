<?php

	header("Content-Type: text/html; Charset=UTF-8");

	function __autoload($classe) {	
		if (file_exists("classes/".$classe.".class.php")) :
			require_once("classes/".$classe.".class.php");
		else:
			echo "Classe não encontrada!";
		endif;
	}

	Nome::$meunome = "Ezequiel";
	echo Nome::exibeNome();

/*
	echo "Não Estatico<hr>";
	$nome = new Nome();
	$nome->setNome('Ezequiel');
	echo $nome->getNome();

	echo "<hr>Estatico<hr>";
	Nome::$meunome = "Ezequiel";
	echo Nome::getNomeEstatico();
*/