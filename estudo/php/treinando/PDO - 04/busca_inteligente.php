<?php

	function conexao() {
		try {
			$pdo = new PDO("mysql:host=localhost;dbname=faceduty", "root", "ezeksoft8080");
		} catch(PDOExeption $e) {
			echo "Ocorreu o Erro: ".$e->getMessage();
		}
		return $pdo;
	}
	
	$conn = conexao();
	
	function showAll($conn) {
		$selecioneTudo = $conn->prepare("SELECT * FROM usuarios");
		$selecioneTudo->execute();
		$lista = $selecioneTudo->fetchAll(PDO::FETCH_ASSOC);
		?>
				<table>
				
		<?php 		foreach($lista as $ln) {
		?>
						<tr>
							<td><?php echo $ln['nome'] ?></td>
							<td><?php echo $ln['snome'] ?></td>
							<td><?php echo $ln['email'] ?></td>
							<td><?php echo $ln['senha'] ?></td>
						</tr>
		<?php
			 		}
		?>
				</table>
		<?php
	}
	
	$insere = $conn->prepare("INSERT INTO usuarios(nome, snome, email, senha)VALUES(:nome, :snome, :email, :senha)");
	$insere->bindValue(":nome", "Ezequiel"); 
	$insere->bindValue(":snome", "Moraes Mello"); 
	$insere->bindValue(":email", $_GET['email']); 
	$insere->bindValue(":senha", md5("0xD1AF8C")); 
	
	$selecione = $conn->prepare("SELECT * FROM usuarios WHERE email=?");
	$selecione->execute(array($_GET['email']));
	
	if($selecione->rowCount() == 0):
		$insere->execute();echo "<h1>GRAVOU!</h1>";showAll($conn);
	else:
		echo "<h1><font color=red>E-MAIL J&AACUTE; EXISTE!</font></h1>";
	endif;
	

	