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

                    if (isset($_POST['platillom18'])) {
                        $postdidm18 = $_POST['platillom18'];
                        $postdprecm18 = $_POST['cantpm18'];
                        include("conecta.php");
                        $userDatabaseSelect = $client->$bd->menu1;
                        $documentos = $userDatabaseSelect->find(array('m1nom' => $postdidm18));
                        foreach ($documentos as $documento) {   
                            $storednom18 = $documento['m1nom'];
                            $storedprecm18 = $documento['m1prec'];
                        }
                    }else{
                        $storednom18 = null;
                        $storedprecm18 = 0;
                        $postdprecm18 = 0;
                    }
                    $m1costp8=($storedprecm18*$postdprecm18);

                    if (isset($_POST['platillom19'])) {
                        $postdidm19 = $_POST['platillom19'];
                        $postdprecm19 = $_POST['cantpm19'];
                        include("conecta.php");
                        $userDatabaseSelect = $client->$bd->menu1;
                        $documentos = $userDatabaseSelect->find(array('m1nom' => $postdidm19));
                        foreach ($documentos as $documento) {   
                            $storednom19 = $documento['m1nom'];
                            $storedprecm19 = $documento['m1prec'];
                        }
                    }else{
                        $storednom19 = null;
                        $storedprecm19 = 0;
                        $postdprecm19 = 0;
                    }
                    $m1costp9=($storedprecm19*$postdprecm19);

                    if (isset($_POST['platillom110'])) {
                        $postdidm110 = $_POST['platillom110'];
                        $postdprecm110 = $_POST['cantpm110'];
                        include("conecta.php");
                        $userDatabaseSelect = $client->$bd->menu1;
                        $documentos = $userDatabaseSelect->find(array('m1nom' => $postdidm110));
                        foreach ($documentos as $documento) {   
                            $storednom110 = $documento['m1nom'];
                            $storedprecm110 = $documento['m1prec'];
                        }
                    }else{
                        $storednom110 = null;
                        $storedprecm110 = 0;
                        $postdprecm110 = 0;
                    }
                    $m1costp10=($storedprecm110*$postdprecm110);

                    if (isset($_POST['platillom111'])) {
                       $postdidm111 = $_POST['platillom111'];
                        $postdprecm111 = $_POST['cantpm111'];
                        include("conecta.php");
                        $userDatabaseSelect = $client->$bd->menu1;
                        $documentos = $userDatabaseSelect->find(array('m1nom' => $postdidm111));
                        foreach ($documentos as $documento) {   
                            $storednom111 = $documento['m1nom'];
                            $storedprecm111 = $documento['m1prec'];
                        }
                    }else{
                        $storednom111 = null;
                        $storedprecm111 = 0;
                        $postdprecm111 = 0;
                    }
                    $m1costp11=($storedprecm111*$postdprecm111);

                    if (isset($_POST['platillom112'])) {
                        $postdidm112 = $_POST['platillom112'];
                        $postdprecm112 = $_POST['cantpm112'];
                        include("conecta.php");
                        $userDatabaseSelect = $client->$bd->menu1;
                        $documentos = $userDatabaseSelect->find(array('m1nom' => $postdidm112));
                        foreach ($documentos as $documento) {   
                            $storednom112 = $documento['m1nom'];
                            $storedprecm112 = $documento['m1prec'];
                        }
                    }else{
                        $storednom112 = null;
                        $storedprecm112 = 0;
                        $postdprecm112 = 0;
                    }
                    $m1costp12=($storedprecm112*$postdprecm112);

                    if (isset($_POST['platillom113'])) {
                       $postdidm113 = $_POST['platillom113'];
                        $postdprecm113 = $_POST['cantpm113'];
                        include("conecta.php");
                        $userDatabaseSelect = $client->$bd->menu1;
                        $documentos = $userDatabaseSelect->find(array('m1nom' => $postdidm113));
                        foreach ($documentos as $documento) {   
                            $storednom113 = $documento['m1nom'];
                            $storedprecm113 = $documento['m1prec'];
                        }
                    }else{
                        $storednom113 = null;
                        $storedprecm113 = 0;
                        $postdprecm113 = 0;
                    }
                    $m1costp13=($storedprecm113*$postdprecm113);

                    if (isset($_POST['platillom114'])) {
                       $postdidm114 = $_POST['platillom114'];
                        $postdprecm114 = $_POST['cantpm114'];
                        include("conecta.php");
                        $userDatabaseSelect = $client->$bd->menu1;
                        $documentos = $userDatabaseSelect->find(array('m1nom' => $postdidm114));
                        foreach ($documentos as $documento) {   
                            $storednom114 = $documento['m1nom'];
                            $storedprecm114 = $documento['m1prec'];
                        }
                    }else{
                        $storednom114 = null;
                        $storedprecm114 = 0;
                        $postdprecm114 = 0;
                    }
                    $m1costp14=($storedprecm114*$postdprecm114);

                    if (isset($_POST['platillom115'])) {
                       $postdidm115 = $_POST['platillom115'];
                        $postdprecm115 = $_POST['cantpm115'];
                        include("conecta.php");
                        $userDatabaseSelect = $client->$bd->menu1;
                        $documentos = $userDatabaseSelect->find(array('m1nom' => $postdidm115));
                        foreach ($documentos as $documento) {   
                            $storednom115 = $documento['m1nom'];
                            $storedprecm115 = $documento['m1prec'];
                        }
                    }else{
                        $storednom115 = null;
                        $storedprecm115 = 0;
                        $postdprecm115 = 0;
                    }
                    $m1costp15=($storedprecm115*$postdprecm115);

                    $resm1=($m1costp1+$m1costp2+$m1costp3+$m1costp4+$m1costp5+$m1costp6+$m1costp7+$m1costp8+$m1costp9+$m1costp10+$m1costp11+$m1costp12+$m1costp13+$m1costp14+$m1costp15);
?>