<html>
<head>
	<title>	</title>
</head>
<body>
	Su nombre:

	<?php
		//include_once "ClaseAlumno.php";     //Lo incluye solo una vez
		//include "claseAlumno.php";         //Include pega el texto, si lo pones 2 veces lo copia 2 veces
		//los includes si no los encuentra anda igalmente

		//require "ClaseAlumno.php";			
	    require_once "ClaseAlumno.php";
	    //los require si no las encuentra el programa no anda

	  

		echo "<h1>Hola Mundo</h1>";

		//las Variables no tienen tipo, tienen tipo solo cuando tienen un dato
		$nombre = "SuNombre";
		echo $nombre;
		//echo "<h1> $nombre </h1>";  // el " " muestr el valor de la variable
		//echo "<h1>" . $nombre . "</h1>"; 
		echo '<h1>  $nombre  </h1>';   // mustra el nombre de la variable ($nombre) //Comillas simples

		$numero = 1733;

		if($numero < 18)
			printf("Es menor de edad");
		else
			printf("Es mayor de edad");

		$arrayNuevo = array(1, 2, 3, 5);
		$arrayNuevo[] = 66;   //agrega el elemento 66
		$arrayNuevo[2] = 666; //modifica el lugar 2

		foreach ($arrayNuevo as $num) {
			echo "<br/>" . $num;
		}
		echo "<br/>" . "<br/>";
		$arrayProducto = array("pizza"=>20, "empanada"=>10, "faina"=>15);
		
		echo $arrayProducto["pizza"]; //muestra 20
		echo "<br/>";

		$arrayNuevo["apellido"] = "Pretti";
		$arrayProducto[2] = "Numero 2";
		echo var_dump($arrayProducto); //Muestra todo lo del array y los tipos
		echo "<br/>";
		echo var_dump($arrayNuevo);

		
		echo "<br/>" . "<br/>";
		$miObjeto = new stdclass();  //clase estandar
		$miObjeto->nombre = "Bruno"; //Le da el atributo nombre (los crea dinamicamente)
		echo var_dump($miObjeto);
		$miObjeto->producto = $arrayProducto;
		echo "<br/>";
		echo var_dump($miObjeto);

		echo "<br/>" . "<br/>"; 
		$arrayDeObjetos = array();
		$arrayDeObjetos["nombre"] = "Bruno";
		$arrayDeObjetos["apellido"] = "Pretti";
		$arrayDeObjetos["producto"] = $arrayProducto;
		echo var_dump($arrayDeObjetos);

		echo "<br/>" .  "<br/>";
		
		/*                                    //Esta en el require_once de arriba, en el archivo ClaseAlumno.php
		class alumno
		{
			public $nombre;
			public $apellido;

			private function mostrar()
			{
				echo $this->nombre;
				echo "<br/>";
				echo $this->apellido;
			}

			public static function mostrarAlumno($unAlumno)
			{
				$unAlumno->mostrar();
			}
		}
		*/
		
		$nuevoAlumno = new alumno();
		$nuevoAlumno->nombre = "Marina";
		$nuevoAlumno->apellido = "Meza";		
		alumno::mostrarAlumno($nuevoAlumno);  // los :: llaman al metodo estatico
		//echo var_dump($nuevoAlumno);

	
	?>

</body>
</html>