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

                    if (isset($_POST['platillom12'])) {
                        $postdidm12 = $_POST['platillom12'];
                        $postdprecm12 = $_POST['cantpm12'];
                        include("conecta.php");
                        $userDatabaseSelect = $client->$bd->menu1;
                        $documentos = $userDatabaseSelect->find(array('m1nom' => $postdidm12));
                        foreach ($documentos as $documento) {   
                            $storednom12 = $documento['m1nom'];
                            $storedprecm12 = $documento['m1prec'];
                        }
                    }else{
                        $storednom12 = null;
                        $storedprecm12 = 0;
                        $postdprecm12 = 0;
                    }
                    $m1costp2=($storedprecm12*$postdprecm12);

                    if (isset($_POST['platillom13'])) {
                        $postdidm13 = $_POST['platillom13'];
                        $postdprecm13 = $_POST['cantpm13'];
                        include("conecta.php");
                        $userDatabaseSelect = $client->$bd->menu1;
                        $documentos = $userDatabaseSelect->find(array('m1nom' => $postdidm13));
                        foreach ($documentos as $documento) {   
                            $storednom13 = $documento['m1nom'];
                            $storedprecm13 = $documento['m1prec'];
                        }
                    }else{
                        $storednom13 = null;
                        $storedprecm13 = 0;
                        $postdprecm13 = 0;
                    }
                    $m1costp3=($storedprecm13*$postdprecm13);

                    if (isset($_POST['platillom14'])) {
                        $postdidm14 = $_POST['platillom14'];
                        $postdprecm14 = $_POST['cantpm14'];
                        include("conecta.php");
                        $userDatabaseSelect = $client->$bd->menu1;
                        $documentos = $userDatabaseSelect->find(array('m1nom' => $postdidm14));
                        foreach ($documentos as $documento) {   
                            $storednom14 = $documento['m1nom'];
                            $storedprecm14 = $documento['m1prec'];
                        }
                    }else{
                        $storednom14 = null;
                        $storedprecm14 = 0;
                        $postdprecm14 = 0;
                    }
                    $m1costp4=($storedprecm14*$postdprecm14);

                    if (isset($_POST['platillom15'])) {
                        $postdidm15 = $_POST['platillom15'];
                        $postdprecm15 = $_POST['cantpm15'];
                        include("conecta.php");
                        $userDatabaseSelect = $client->$bd->menu1;
                        $documentos = $userDatabaseSelect->find(array('m1nom' => $postdidm15));
                        foreach ($documentos as $documento) {   
                            $storednom15 = $documento['m1nom'];
                            $storedprecm15 = $documento['m1prec'];
                        }
                    }else{
                        $storednom15 = null;
                        $storedprecm15 = 0;
                        $postdprecm15 = 0;
                    }
                    $m1costp5=($storedprecm15*$postdprecm15);
/*
                    if (isset($_POST['platillom16'])) {
                        $postdidm16 = $_POST['platillom16'];
                        $postdprecm16 = $_POST['cantpm16'];
                        include("conecta.php");
                        $userDatabaseSelect = $client->$bd->menu1;
                        $documentos = $userDatabaseSelect->find(array('m1nom' => $postdidm16));
                        foreach ($documentos as $documento) {   
                            $storednom16 = $documento['m1nom'];
                            $storedprecm16 = $documento['m1prec'];
                        }
                    }else{
                        $storednom16 = null;
                        $storedprecm16 = 0;
                        $postdprecm16 = 0;
                    }
                    $m1costp6=($storedprecm16*$postdprecm16);

                    if (isset($_POST['platillom17'])) {
                        $postdidm17 = $_POST['platillom17'];
                        $postdprecm17 = $_POST['cantpm17'];
                        include("conecta.php");
                        $userDatabaseSelect = $client->$bd->menu1;
                        $documentos = $userDatabaseSelect->find(array('m1nom' => $postdidm17));
                        foreach ($documentos as $documento) {   
                            $storednom17 = $documento['m1nom'];
                            $storedprecm17 = $documento['m1prec'];
                        }
                    }else{
                        $storednom17 = null;
                        $storedprecm17 = 0;
                        $postdprecm17 = 0;
                    }
                    $m1costp7=($storedprecm17*$postdprecm17);

                  */

                    $resm1=($m1costp1+$m1costp2+$m1costp3+$m1costp4+$m1costp5);
?>