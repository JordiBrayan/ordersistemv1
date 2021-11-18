<?php

include("conecta.php");
$collection = $client->$bd->menu2;
$id = $_GET['id'];
$resultado = $collection->deleteOne(
  // El criterio, algo así como where
  ["_id" => new MongoDB\BSON\ObjectId($id)]
  );         
   header("Location: admenu.php");

?>