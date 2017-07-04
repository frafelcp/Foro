<!-- Conexion Base de Datos PDO -->
<?php
//    Conexion Base de Datos PDO
    $server = 'localhost';
	$username = 'root';
	$password = '';
	$database = 'dbforo';
	try{
		$conn = new PDO("mysql:host=$server;dbname=$database;charset=utf8", $username, $password);
		$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
		echo "Conexion exitosa<br>";
		//var_dump($conn);
	}
	catch(PDOException $ex){
		echo "Conexion fallida<br>".$ex->getMessage();
		exit;
	}
