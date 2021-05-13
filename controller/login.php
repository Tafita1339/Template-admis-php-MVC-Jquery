<?php

    require('../model/globals.php');
    

    function login(){

        $email =$_GET["email"];
        $passwords = $_GET["passwords"];
        $remember = $_GET["remember"];
        
        
        if( isset($email) && isset($passwords))
        { 
            
            if(verifyEmailUser($email) == true){
                
                if(verifyPswUser($passwords,$email)==true){
                    session_start();
                    $a= getMember($email);
                    $_SESSION["userName"]= $a["userName"];
                    $_SESSION["passwords"]=  $a['passwords'];
                    $_SESSION["names"]=  $a['names'];
                    $_SESSION["dateBirth"]=  $a['dateBirth'];
                    $_SESSION["birthPlace"]=  $a['birthPlace'];
                    $_SESSION["sex"]=  $a['sex'];
                    $_SESSION["email"]=  $a['email'];
                    $_SESSION["lastName"]=  $a['lastName'];

                    $email_user =$_SESSION["email"];
                    $passwords_user = test_input($_SESSION["passwords"]);

                    if($remember=="on"){
                        setcookie($email_user, $passwords_user, time() + 365*24*3600 ,null,null,false,true);
                    }
                    echo  json_encode($_SESSION);
                    
                }else{

                    echo json_encode("error");
                }
                
            }else{
                   echo json_encode("error");
            }
        }
    }

   login();
?>