<?php
/*	
	function __autoload($classe) {
		if(file_exists($classe.".class.php")) :
			require_once($classe.".class.php");
		else:
			echo "erro ao chamar classe";
		endif;
	}
*/
	
	require_once("conexao.php");
	$pdo = conectar();

	$sql = "INSERT INTO usuarios(nome, snome, email, senha)VALUES(:n, :sn, :e, :s)";
	$stmt = $pdo->prepare($sql);
	$stmt->bindValue(":n", "EZEKKKKKKKK");
	$stmt->bindValue(":sn", "MORAESSSSSSSSSSSSSS");
	$stmt->bindValue(":e", "eze@MICROSOFT.COM");
	$stmt->bindValue(":s", "1020220");
	$stmt->execute();
?>