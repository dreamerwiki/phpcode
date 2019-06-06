<?php
$host = 'localhost';
$user = 'root';
$pass = 'ourdesignz';
$db   = 'test_php';

$dsn = "mysql:host=$host;dbname:$db";

try{

	$conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);		
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e){

	echo "Exception: ".$e->getMessage();

}

