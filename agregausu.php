<?php

include("conecta.php");
$collection = $client->$bd->users;

	$nomusuario= $_POST["rusnom"];
    $pass= $_POST["ruspass"];

	
	//////////////////////////////////////
	$insertOneResult = $collection->insertOne([
		'username' => $nomusuario,
		'password' => $pass,
        'tipousu' => "cliente"

		
	]);
	
	//////////////////////////////////////


	header("Refresh: 0;url=login.html")

?>