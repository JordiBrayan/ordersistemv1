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
                                    header("Location: regular-page.html");
                               }else
                                {   
                                 header("Location: login.html");

                                }

                            }else if($setipo == cliente)
                                {   
                                  $cli = $userDatabaseSelect->findOne(array('username' => $postdUsername,
                                  'password' => $postdPassword, 'tipousu' => $setipo)); 
                                    if ($cli) {
                                        header("Location: homead.php");
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