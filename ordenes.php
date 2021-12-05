<?php


if(isset($_POST['ordenar']))
                   {
                    include("costdm1.php");
                    $postdmesa = $_POST['ordenar'];
                    $postdnomorden = $_POST['nomorden'];
                    if ($_POST['ordenar']=="menu1") {
                        $tipomesa="Mesa 1";
                    }
                    if ($_POST['ordenar']=="menu2") {
                        $tipomesa="Mesa 2";
                    }
                    if ($_POST['ordenar']=="menu3") {
                        $tipomesa="Mesa 3";
                    }

                    $stack =array();
                    $stackcant=array();
                    if ($storednom11!==null && $postdprecm11!==0) {
                     
                        array_push($stack, $storednom11);
                        array_push($stackcant, $postdprecm11);
                  
                    }
                    if
                     ($storednom12!==null && $postdprecm12!==0) {                
                        array_push($stack, $storednom12);
                        array_push($stackcant, $postdprecm12);
                    }
                    if ($storednom13!==null && $postdprecm13!==0) {                
                        array_push($stack, $storednom13);
                        array_push($stackcant, $postdprecm13);
                    }
                    if ($storednom14!==null && $postdprecm14!==0) {                
                        array_push($stack, $storednom14);
                        array_push($stackcant, $postdprecm14);
                    }
                    if ($storednom15!==null && $postdprecm15!==0) {                
                        array_push($stack, $storednom15);
                        array_push($stackcant, $postdprecm15);
                    }
                   
                
                    include("conecta.php");
                    $collection = $client->$bd->ordenes;
                    $insertOneResult = $collection->insertOne([
                        'mesa' => $tipomesa,
                        'nombre' => $postdnomorden,
                        'platoname1' => $stack,
                     

                        'cantpz1' => $stackcant,
                       
                        'platoprec' => $resm1
                    ]);

                    echo "<script type='text/javascript'> alert('Su orden está siendo atendida, su total a pagar es de $$resm1 pesos');
                    window.location.href='#';
                    </script>";
  /*
                    echo "<script type='text/javascript'> alert('Su orden está siendo atendida, su total a pagar es de $$resm1 pesos');
                    window.location.href='$postdmesa.php';
                    </script>";
      */
          
}else{
    header("Location: menu1.php");
}


?>