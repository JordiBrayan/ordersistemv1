<?php

include("conecta.php");
$collection = $client->$bd->menu1;

	$nomenu= $_POST["r3nom"];
    $descmenu= $_POST["r3desc"];
	$premenu= $_POST["r3pre"];
	

	
	//////////////////////////////////////
	$insertOneResult = $collection->insertOne([
		'm1nom' => $nomenu,
		'm1desc' => $descmenu,
        'm1prec' => $premenu

		
	]);
	
	//////////////////////////////////////


	header("Refresh: 0;url=admenu.php")

?>