<?php
                                        if (isset($_POST['platillom31'])) {
                                            $postdidm31 = $_POST['platillom31'];
                                            $postdprecm31 = $_POST['cantpm31'];
                                            include("conecta.php");
                                            $userDatabaseSelect = $client->$bd->menu3;
                                            $documentos = $userDatabaseSelect->find(array('m3nom' => $postdidm31));
                                            foreach ($documentos as $documento) {   
                                                $storednom31 = $documento['m3nom'];
                                                $storedprecm31 = $documento['m3prec'];
                                            }
                                        }else{
                                            $storednom31 = null;
                                            $storedprecm31 = 0;
                                            $postdprecm31 = 0;
                                        }
                                        $m3costp1=($storedprecm31*$postdprecm31);
                    
                                        if (isset($_POST['platillom32'])) {
                                            $postdidm32 = $_POST['platillom32'];
                                            $postdprecm32 = $_POST['cantpm32'];
                                            include("conecta.php");
                                            $userDatabaseSelect = $client->$bd->menu3;
                                            $documentos = $userDatabaseSelect->find(array('m3nom' => $postdidm32));
                                            foreach ($documentos as $documento) {   
                                                $storednom32 = $documento['m3nom'];
                                                $storedprecm32 = $documento['m3prec'];
                                            }
                                        }else{
                                            $storednom32 = null;
                                            $storedprecm32 = 0;
                                            $postdprecm32 = 0;
                                        }
                                        $m3costp2=($storedprecm32*$postdprecm32);
                    
                                        if (isset($_POST['platillom33'])) {
                                            $postdidm33 = $_POST['platillom33'];
                                            $postdprecm33 = $_POST['cantpm33'];
                                            include("conecta.php");
                                            $userDatabaseSelect = $client->$bd->menu3;
                                            $documentos = $userDatabaseSelect->find(array('m3nom' => $postdidm33));
                                            foreach ($documentos as $documento) {   
                                                $storednom33 = $documento['m3nom'];
                                                $storedprecm33 = $documento['m3prec'];
                                            }
                                        }else{
                                            $storednom33 = null;
                                            $storedprecm33 = 0;
                                            $postdprecm33 = 0;
                                        }
                                        $m3costp3=($storedprecm33*$postdprecm33);
                    
                                        if (isset($_POST['platillom34'])) {
                                            $postdidm34 = $_POST['platillom34'];
                                            $postdprecm34 = $_POST['cantpm34'];
                                            include("conecta.php");
                                            $userDatabaseSelect = $client->$bd->menu3;
                                            $documentos = $userDatabaseSelect->find(array('m3nom' => $postdidm34));
                                            foreach ($documentos as $documento) {   
                                                $storednom34 = $documento['m3nom'];
                                                $storedprecm34 = $documento['m3prec'];
                                            }
                                        }else{
                                            $storednom34 = null;
                                            $storedprecm34 = 0;
                                            $postdprecm34 = 0;
                                        }
                                        $m3costp4=($storedprecm34*$postdprecm34);
                    
                                        if (isset($_POST['platillom35'])) {
                                            $postdidm35 = $_POST['platillom35'];
                                            $postdprecm35 = $_POST['cantpm35'];
                                            include("conecta.php");
                                            $userDatabaseSelect = $client->$bd->menu3;
                                            $documentos = $userDatabaseSelect->find(array('m3nom' => $postdidm35));
                                            foreach ($documentos as $documento) {   
                                                $storednom35 = $documento['m3nom'];
                                                $storedprecm35 = $documento['m3prec'];
                                            }
                                        }else{
                                            $storednom35 = null;
                                            $storedprecm35 = 0;
                                            $postdprecm35 = 0;
                                        }
                                        $m3costp5=($storedprecm35*$postdprecm35);
                    
                                        if (isset($_POST['platillom36'])) {
                                            $postdidm36 = $_POST['platillom36'];
                                            $postdprecm36 = $_POST['cantpm36'];
                                            include("conecta.php");
                                            $userDatabaseSelect = $client->$bd->menu3;
                                            $documentos = $userDatabaseSelect->find(array('m3nom' => $postdidm36));
                                            foreach ($documentos as $documento) {   
                                                $storednom36 = $documento['m3nom'];
                                                $storedprecm36 = $documento['m3prec'];
                                            }
                                        }else{
                                            $storednom36 = null;
                                            $storedprecm36 = 0;
                                            $postdprecm36 = 0;
                                        }
                                        $m3costp6=($storedprecm36*$postdprecm36);
                    
                                        if (isset($_POST['platillom37'])) {
                                            $postdidm37 = $_POST['platillom37'];
                                            $postdprecm37 = $_POST['cantpm37'];
                                            include("conecta.php");
                                            $userDatabaseSelect = $client->$bd->menu3;
                                            $documentos = $userDatabaseSelect->find(array('m3nom' => $postdidm37));
                                            foreach ($documentos as $documento) {   
                                                $storednom37 = $documento['m3nom'];
                                                $storedprecm37 = $documento['m3prec'];
                                            }
                                        }else{
                                            $storednom37 = null;
                                            $storedprecm37 = 0;
                                            $postdprecm37 = 0;
                                        }
                                        $m3costp7=($storedprecm37*$postdprecm37);
                    
                                        if (isset($_POST['platillom38'])) {
                                            $postdidm38 = $_POST['platillom38'];
                                            $postdprecm38 = $_POST['cantpm38'];
                                            include("conecta.php");
                                            $userDatabaseSelect = $client->$bd->menu3;
                                            $documentos = $userDatabaseSelect->find(array('m3nom' => $postdidm38));
                                            foreach ($documentos as $documento) {   
                                                $storednom38 = $documento['m3nom'];
                                                $storedprecm38 = $documento['m3prec'];
                                            }
                                        }else{
                                            $storednom38 = null;
                                            $storedprecm38 = 0;
                                            $postdprecm38 = 0;
                                        }
                                        $m3costp8=($storedprecm38*$postdprecm38);
                    
                                        if (isset($_POST['platillom39'])) {
                                            $postdidm39 = $_POST['platillom39'];
                                            $postdprecm39 = $_POST['cantpm39'];
                                            include("conecta.php");
                                            $userDatabaseSelect = $client->$bd->menu3;
                                            $documentos = $userDatabaseSelect->find(array('m3nom' => $postdidm39));
                                            foreach ($documentos as $documento) {   
                                                $storednom39 = $documento['m3nom'];
                                                $storedprecm39 = $documento['m3prec'];
                                            }
                                        }else{
                                            $storednom39 = null;
                                            $storedprecm39 = 0;
                                            $postdprecm39 = 0;
                                        }
                                        $m3costp9=($storedprecm39*$postdprecm39);
                    
                                        if (isset($_POST['platillom310'])) {
                                            $postdidm310 = $_POST['platillom310'];
                                            $postdprecm310 = $_POST['cantpm310'];
                                            include("conecta.php");
                                            $userDatabaseSelect = $client->$bd->menu3;
                                            $documentos = $userDatabaseSelect->find(array('m3nom' => $postdidm310));
                                            foreach ($documentos as $documento) {   
                                                $storednom310 = $documento['m3nom'];
                                                $storedprecm310 = $documento['m3prec'];
                                            }
                                        }else{
                                            $storednom310 = null;
                                            $storedprecm310 = 0;
                                            $postdprecm310 = 0;
                                        }
                                        $m3costp10=($storedprecm310*$postdprecm310);
                    
                                        if (isset($_POST['platillom311'])) {
                                           $postdidm311 = $_POST['platillom311'];
                                            $postdprecm311 = $_POST['cantpm311'];
                                            include("conecta.php");
                                            $userDatabaseSelect = $client->$bd->menu3;
                                            $documentos = $userDatabaseSelect->find(array('m3nom' => $postdidm311));
                                            foreach ($documentos as $documento) {   
                                                $storednom311 = $documento['m3nom'];
                                                $storedprecm311 = $documento['m3prec'];
                                            }
                                        }else{
                                            $storednom311 = null;
                                            $storedprecm311 = 0;
                                            $postdprecm311 = 0;
                                        }
                                        $m3costp11=($storedprecm311*$postdprecm311);
                    
                                        if (isset($_POST['platillom312'])) {
                                            $postdidm312 = $_POST['platillom312'];
                                            $postdprecm312 = $_POST['cantpm312'];
                                            include("conecta.php");
                                            $userDatabaseSelect = $client->$bd->menu3;
                                            $documentos = $userDatabaseSelect->find(array('m3nom' => $postdidm312));
                                            foreach ($documentos as $documento) {   
                                                $storednom312 = $documento['m3nom'];
                                                $storedprecm312 = $documento['m3prec'];
                                            }
                                        }else{
                                            $storednom312 = null;
                                            $storedprecm312 = 0;
                                            $postdprecm312 = 0;
                                        }
                                        $m3costp12=($storedprecm312*$postdprecm312);
                    
                                        if (isset($_POST['platillom313'])) {
                                           $postdidm313 = $_POST['platillom313'];
                                            $postdprecm313 = $_POST['cantpm313'];
                                            include("conecta.php");
                                            $userDatabaseSelect = $client->$bd->menu3;
                                            $documentos = $userDatabaseSelect->find(array('m3nom' => $postdidm313));
                                            foreach ($documentos as $documento) {   
                                                $storednom313 = $documento['m3nom'];
                                                $storedprecm313 = $documento['m3prec'];
                                            }
                                        }else{
                                            $storednom313 = null;
                                            $storedprecm313 = 0;
                                            $postdprecm313 = 0;
                                        }
                                        $m3costp13=($storedprecm313*$postdprecm313);
                    
                                        if (isset($_POST['platillom314'])) {
                                           $postdidm314 = $_POST['platillom314'];
                                            $postdprecm314 = $_POST['cantpm314'];
                                            include("conecta.php");
                                            $userDatabaseSelect = $client->$bd->menu3;
                                            $documentos = $userDatabaseSelect->find(array('m3nom' => $postdidm314));
                                            foreach ($documentos as $documento) {   
                                                $storednom314 = $documento['m3nom'];
                                                $storedprecm314 = $documento['m3prec'];
                                            }
                                        }else{
                                            $storednom314 = null;
                                            $storedprecm314 = 0;
                                            $postdprecm314 = 0;
                                        }
                                        $m3costp14=($storedprecm314*$postdprecm314);
                    
                                        if (isset($_POST['platillom315'])) {
                                           $postdidm315 = $_POST['platillom315'];
                                            $postdprecm315 = $_POST['cantpm315'];
                                            include("conecta.php");
                                            $userDatabaseSelect = $client->$bd->menu3;
                                            $documentos = $userDatabaseSelect->find(array('m3nom' => $postdidm315));
                                            foreach ($documentos as $documento) {   
                                                $storednom315 = $documento['m3nom'];
                                                $storedprecm315 = $documento['m3prec'];
                                            }
                                        }else{
                                            $storednom315 = null;
                                            $storedprecm315 = 0;
                                            $postdprecm315 = 0;
                                        }
                                        $m3costp15=($storedprecm315*$postdprecm315);

                                        $resm3=($m3costp1+$m3costp2+$m3costp3+$m3costp4+$m3costp5+$m3costp6+$m3costp7+$m3costp8+$m3costp9+$m3costp10+$m3costp11+$m3costp12+$m3costp13+$m3costp14+$m3costp15);
?>