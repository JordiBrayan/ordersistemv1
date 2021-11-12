<?php

include("conecta.php");
$collection = $client->$bd->menu1;

	$nomenu= $_POST["r1nom"];
    $descmenu= $_POST["r1desc"];
	$premenu= $_POST["r1pre"];
	

	
	//////////////////////////////////////
	$insertOneResult = $collection->insertOne([
		'm1nom' => $nomenu,
		'm1desc' => $descmenu,
        'm1prec' => $premenu

		
	]);
	
	//////////////////////////////////////


	header("Refresh: 0;url=admenu.php")

?>