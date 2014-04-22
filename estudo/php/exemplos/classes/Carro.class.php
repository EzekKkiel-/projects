<?php

	class MustangGT{
		public $marca;
		public $modelo;
		public $ano;
		public $cor;
		public $rodas;
		public $motor;
		public $cavalos;
		
		public function tunning(){
			echo "Marca: " . $this->marca."<br>";
			echo "Modelo: " . $this->modelo."<br>";
			echo "Ano: " . $this->ano."<br>";
			echo "Cor: " . $this->cor."<br>";
			echo "Rodas: " . $this->rodas."<br>";
			echo "Motor: " . $this->motor."<br>";
			echo "Cavalos: " . $this->cavalos."<br>";
		}
	}