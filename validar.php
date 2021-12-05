<?php

                if(isset($_POST['login']))
                   {
                        $postdUsername = $_POST['usnom']; 
                        $postdPassword = $_POST['uspass'];
                        $setipo = $_POST['setipousu'];
                        include("conecta.php");
                        $userDatabaseSelect = $client->$bd->users;


                            if($setipo == Administrador)
                            {   
                              $ad = $userDatabaseSelect->findOne(array('username' => $postdUsername,
                               'password' => $postdPassword, 'tipousu' => $setipo)); 
                               if ($ad) {
                                    header("Location: homead.html");
                               }else
                                {   
                                 header("Location: login.html");

                                }

                            }else if($setipo == Mesero)
                                {   
                                  $cli = $userDatabaseSelect->findOne(array('username' => $postdUsername,
                                  'password' => $postdPassword, 'tipousu' => $setipo)); 
                                    if ($cli) {
                                        header("Location: adordenesm.php");
                                   }else
                                    {   
                                     header("Location: login.html");
    
                                    }

                                }          
                    }else
                       {
                        header("Location: login.html");
                       }
          
?>