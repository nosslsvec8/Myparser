<?php 

	$user = 'mysql';
	$password = 'mysql';
	$database = 'My_parser';
	$server = 'localhost';

	try {
		$db = new PDO('mysql:host=localhost;dbname=My_parser', $user, $password);
	} 
	catch (PDOException $e) {
		echo $e->getMessage();
	}

	// закрытия соединения и освобождение ресурсов
	// $db = NULL;


 ?>