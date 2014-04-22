<?php
	header ("Content-Type: text/html; Charset=UTF-8");
	require_once ("classes/Casa.class.php");
	$casa = new Casa();
	$casa->numero = "1034";
	$casa->cor = "Azul";

?>
<table border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td><H1>Número: </H1></td>
		<td><H1><?php $casa->numCasa(); ?></H1></td>
	</tr>
	<tr>
		<td><h1>Cor: </h1></td>
		<td><h1><?php $casa->corCasa(); ?></h1></td>
	</tr>
</table>