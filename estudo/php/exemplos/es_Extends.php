<?php

	class Animal {
		function __construct () {
			print "Construiu nova Classe de Objeto<hr>";
		}
	}

	class Mamifero extends Animal {

			
		function __construct () {
			print "Construiu nova Sub-Classe de Objeto<hr>";
			parent::__construct();
		}
	}

	$animal = new Animal();
	$mamifero =  new Mamifero();

