<?php
          if (isset($_POST['platillom11'])) {
                        $postdidm11 = $_POST['platillom11'];
                        $postdprecm11 = $_POST['cantpm11'];
                        include("conecta.php");
                        $userDatabaseSelect = $client->$bd->menu1;
                        $documentos = $userDatabaseSelect->find(array('m1nom' => $postdidm11));
                        foreach ($documentos as $documento) {   
                            $storednom11 = $documento['m1nom'];
                            $storedprecm11 = $documento['m1prec'];
                        }
                    }else{
                        $storednom11 = null;
                        $storedprecm11 = 0;
                        $postdprecm11 = 0;
                    }
                    $m1costp1=($storedprecm11*$postdprecm11);
                
?>