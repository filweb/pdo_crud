<?php 
	$servername = "localhost";
	$username = "root";
	$password = "";

	try {
	  $conn = new PDO("mysql:host=$servername;dbname=filcik", $username, $password);
	  // set the PDO error mode to exception
	 $conn->exec("SET NAMES utf8"); 
	 $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	  
	} catch(PDOException $e) {
	  echo "Bağlantı hata oluştu : " . $e->getMessage();
	}
?>