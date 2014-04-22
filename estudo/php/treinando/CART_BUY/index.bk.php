<!-- BLOCO DE INSTRUCOES 1 -->

<?php
	// inincio
	session_start();
	require_once("config.php");
	$conn = conexao();
	$total = 0;
	
	// verifica se o id existe
	if(isset($_GET['id'])):
	
		// faz um contagem do numero de linhas da tabela
		$num_linhas = $conn->prepare("SELECT * FROM filmes");
		$num_linhas->execute();
		$v_ln = $num_linhas->rowCount(); // n de linhas
		
		// se o id que esta na url for menor ou igual ao maximo existente, faca:
		if(!empty($_GET['id']) && $_GET['id'] <= $v_ln && $_GET['id'] > 0):
		
			$id = intval($_GET['id']);
			
			// verifica se a sessao cart NAO existe
			if(!isset($_SESSION['cart'])):
				$_SESSION['cart'] = array();	// se nao existir, entao ela se torna um array
			endif;
			
			// se o id do array da sessao cart estiver vazio, faca:
			if(empty($_SESSION['cart'][$id])):
				$_SESSION['cart'][$id] = 1;	// o id recebe 1
			else:
				$_SESSION['cart'][$id] = $_SESSION['cart'][$id] +1;	// id recebe ele mesmo mais 1
			endif;
		endif; // fim do filtro de id
	endif; // fim da verificacao se id existe
	
?>

<!-- BLOCO DE INSTRUCOES 2 -->

<?php
	// quando o botao de alterar for clicado, faca:
	if(isset($_POST['alt_qtd'])):
		$valor = intval($_POST['qtd']);	// valor recebe qtd em inteiro
		$id_produto = intval($_POST['id_prod']); // id_produto recebe o id_prod em inteiro
		
		// se o valor(qtd de items) for <= 0, faca:
		if($valor <= 0):	
			unset($_SESSION['cart'][$id_produto]); // desfaz sessao 
		else:
			$_SESSION['cart'][$id_produto] = $valor; // sessao recebe a quantidade de items
		endif;
	endif;
?>

<?php
// se existir o parametro da url 'ac', faca:
if(isset($_GET['ac'])):
	// se esse parametro for igual a deletar tudo
	if($_GET['ac'] == "del_all"):
	
		session_destroy();
		header("Location: index.php");
	elseif($_GET['ac'] == "del"): // se na url conter o parametro ac com o valor del, faca:
	
		
		$id = intval($_GET['id']);	
		
		if(isset($_GET['id'])):	// se existir na url o parametro id
			unset($_SESSION['cart'][$id]);	// desfaz (deleta) sessao
		endif;
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
		<table border="1" width="800" style="border-collapse: collapse;text-align: center;" cellpadding="10">
			<tr>
				<td>Nome</td>
				<td>Id do Produto</td>
				<td>Preço</td>
				<td>Quantidade</td>
				<td>Subtotal</td>
				<td>Excluir</td>
			</tr>
			
			<!-- SE ESTIVER VAZIO, O ARRAY SESSAO CART, FACA: -->
			
			<?php if(empty($_SESSION['cart'])):	?>
				<tr>
					<td colspan="6" align="center">Nehum item no carrinho</td>
				</tr>
				
			<!-- SENAO: -->
			<?php else:	?>
			
			<?php 	
						// cria um laco de repeticao para o array da sessao cart
						foreach($_SESSION['cart'] as $key => $value):
							$seleciona = $conn->prepare("SELECT * FROM filmes WHERE id=:id");	//faz a selecao no DB por id
							$seleciona->bindValue(":id", $key); // o id deve ser a chave  do array, ou seja, o proprio id de determinado item
							$seleciona->execute();
							$lista = $seleciona->fetch(PDO::FETCH_ASSOC); // lista se torna um array do DB
							$subtotal = $lista['preco'] * $value;	// subtotal e o preco do item vezes a qtd de vez que ele add
			?>
							<form action="index.php" method="post">
								<tr>
									<td><?php echo $lista['nome']; ?></td>
									<td><?php echo $lista['id']; ?></td>
									<input type="hidden" name="id_prod" value="<?php echo $lista['id']; ?>" />
									<td><?php echo number_format($lista['preco'],2,",","."); ?></td>
									<td>
										<input size="10" type="text" name="qtd" value="<?php echo $value ?>" />
										<input type="submit" name="alt_qtd" value="Alterar" />
									</td>
									<td><?php echo number_format($subtotal,2,",","."); ?></td>
									<td><a href="?id=<?php echo $lista['id']; ?>&ac=del"><input type="button" value="Deletar" /></a></td>
								</tr>
							</form>	
			<?php		
							$total += $subtotal;
						endforeach;
					endif;
				
			?>
			<form action="index.php" method="post">		
				<tr>
					<td colspan="6"><a href="?ac=del_all"><input type="button" value="Limpar tudo" name="clear_all"></a>
					<?php echo "  TOTAL: <strong>R$".number_format($total, 2,',','.')."</strong>" ?></td>
				</tr>
			</form>
		</table>
	</body>
</html>