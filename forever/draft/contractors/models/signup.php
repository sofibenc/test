<?php

require_once "../conf/connection.php";

$login=$_POST["login"];
$password=$_POST["password"];
$lastname=$_POST["lastname"];
$firstname=$_POST["firstname"];
$email=$_POST["email"];

$select = $connection->query("SELECT * FROM contractors where login='$login'");
$select->setFetchMode(PDO::FETCH_OBJ);
$enregistrement = $select->fetch();
 
if( $enregistrement ) {
  echo "Utilisateur d&eacuteja enregistr&eacute";
}
else {
	$sql = 'INSERT INTO contractors(login,password,email,firstname,lastname) VALUES(:login, :password, :email, :firstname, :lastname)';
	$insert = $connection->prepare($sql);

	// On envois la requète
	$success = $insert->execute(array(
	'login'=>$login,
	'password'=>sha1($password),
	'email'=>$email,
	'firstname'=>$firstname,
	'lastname'=>$lastname
	));

	if( $success ) {
		echo "Enregistrement réussi";
	}
	else {
		echo "fail";
	}
}



?>