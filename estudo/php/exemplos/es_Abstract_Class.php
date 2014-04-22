<?php 

	header("Content-Type: text/html; Charset=UTF-8");

	require_once("classes/Saque.class.php");
	function __autoload($classe) {	
		if (file_exists("classes/".$classe.".class.php")) :
			require_once("classes/".$classe.".class.php");
		else:
			echo "Classe não encontrada!";
		endif;
	}


	$retira = new Retira();
	echo $retira->getValor();
	echo $retira->deposita();
 