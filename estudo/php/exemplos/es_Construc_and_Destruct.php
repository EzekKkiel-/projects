<?php
	header ("Content-Type: text/html; Charset = UTF-8");	

	require_once ("classes/ConsDest.class.php");

	$pessoa = new Pessoa ("Ezequiel", "16", "1.63");

	printf( "Instância de: %s<hr>" , get_class( $pessoa ));

?>