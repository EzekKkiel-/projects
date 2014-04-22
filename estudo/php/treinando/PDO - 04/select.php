<?php

	function conexao() {
		try {
			$pdo = new PDO("mysql:host=localhost;dbname=faceduty", "root", "ezeksoft8080");
		} catch(PDOExeption $e) {
			echo "Erro: ".$e->getMessage();
		}
		
		return $pdo;
	}
	
	$conn = conexao();
	
	$seleciona = $conn->prepare("SELECT * FROM usuarios");
	$seleciona->execute();
	$lista = $seleciona->fetchAll();
	
?>
	<table>
		<?php
			foreach($lista as $ln) {
				?>
					<tr>
						<td><?php echo $ln['email'] ?></td>
					</tr>
					
				<?php
			}
		?>
	</table>