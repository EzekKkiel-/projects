<?php
 header("Content-Type: text/html; charset=UTF-8");
 include "classes/Pessoa.class.php";
 
 $pessoa = new Pessoa();	// novo objeto é a classe
 $pessoa->nome = "Ezequiel";
 $pessoa->andar();
 
 $carro = new Carro();
 $carro->marca = "Nissan";
 $carro->busca();
 
 $casa = new Casa();
 $casa->cor = "vermelho";
 $casa->pinta();
 
 $pc = new Computador();
 $pc->resolucao = "1366x728";
 $pc->analisa();
 
 $cel = new Celular();
 $cel->marca = "Samsung";
 $cel->fabricante();
 
 $cel = new Software();
 $cel->nome = "Word";
 $cel->uso();
 
 $bola = new Bola();
 $bola->cor = "Amarela";
 $bola->marca = "Nike";
 $bola->preco = "R$ 300,00";
 $bola->jogar();
 
?>