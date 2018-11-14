<?php 

	class Model 
	{
		
		private $host = "localhost";
		private $usuario = "root";
		private $senha = "";
		private $db = "imagine";

		public function execute($q){
			
			$mysqli = new mysqli($this->host, $this->usuario, $this->senha, $this->db);
			$result = $mysqli->query($q);
			$mysqli->close();
			return $result;
		}
	}
 ?>