<?php

	// CLASSES ABSTRATAS NAO PODEM SER INSTANCIADAS
	// METODOS ABSTRATOS NAO PODEM CONTER CORPO
	abstract class Saque {

		public $valor = 100;
		public $deposita = 200;

		// sempre é herdado - tem que fazer o extends
		public abstract function getValor();
		public abstract function deposita();

	}