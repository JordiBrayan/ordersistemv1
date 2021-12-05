<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Imágenes</title>
  </head>
  <body>
  <form action="imagen.php" method="POST" enctype="multipart/form-data">
    <label for="username">Username:</label>
    <input type="text" name="username" id="username" />

    <label for="pic">Please upload a profile picture:</label>
    <input type="file" name="pic" id="pic" />

    <input type="submit" />
</form>

  </body>
</html>
<?php
/*
$m = new MongoClient();
$gridfs = $m->selectDB('test')->getGridFS();

$id = $gridfs->storeFile('example.txt', array('contentType' => 'plain/text'));
$gridfsFile = $gridfs->get($id);

var_dump($gridfsFile->file);
?>



echo "1";
for($contador = 1; $contador<=15; $contador++){
 if (isset($_POST['platillom1'.$contador])) {
	echo "2";
	$postdidm11 = $_POST['platillom1'.$contador];
	$postdprecm11 = $_POST['cantpm1'.$contador];
	include("conecta.php");
	$userDatabaseSelect = $client->$bd->menu1;
	$documentos = $userDatabaseSelect->find(array('m1nom' => $postdidm11));
	foreach ($documentos as $documento) {   
		$storednom11 = $documento['m1nom'];
		$storedprecm11 = $documento['m1prec'];
	}
	echo "3";
	//$m1costp1=($storedprecm11*$postdprecm11);
	$persona = array(
		'nombre'.$contador => $postdidm11,
		'apellido'.$contador => $storedprecm11,

	 );
	 echo "4";
	
}else{
	$storednom11 = null;
	$storedprecm11 = 0;
	$postdprecm11 = 0;
}
echo "5";
include("conecta.php");
$collection = $client->$bd->ordenes;
$insertOneResult = $collection->insertOne($persona);
}
echo "6";
//$m1costp1=($storedprecm11*$postdprecm11);
*/
?>
