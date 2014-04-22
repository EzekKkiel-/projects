<?php
 require_once("classes/Carro.class.php");
?>
<html>
 <head>
 	<title>Classes</title>
 </head>
 <body>
 	<?php 
	 $carro = new MustangGT();
	 $carro->marca = "Ford";
	 $carro->modelo = "Mustang GT";
	 $carro->ano = "2014";
	 $carro->cor = "Amarelo";
	 $carro->rodas = "BBS";
	 $carro->motor = "2.0";
	 $carro->cavalos = "450";
	 $carro->tunning();
	?>
 </body>
</html>