<?php
	
	class PC {
		static $hd = 500;
		private $memRam = 8;
		public $memVideo = 1;

		public function exibeHD () {
			echo self::$hd." GB <BR />";
		}

		public function exibeMemRAM () {
			echo $this->memRam." GB <BR />";
		}

		public function exibeMemVIDEO () {
			echo $this->memVideo. " GB <BR />";
		}
	}
