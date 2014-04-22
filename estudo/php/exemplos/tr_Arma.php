<?php 
	require_once ("classes/Arma.class.php");
	$arma = new Arma();
	$arma->nome = "AK-47";
	$arma->maxBalas = "30";
	$arma->peso = "3,8 kg";
?>

<table border="1" cellpadding="5" cellspacing="0">
	
	<tr>
		<td>Nome: </td>
		<td>Max. de Balas: </td>
		<td>Peso: </td>
	</tr>

	<tr>
		<td align="center"><?php $arma->exibeNome(); ?></td>
		<td align="center"><?php $arma->exibeMaxBalas(); ?></td>
		<td align="center"><?php $arma->exibePeso(); ?></td> 
	</tr>
</table>