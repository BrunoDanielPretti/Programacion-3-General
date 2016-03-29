<?php

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


?>