<?php
                    if (isset($_POST['platillom21'])) {
                        $postdidm21 = $_POST['platillom21'];
                        $postdprecm21 = $_POST['cantpm21'];
                        include("conecta.php");
                        $userDatabaseSelect = $client->$bd->menu2;
                        $documentos = $userDatabaseSelect->find(array('m2nom' => $postdidm21));
                        foreach ($documentos as $documento) {   
                            $storednom21 = $documento['m2nom'];
                            $storedprecm21 = $documento['m2prec'];
                        }
                    }else{
                        $storednom21 = null;
                        $storedprecm21 = 0;
                        $postdprecm21 = 0;
                    }
                    $m2costp1=($storedprecm21*$postdprecm21);

                    if (isset($_POST['platillom22'])) {
                        $postdidm22 = $_POST['platillom22'];
                        $postdprecm22 = $_POST['cantpm22'];
                        include("conecta.php");
                        $userDatabaseSelect = $client->$bd->menu2;
                        $documentos = $userDatabaseSelect->find(array('m2nom' => $postdidm22));
                        foreach ($documentos as $documento) {   
                            $storednom22 = $documento['m2nom'];
                            $storedprecm22 = $documento['m2prec'];
                        }
                    }else{
                        $storednom22 = null;
                        $storedprecm22 = 0;
                        $postdprecm22 = 0;
                    }
                    $m2costp2=($storedprecm22*$postdprecm22);

                    if (isset($_POST['platillom23'])) {
                        $postdidm23 = $_POST['platillom23'];
                        $postdprecm23 = $_POST['cantpm23'];
                        include("conecta.php");
                        $userDatabaseSelect = $client->$bd->menu2;
                        $documentos = $userDatabaseSelect->find(array('m2nom' => $postdidm23));
                        foreach ($documentos as $documento) {   
                            $storednom23 = $documento['m2nom'];
                            $storedprecm23 = $documento['m2prec'];
                        }
                    }else{
                        $storednom23 = null;
                        $storedprecm23 = 0;
                        $postdprecm23 = 0;
                    }
                    $m2costp3=($storedprecm23*$postdprecm23);

                    if (isset($_POST['platillom24'])) {
                        $postdidm24 = $_POST['platillom24'];
                        $postdprecm24 = $_POST['cantpm24'];
                        include("conecta.php");
                        $userDatabaseSelect = $client->$bd->menu2;
                        $documentos = $userDatabaseSelect->find(array('m2nom' => $postdidm24));
                        foreach ($documentos as $documento) {   
                            $storednom24 = $documento['m2nom'];
                            $storedprecm24 = $documento['m2prec'];
                        }
                    }else{
                        $storednom24 = null;
                        $storedprecm24 = 0;
                        $postdprecm24 = 0;
                    }
                    $m2costp4=($storedprecm24*$postdprecm24);

                    if (isset($_POST['platillom25'])) {
                        $postdidm25 = $_POST['platillom25'];
                        $postdprecm25 = $_POST['cantpm25'];
                        include("conecta.php");
                        $userDatabaseSelect = $client->$bd->menu2;
                        $documentos = $userDatabaseSelect->find(array('m2nom' => $postdidm25));
                        foreach ($documentos as $documento) {   
                            $storednom25 = $documento['m2nom'];
                            $storedprecm25 = $documento['m2prec'];
                        }
                    }else{
                        $storednom25 = null;
                        $storedprecm25 = 0;
                        $postdprecm25 = 0;
                    }
                    $m2costp5=($storedprecm25*$postdprecm25);

                    if (isset($_POST['platillom26'])) {
                        $postdidm26 = $_POST['platillom26'];
                        $postdprecm26 = $_POST['cantpm26'];
                        include("conecta.php");
                        $userDatabaseSelect = $client->$bd->menu2;
                        $documentos = $userDatabaseSelect->find(array('m2nom' => $postdidm26));
                        foreach ($documentos as $documento) {   
                            $storednom26 = $documento['m2nom'];
                            $storedprecm26 = $documento['m2prec'];
                        }
                    }else{
                        $storednom26 = null;
                        $storedprecm26 = 0;
                        $postdprecm26 = 0;
                    }
                    $m2costp6=($storedprecm26*$postdprecm26);

                    if (isset($_POST['platillom27'])) {
                        $postdidm27 = $_POST['platillom27'];
                        $postdprecm27 = $_POST['cantpm27'];
                        include("conecta.php");
                        $userDatabaseSelect = $client->$bd->menu2;
                        $documentos = $userDatabaseSelect->find(array('m2nom' => $postdidm27));
                        foreach ($documentos as $documento) {   
                            $storednom27 = $documento['m2nom'];
                            $storedprecm27 = $documento['m2prec'];
                        }
                    }else{
                        $storednom27 = null;
                        $storedprecm27 = 0;
                        $postdprecm27 = 0;
                    }
                    $m2costp7=($storedprecm27*$postdprecm27);

                    if (isset($_POST['platillom28'])) {
                        $postdidm28 = $_POST['platillom28'];
                        $postdprecm28 = $_POST['cantpm28'];
                        include("conecta.php");
                        $userDatabaseSelect = $client->$bd->menu2;
                        $documentos = $userDatabaseSelect->find(array('m2nom' => $postdidm28));
                        foreach ($documentos as $documento) {   
                            $storednom28 = $documento['m2nom'];
                            $storedprecm28 = $documento['m2prec'];
                        }
                    }else{
                        $storednom28 = null;
                        $storedprecm28 = 0;
                        $postdprecm28 = 0;
                    }
                    $m2costp8=($storedprecm28*$postdprecm28);

                    if (isset($_POST['platillom29'])) {
                        $postdidm29 = $_POST['platillom29'];
                        $postdprecm29 = $_POST['cantpm29'];
                        include("conecta.php");
                        $userDatabaseSelect = $client->$bd->menu2;
                        $documentos = $userDatabaseSelect->find(array('m2nom' => $postdidm29));
                        foreach ($documentos as $documento) {   
                            $storednom29 = $documento['m2nom'];
                            $storedprecm29 = $documento['m2prec'];
                        }
                    }else{
                        $storednom29 = null;
                        $storedprecm29 = 0;
                        $postdprecm29 = 0;
                    }
                    $m2costp9=($storedprecm29*$postdprecm29);

                    if (isset($_POST['platillom210'])) {
                        $postdidm210 = $_POST['platillom210'];
                        $postdprecm210 = $_POST['cantpm210'];
                        include("conecta.php");
                        $userDatabaseSelect = $client->$bd->menu2;
                        $documentos = $userDatabaseSelect->find(array('m2nom' => $postdidm210));
                        foreach ($documentos as $documento) {   
                            $storednom210 = $documento['m2nom'];
                            $storedprecm210 = $documento['m2prec'];
                        }
                    }else{
                        $storednom210 = null;
                        $storedprecm210 = 0;
                        $postdprecm210 = 0;
                    }
                    $m2costp10=($storedprecm210*$postdprecm210);

                    if (isset($_POST['platillom211'])) {
                       $postdidm211 = $_POST['platillom211'];
                        $postdprecm211 = $_POST['cantpm211'];
                        include("conecta.php");
                        $userDatabaseSelect = $client->$bd->menu2;
                        $documentos = $userDatabaseSelect->find(array('m2nom' => $postdidm211));
                        foreach ($documentos as $documento) {   
                            $storednom211 = $documento['m2nom'];
                            $storedprecm211 = $documento['m2prec'];
                        }
                    }else{
                        $storednom211 = null;
                        $storedprecm211 = 0;
                        $postdprecm211 = 0;
                    }
                    $m2costp11=($storedprecm211*$postdprecm211);

                    if (isset($_POST['platillom212'])) {
                        $postdidm212 = $_POST['platillom212'];
                        $postdprecm212 = $_POST['cantpm212'];
                        include("conecta.php");
                        $userDatabaseSelect = $client->$bd->menu2;
                        $documentos = $userDatabaseSelect->find(array('m2nom' => $postdidm212));
                        foreach ($documentos as $documento) {   
                            $storednom212 = $documento['m2nom'];
                            $storedprecm212 = $documento['m2prec'];
                        }
                    }else{
                        $storednom212 = null;
                        $storedprecm212 = 0;
                        $postdprecm212 = 0;
                    }
                    $m2costp12=($storedprecm212*$postdprecm212);

                    if (isset($_POST['platillom213'])) {
                       $postdidm213 = $_POST['platillom213'];
                        $postdprecm213 = $_POST['cantpm213'];
                        include("conecta.php");
                        $userDatabaseSelect = $client->$bd->menu2;
                        $documentos = $userDatabaseSelect->find(array('m2nom' => $postdidm213));
                        foreach ($documentos as $documento) {   
                            $storednom213 = $documento['m2nom'];
                            $storedprecm213 = $documento['m2prec'];
                        }
                    }else{
                        $storednom213 = null;
                        $storedprecm213 = 0;
                        $postdprecm213 = 0;
                    }
                    $m2costp13=($storedprecm213*$postdprecm213);

                    if (isset($_POST['platillom214'])) {
                       $postdidm214 = $_POST['platillom214'];
                        $postdprecm214 = $_POST['cantpm214'];
                        include("conecta.php");
                        $userDatabaseSelect = $client->$bd->menu2;
                        $documentos = $userDatabaseSelect->find(array('m2nom' => $postdidm214));
                        foreach ($documentos as $documento) {   
                            $storednom214 = $documento['m2nom'];
                            $storedprecm214 = $documento['m2prec'];
                        }
                    }else{
                        $storednom214 = null;
                        $storedprecm214 = 0;
                        $postdprecm214 = 0;
                    }
                    $m2costp14=($storedprecm214*$postdprecm214);

                    if (isset($_POST['platillom215'])) {
                       $postdidm215 = $_POST['platillom215'];
                        $postdprecm215 = $_POST['cantpm215'];
                        include("conecta.php");
                        $userDatabaseSelect = $client->$bd->menu2;
                        $documentos = $userDatabaseSelect->find(array('m2nom' => $postdidm215));
                        foreach ($documentos as $documento) {   
                            $storednom215 = $documento['m2nom'];
                            $storedprecm215 = $documento['m2prec'];
                        }
                    }else{
                        $storednom215 = null;
                        $storedprecm215 = 0;
                        $postdprecm215 = 0;
                    }
                    $m2costp15=($storedprecm215*$postdprecm215);

                    $resm2=($m2costp1+$m2costp2+$m2costp3+$m2costp4+$m2costp5+$m2costp6+$m2costp7+$m2costp8+$m2costp9+$m2costp10+$m2costp11+$m2costp12+$m2costp13+$m2costp14+$m2costp15);
?>