<?php
require 'vendor/autoload.php';
$uri="mongodb://localhost:27017/ordermaster?ssl=false";
$bd="ordermaster";
$client=new MongoDB\Client($uri);

/*
require 'vendor/autoload.php';
$client = new MongoDB\Client('mongodb+srv://ordersistem:order1745@clusterorder.yylnr.mongodb.net/ordermaster?retryWrites=true&w=majority');

$bd="ordermaster";

$client=new MongoDB\Client($uri);






$collection = $client->$bd->users;

$result = $collection->insertOne( [ 'item' => 'producto2', 'cantidad' => '400' ] );

echo "Inserted with Object ID '{$result->getInsertedId()}'";
*/

/*
if ($client==true) {
    echo "conexion exitosa";
    # code...
}else{
    echo "conexion fallida";
}
*/
//$client = new MongoDB\Client(
 //  'mongodb+srv://cost:cost1745@cluster0.qzniz.mongodb.net/costbd?retryWrites=true&w=majority');

/*
$collection = $client->$bd->users;

$result = $collection->insertOne( [ 'item' => 'producto1', 'cantidad' => '200' ] );

echo "Inserted with Object ID '{$result->getInsertedId()}'";
*/

?>