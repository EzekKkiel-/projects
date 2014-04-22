<?php
	require_once ("classes/PC.class.php");

	// NOTA: METODO ESTATICO PASSA INSTANCIANDO OU NÃO
	PC::exibeHD();
	echo PC::$hd."<br>";

	// TIPO PUBLICO SO PASSA SE INSTANCIAR
	$pc = new PC();
	$pc->exibeMemRAM();
	$pc->exibeHD();


?>