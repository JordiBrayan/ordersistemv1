<?php

include("conecta.php");
$collection = $client->$bd->menu2;

	$nomenu= $_POST["r2nom"];
    $descmenu= $_POST["r2desc"];
	$premenu= $_POST["r2pre"];
	

	
	//////////////////////////////////////
	$insertOneResult = $collection->insertOne([
		'm2nom' => $nomenu,
		'm2desc' => $descmenu,
        'm2prec' => $premenu

		
	]);
	
	//////////////////////////////////////


	header("Refresh: 0;url=admenu.php")

?>