<?php

	class Cliente extends Dados {

		public function exibeDadosCliente() {
			return "Nome: ".$this->getNome().
				   " | Idade: ".$this->getIdade().
				   " | Profissão: ".$this->getProfissao().
				   " | Altura: ".$this->getAltura().
				   " | Peso: ".$this->getPeso().
				   " | Cidade: ".$this->getCidade(). // protected function 
				   "<hr>"; 
		}
	}
