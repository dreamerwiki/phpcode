<?php
ini_set('display_errors','1');
error_reporting(E_ALL);
//connect to database 
require('database.php');

//insert records into database

 $name = isset($_POST['name'])? $_POST['name']:'';
 $age = isset($_POST['age'])? $_POST['age']:'';
 $email = isset($_POST['email'])? $_POST['email']:'';
 $gender = isset($_POST['gender'])? $_POST['gender']:'';
 $password = isset($_POST['password'])?$_POST['password']:'';
 $skills = isset($_POST['skills'])?$_POST['skills']:'';		

 if(!empty($skills)){
 	$skills = json_encode($skills);
 }else{
 	$skills = '[]';
 }
 

 if(!empty($email)){
 	
 	try{

 		/* Method: Simple*/
 		//$query = "INSERT INTO user (name,age,email,gender,password,skills) VALUES('".$name."','".$age."','".$email."','".$gender."','".$password."','".$skills."')"; 		
 		//$conn->exec($query);

 		/* Method: 2 INSERT query with positional placeholders */
 		// $query = "INSERT INTO user (name,age,email,gender,password,skills) VALUES(?,?,?,?,?,?)";		
 		// $conn->prepare($query)->execute([$name,$age,$email,$gender,$password,$skills]);
 		
 		/* Method: 2 INSERT query with name placeholders */
 		$data = [
		    'name'    => $name,
		    'age'     => $age,
		    'email'   => $email,
		    'gender'  => $gender,
		    'secret'=> $password,
		    'skills'  => $skills,
		];
		$sql = "INSERT INTO user (name,age,email,gender,password,skills) VALUES(:name, :age, :email,:gender,:secret, :skills)";
		$conn->prepare($sql)->execute($data);
		

 	}catch(PDOException $e){

 		echo "Insert: ".$e->getMessage();
 	}

 }