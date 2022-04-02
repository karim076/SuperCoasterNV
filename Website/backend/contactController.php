<?php

$action = $_POST['action']
if ("contact" = $action)
{
	/*Variables opgehaald van het form*/
	$name = $_POST['name'];
	$email = $_POST['email'];
	$number = $_POST['number'];
	$msg = $_POST['msg'];
	/*Controle*/
	if (!isset(name) and !isset(email) and !is_numeric(number))
	{
		die("Voer opnieuw uw informatie in, dit kan zijn dat u niet juiste informatie heeft ingevoerd.")
	}

	/*5 stappan connectie*/
	//1. Verbinding
	require_once 'conn.php';

	//2. Query
	$query="INSERT INTO contact(name,email,number,msg,overigemelder,prioriteit) VALUES(:name,:email,:number,:msg,:overigemelder,:prioriteit)";
	//3. Prepare
	$statement=$conn->prepare($query);
	//4. Execute
	$statement->execute
	([
	    ":name" => $name,
	    ":email" => $email,
	    ":number" => $number,
	    ":msg" => $msg
	]);
	//5. redirect to page
	header("Location: $base_url/index.php");
}
	

?>