<?php

	// AUTO LOAD
	function __autoload ($classe) {
		if (file_exists("classes/". $classe .".class.php")) :
			require_once ("classes/". $classe .".class.php");
		else :
			echo "Você está tentando acessar uma classe que não existe!";
		endif;
	}
?>