<?php


if(isset($_POST['ordenar']))
                   {
                    include("costdm1.php");

                    //'col1' => md5(uniqid(null, true)),
                
                    include("conecta.php");
                    $collection = $client->$bd->ordenes;
                    $insertOneResult = $collection->insertOne([
                        'platoname1' => $storednom11,
                        'platoname2' => $storednom12,
                        'platoname3' => $storednom13,
                        'platoname4' => $storednom14,
                        'platoname5' => $storednom15,
                        'platoname6' => $storednom16,
                        'platoname7' => $storednom17,
                        'platoname8' => $storednom18,
                        'platoname9' => $storednom19,
                        'platoname10' => $storednom110,
                        'platoname11' => $storednom111,
                        'platoname12' => $storednom112,
                        'platoname13' => $storednom113,
                        'platoname14' => $storednom114,
                        'platoname15' => $storednom115,

                        'cantpz1' => $postdprecm11,
                        'cantpz2' => $postdprecm12,
                        'cantpz3' => $postdprecm13,
                        'cantpz4' => $postdprecm14,
                        'cantpz5' => $postdprecm15,
                        'cantpz6' => $postdprecm16,
                        'cantpz7' => $postdprecm17,
                        'cantpz8' => $postdprecm18,
                        'cantpz9' => $postdprecm19,
                        'cantpz10' => $postdprecm110,
                        'cantpz11' => $postdprecm111,
                        'cantpz12' => $postdprecm112,
                        'cantpz13' => $postdprecm113,
                        'cantpz14' => $postdprecm114,
                        'cantpz15' => $postdprecm115,
                        'platoprec' => $resm1
                    ]);
                   
  
                    echo "<script type='text/javascript'> alert('Su orden esta siendo atendida, su total a pagar es de $$resm1 pesos');
                    window.location.href='menu.php';
                    </script>";
      
                      /*   
 include("conecta.php");
                    $collection = $client->$bd->ordenes;
                    $insertOneResult = $collection->insertOne([
                        'platoname1' => $storednom21,
                        'platoname2' => $storednom22,
                        'platoname3' => $storednom23,
                        'platoname4' => $storednom24,
                        'platoname5' => $storednom25,
                        'platoname6' => $storednom26,
                        'platoname7' => $storednom27,
                        'platoname8' => $storednom28,
                        'platoname9' => $storednom29,
                        'platoname10' => $storednom210,
                        'platoname11' => $storednom211,
                        'platoname12' => $storednom212,
                        'platoname13' => $storednom213,
                        'platoname14' => $storednom214,
                        'platoname15' => $storednom215,

                        'cantpz1' => $postdprecm21,
                        'cantpz2' => $postdprecm22,
                        'cantpz3' => $postdprecm23,
                        'cantpz4' => $postdprecm24,
                        'cantpz5' => $postdprecm25,
                        'cantpz6' => $postdprecm26,
                        'cantpz7' => $postdprecm27,
                        'cantpz8' => $postdprecm28,
                        'cantpz9' => $postdprecm29,
                        'cantpz10' => $postdprecm210,
                        'cantpz11' => $postdprecm211,
                        'cantpz12' => $postdprecm212,
                        'cantpz13' => $postdprecm213,
                        'cantpz14' => $postdprecm214,
                        'cantpz15' => $postdprecm215,
                        
                        
                        'platoprec' => $resm2
                    ]);
                 



 for($contador = 1; $contador<=15; $contador++){
                        include("costdm2.php");
                        if (($storednom2.$contador)!== null) {

                            if ($postdprecm2.$contador!==0) {
                                include("conecta.php");
                                $collection = $client->$bd->ordenes;
                                $insertOneResult = $collection->insertOne([
                                    'platoname'.$contador => $storednom2.$contador,
                                    'cantpz'.$contador => $postdprecm2.$contador,
                                    'platoprec' => $resm2
                                ]);
                            }
                           
                        }  
                    }




                      include("conecta.php");
                    $collection = $client->$bd->ordenes;
                    $insertOneResult = $collection->insertOne([
                        'platoname' => [
                            'm1' =>   $storednom21,
                            'm2' =>   $storednom21
                        ],
                        'platoprec' => $m2costp1
                    ]);



                    include("costdm1.php");
                    include("costdm2.php");
                    include("costdm3.php");

                    $resfinal=($resm1+$resm2+$resm3);
  
                    echo "<script type='text/javascript'> alert('Su orden esta siendo atendida, su total a pagar es de $$resfinal pesos');
                    window.location.href='menu.php';
                    </script>";
         /*   
                        $postdcantm11 = $_POST['cantpm11']; 
                        $postdcantm12 = $_POST['cantpm12'];
                        $postdcantm13 = $_POST['cantpm13'];

                       

                        $postdplatom11 = $_POST['platillom11'];
                        $postdplatom12 = $_POST['platillom12']; 
                        $postdplatom13 = $_POST['platillom13']; 
                   
                         echo $postdcantm11;
                         echo $postdcantm12;
                         echo $postdcantm13;
                     
                         echo $postdplatom11;
                         echo $postdplatom12;
                         echo $postdplatom13;
                         

 if(isset($_POST["enviar"])) //Boton procesar
 {
    if(isset($_POST["C"]))
        echo $_POST["C"];
     
    if(isset($_POST["java"]))
        echo $_POST["java"];
         
    if(isset($_POST["php"]))
        echo $_POST["php"];
     
    if(isset($_POST["jquery"]))
        echo $_POST["jquery"];

    if(isset($_POST["id"]))
        echo $_POST["Valor del ID"];
        */
}else{
    header("Location: menu.php");
}


?>