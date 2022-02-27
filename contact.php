<?php
  require_once 'connection.php';
  
  $name = $_REQUEST["name"];
  $email = $_REQUEST["email"];
  $message = $_REQUEST["message"];
  $flg = false;
  try{
  	$sql = "INSERT INTO MyGuests (name, email, message) VALUES (?,?,?)";
	$stmt= $conn->prepare($sql);
	$flg= $stmt->execute([$name, $email, $message]);
  }
  catch(PDOException $e) {
  	echo "Database Error: ". $e->getMessage();
  } 





  header("Location: index.php");     

