<?php

//$m = new MongoClient();
//$gridfs = $m->selectDB('test')->getGridFS();
include("conecta.php");
$dbs = $client->$bd;
$m = new MongoClient();
$gridfs = $m->selectDB('test')->getGridFS();
//$grid = $dbs->getGridFS(); //use GridFS class for handling files  
//$grid=$dbs->getMongoDB()->getGridFS();
$name = $_FILES['Filedata']['username']; //Optional - capture the name of the uploaded file  
$id = $grid->storeUpload('pic',$name) //load file into MongoDB  
//$userDatabaseSelect->storeUpload('pic', array('username' => $_POST['username']));

?>