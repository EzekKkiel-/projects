<?php
	// USA MAIS DE UMA FUNCAO COM O MESMO NOME
	header("Content-Type: text/html; charset=UTF-8");
	function __autoload($classe) {
		if (file_exists("classes/". $classe . ".class.php")) :
			require_once("classes/". $classe . ".class.php");
		else:
			echo "Classe não encontrada";
		endif;
	}

	$banco = new Bank();
	$banco->setValor(50);
	echo $banco->saque();

	$outroBanco = new OtherBank();
	$outroBanco->setValor(50);
	echo $outroBanco->saque();
?>