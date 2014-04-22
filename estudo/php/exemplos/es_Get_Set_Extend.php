<?php
	header ("Content-Type: text/html; Charset=UTF-8");
	function __autoload($classe) {
		if(file_exists("classes/".$classe.".class.php")) :
			require_once("classes/".$classe.".class.php");
		else:
			echo "Classe {$classe} não encontrada";
		endif;
	}

	$dados = new Dados();
	$dados->setNome("Ezequiel"); 
	echo $dados->getNome()." | ";
	$dados->setIdade(16);
	echo $dados->getIdade()."<hr>";

	$cliente = new Cliente();
	$cliente->setNome("José");
	$cliente->setIdade(20);
	$cliente->setProfissao("Programador");
	$cliente->setAltura("1.70");
	$cliente->setPeso(55); 
	echo $cliente->exibeDadosCliente();

	


?>