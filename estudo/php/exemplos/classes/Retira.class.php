<?php

	class Retira extends Saque {
		public function getValor() {
			return $this->valor."<hr>";
		}

		public function deposita() {
			return $this->deposita;
		}
	}