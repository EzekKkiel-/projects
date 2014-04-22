<?php
  
	class Pessoa{
		public $nome;
		public function andar(){
			echo $this->nome . " está andando"."<br>"; 
		}
	}
	
	class Carro{
		public $marca;
		public function busca(){
			echo $this->marca."<br>";
		}
	}
	
	class Casa{
		public $cor;
		public function pinta(){
			echo "Vou pintar a casa de " . $this->cor."<br>";
		}
	}
	
	class Computador{
		public $resolucao;
		public function analisa(){
			echo $this->resolucao."<br>";
		}
	}
	
	class Celular{
		public $marca;
		public function fabricante(){
			echo $this->marca."<br>";
		}
	}
	
	class Software{
		public $nome;
		public function uso(){
			echo $this->nome."<br>";
		}
	}
	
	class Bola{
		public $cor;
		public $marca;
		public $preco;
		
		public function jogar(){
			echo "<br /><br>Bola da Copa<br>";
			echo "Cor: ".$this->cor."<br>";
			echo "Marca: ".$this->marca."<br>";
			echo "Preço: ".$this->preco."<br>";
		}
	}
?>