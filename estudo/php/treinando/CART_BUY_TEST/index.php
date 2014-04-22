<?php
	
	require_once("PDO.php");
	session_start();
	$conn = conexao();
	$pagina = $_SERVER['SCRIPT_NAME'];
	$id = (isset($_GET['id'])) ? $_GET['id'] : 0;
	$subtotal = 0;
	$total = 0;
	
	$nlinha = $conn->prepare("SELECT * FROM filmes");
	$nlinha->execute();
	$nlinhas = $nlinha->rowCount();
	
	if(isset($_GET['action'])):
		if($_GET['action'] == "deleteAll"):
			header("Location: $pagina");
			session_destroy();
		endif;
	endif;	
	
	if($id > 0 && $id <= $nlinhas): 
		if(!isset($_SESSION['carrinho'])):
			$_SESSION['carrinho'] = array();
		endif;
		
		if(!isset($_SESSION['carrinho'][$id])):
			$_SESSION['carrinho'][$id] = 1;
		else:
			$_SESSION['carrinho'][$id] += 1;
		endif;	
		
		if(isset($_GET['action'])):
			if($_GET['action'] == "del"):
				unset($_SESSION['carrinho'][$id]);
			endif;
		endif;
	endif;
	
	if(isset($_POST['act_alt'])):
			$qtde_items_ = (isset($_POST['qtde_items'])) ? $_POST['qtde_items'] : 0;
			$id_produtos_= (isset($_POST['id_produto'])) ? $_POST['id_produto'] : 0; // esse id é o de cada produto dentro do loop
			
			if($qtde_items_ <= 0): // exclua o item quando o a qtde for <= 0
				unset($_SESSION['carrinho'][$id_produtos_]);
			else:
				$_SESSION['carrinho'][$id_produtos_] = $qtde_items_; 
			endif;		
	endif;
	
?>
<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<meta charset="UTF-8" />
	</head>
	<body>
		<table border="1" width="700" style="text-align: center; border-collapse: collapse" cellpadding="5">
			<tr>
				<th>Nome</th>
				<th>Id</th>
				<th>Preço</th>
				<th>Quantidade</th>
				<th>Subtotal</th>
				<th>Remover do Carrinho</th>
			</tr>
			<?php
				if(!empty($_SESSION['carrinho'])):
					foreach($_SESSION['carrinho'] as $key => $value):
					$seleciona = $conn->prepare("SELECT * FROM filmes WHERE id=:id");
					$seleciona->bindValue(":id", $key);
					$seleciona->execute();
					$lista = $seleciona->fetch(PDO::FETCH_ASSOC);
					$subtotal = $lista['preco'] * $value;
			?>
						<form action="<?php echo $pagina ?>" method="post">
							<tr>
								<td><?php echo $lista['nome'] ?></td>
								<td>
									<?php echo $lista['id'] ?>
									<input type="hidden" value="<?php echo $lista['id'] ?>" name="id_produto" />
								</td>
								<td><?php echo number_format($lista['preco'], 2,",",".") ?></td>
								<td>
									<input type="text" value="<?php echo $value; ?>" name="qtde_items" size="2" />
									<input type="submit" value="Alterar" name="act_alt" />
									
								</td>
								<td><?php echo number_format($subtotal, 2,",",".") ?></td>
								<td>
									<a href="?id=<?php echo $lista['id'] ?>&action=del">
										<input type="button" value="Remover"/>
									</a>
								</td>
							</tr>
						</form>
			<?php	$total += $subtotal; 
				endforeach; ?>
			
					<tr>
						<td colspan="6">
							<a href="?action=deleteAll"><input type="button" value="Remover Tudo" /></a>
							Total: <b><?php echo number_format($total, 2, ",", ".") ?></b>
						</td>
					</tr>
				
			<?php
				else:
			?>
				<tr>
					<td colspan="6">Não existe items no carrinho!</td>
				</tr>
			<?php
				endif; 
			?>
		</table>
	</body>
</html>