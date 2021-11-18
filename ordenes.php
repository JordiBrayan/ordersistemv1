<?php


if(isset($_POST['ordenar']))
                   {
                    include("costdm1.php");
                    include("costdm2.php");
                    include("costdm3.php");

                    //'col1' => md5(uniqid(null, true)),
                    $resfinal=($resm1+$resm2+$resm3);
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

                        'platoname16' => $storednom21,
                        'platoname17' => $storednom22,
                        'platoname18' => $storednom23,
                        'platoname19' => $storednom24,
                        'platoname20' => $storednom25,
                        'platoname21' => $storednom26,
                        'platoname22' => $storednom27,
                        'platoname23' => $storednom28,
                        'platoname24' => $storednom29,
                        'platoname25' => $storednom210,
                        'platoname26' => $storednom211,
                        'platoname27' => $storednom212,
                        'platoname28' => $storednom213,
                        'platoname29' => $storednom214,
                        'platoname30' => $storednom215,

                        'platoname31' => $storednom31,
                        'platoname32' => $storednom32,
                        'platoname33' => $storednom33,
                        'platoname34' => $storednom34,
                        'platoname35' => $storednom35,
                        'platoname36' => $storednom36,
                        'platoname37' => $storednom37,
                        'platoname38' => $storednom38,
                        'platoname39' => $storednom39,
                        'platoname40' => $storednom310,
                        'platoname41' => $storednom311,
                        'platoname42' => $storednom312,
                        'platoname43' => $storednom313,
                        'platoname44' => $storednom314,
                        'platoname45' => $storednom315,

                        

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

                        'cantpz16' => $postdprecm21,
                        'cantpz17' => $postdprecm22,
                        'cantpz18' => $postdprecm23,
                        'cantpz19' => $postdprecm24,
                        'cantpz20' => $postdprecm25,
                        'cantpz21' => $postdprecm26,
                        'cantpz22' => $postdprecm27,
                        'cantpz23' => $postdprecm28,
                        'cantpz24' => $postdprecm29,
                        'cantpz25' => $postdprecm210,
                        'cantpz26' => $postdprecm211,
                        'cantpz27' => $postdprecm212,
                        'cantpz28' => $postdprecm213,
                        'cantpz29' => $postdprecm214,
                        'cantpz30' => $postdprecm215,

                        'cantpz31' => $postdprecm31,
                        'cantpz32' => $postdprecm32,
                        'cantpz33' => $postdprecm33,
                        'cantpz34' => $postdprecm34,
                        'cantpz35' => $postdprecm35,
                        'cantpz36' => $postdprecm36,
                        'cantpz37' => $postdprecm37,
                        'cantpz38' => $postdprecm38,
                        'cantpz39' => $postdprecm39,
                        'cantpz40' => $postdprecm310,
                        'cantpz41' => $postdprecm311,
                        'cantpz42' => $postdprecm312,
                        'cantpz43' => $postdprecm313,
                        'cantpz44' => $postdprecm314,
                        'cantpz45' => $postdprecm315,
                        'platoprec' => $resfinal
                    ]);
                   
  
                    echo "<script type='text/javascript'> alert('Su orden esta siendo atendida, su total a pagar es de $$resfinal pesos');
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