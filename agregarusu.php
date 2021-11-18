<?php

include("conecta.php");
$collection = $client->$bd->users;

	$nomus= $_POST["adnom"];
    $passus= $_POST["adpass"];
	$tipous= $_POST["setipousu"];
	

	
	//////////////////////////////////////
	$insertOneResult = $collection->insertOne([
		'username' => $nomus,
		'password' => $passus,
        'tipousu' => $tipous

		
	]);
	
	//////////////////////////////////////


	header("Refresh: 0;url=adusuarios.php")

?>