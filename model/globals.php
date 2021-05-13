<?php

     function dbConnect()
     {
         try{
                 $db = new PDO('mysql:host=localhost;dbname=website;charset=utf8','root','rtf1339');
                 $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
             return $db ;
         }
         catch(Exception $e)
             {
                 die('Erreur'. $e->getMessage());
             }
     }
     function test_input($data){
         
        $a =password_hash($data,PASSWORD_DEFAULT);
        return $a;
    }

   function getEmailMembers(){

        $q = dbConnect()->prepare('SELECT email FROM membres');
        $q->execute();
        $resulat = $q->fetchAll(PDO::FETCH_ASSOC);
        $donnes=array();
        for($i=0;$i < count($resulat);$i++){
            $donnes[$i]=$resulat[$i]["email"];
        }
        return $donnes;
        
   }

   function getOnePasswords($email){

        $q = dbConnect()->prepare('SELECT passwords FROM membres
        WHERE email = :email');
        $q->execute(array(':email'=>$email));
        $resulat = $q->fetch();
        return  $resulat[0];
   }

   function getMember($email){
 
        $q = dbConnect()->prepare('SELECT userName,names,lastName,dateBirth,birthPlace,sex,email,passwords  
        FROM membres WHERE email = :email');
        $q->execute(array(':email'=>$email));
        $resulat = $q->fetchAll(PDO::FETCH_ASSOC);
        return $resulat[0];

   }

   function verifyEmailUser($email){
       
        if(in_array($email, getEmailMembers())){
    
            return true;

        }else{

            return false;
        }
   }
   
   function verifyPswUser($passwords,$email){

    $verify = password_verify($passwords,getOnePasswords($email));
    return $verify;

   }
?>