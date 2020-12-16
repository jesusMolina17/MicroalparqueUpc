
<?php 

	class conectar{
		public function conexion(){
		
			$servidor="localhost";
			$usuario="root";
			$password="";
			$bd="cemprebd"; 
			$conexion=mysqli_connect($servidor,$usuario,$password,$bd);

			return $conexion;
		}
	}

 ?>
