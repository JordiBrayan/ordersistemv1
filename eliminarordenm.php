<?php

include("conecta.php");
$collection = $client->$bd->ordenes;
$id = $_GET['id'];
$resultado = $collection->deleteOne(
  // El criterio, algo así como where
  ["_id" => new MongoDB\BSON\ObjectId($id)]
  );         
   header("Location: adordenesm.php");

?>