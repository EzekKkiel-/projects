<?php

	require_once("conexao.php");
	$conn = conecta();
	$query = $conn->prepare("INSERT INTO usuarios(nome, snome, email, senha)VALUES(:nome, :snome, :email, :senha)");
	$query->bindValue(":nome", "BILL");
	$query->bindValue(":snome", "GATES");
	$query->bindValue(":email", "CONTATO@MICROSOFT.COM");
	$query->bindValue(":senha", "102030405060");
	$query->execute();

	if($query->rowCount() > 0) {
		echo "Gravou!";
	} else {
		echo "Erro!";
	}

	$cons = $conn->prepare("SELECT * FROM usuarios");
	$cons->execute();
	$lista = $cons->fetchAll(PDO::FETCH_ASSOC);

	?>
		<table>
			<?php

			foreach($lista as $ln) {
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


