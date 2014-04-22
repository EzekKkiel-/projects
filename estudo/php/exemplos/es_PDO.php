<?php

	function __autoload($classe) {
	
		if(file_exists("classes/". $classe. ".class.php")):
			require_once("classes/". $classe. ".class.php");
		else:
			echo "Erro ao localizar classes";
		endif;
	}

	$cli = new Client();
	$cli->insert();