<?php

	function __autoload($classe) {
		if (file_exists("classes/" .$classe. ".class.php")):
			require_once("classes/" .$classe. ".class.php");
		else:
			echo "Esta classe não existe!";
		endif;
	}
		
	$banco = new Banco();
	$banco->nome = "Ezequiel";
	$banco->exibeNome();
?>