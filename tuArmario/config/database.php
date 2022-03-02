<?php

	class Database{
		
		private $hostname = "localhost";
		private $database = "tuArmario";
		private $username = "root";
		private $password = "root";
		private $charset  = "utf8";
		
		
		function conectar(){
			
			try{
				$conex = 'mysql:host=' . $this->hostname . '; dbname=' . $this->database . '; charset=' . $this->charset;

				$options = [
					PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
					PDO::ATTR_EMULATE_PREPARES => false	
				];

				$pdo = new PDO($conex, $this->username, $this->password, $options);
				return $pdo;
			}

			catch(PDOException $e){
				echo 'Error de Conexion: ' . $e->getMessage();
				exit;
			}	
		}
	}

?>