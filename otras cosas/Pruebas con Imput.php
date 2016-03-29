<html>
<body>
	<form action="#">
		
		Last name: <input type="text" name="lname"><br>
	<input type="submit" value="           Texto Submit          ">
	</form> 

<?php

	
	$hola = "nombre";
	$miArray = array(1, 2, 3, 4);
	
	echo $hola ?><input type="text" name="fname"><br><?php
	
	
	echo "Hola!!!" . "  q ase" . "     " . $hola;
	$hola = $hola +16.9;
	echo "<br/>";
	printf("la Viariable hola vale: %.2f", $hola);
	echo "<br/>";echo "<br/>";
	
	
	foreach($miArray as $valor)
	{
		echo "<br/>" . $valor;
	}
	
?>

<html/>
<body/>