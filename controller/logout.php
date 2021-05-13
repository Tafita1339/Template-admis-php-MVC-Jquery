<?php

    function logout(){
        $state = $_GET["state"];
        if(isset($state) && $state=='logout')
        { 
            session_start();
            $_SESSION = array();
            session_destroy();
            $_COOKIE['$email_user']='';
            $_COOKIE['$passwords_user']='';
            
           echo "success";
        }
    }
    logout()

?>