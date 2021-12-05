<?php
/*
require 'vendor/autoload.php';
$uri="mongodb://localhost:27017/ordermaster?ssl=false";
$bd="ordermaster";
$client=new MongoDB\Client($uri);

*/
require 'vendor/autoload.php';
$client = new MongoDB\Client('mongodb+srv://ordersistem:order1745@clusterorder.yylnr.mongodb.net/ordermaster?retryWrites=true&w=majority');

$bd="ordermaster";

?>