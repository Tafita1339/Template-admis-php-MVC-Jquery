<?php

    require('../model/globals.php');

    function addMembers(){
        
        $userName =$_POST["userName"];
        $names =$_POST["names"];
        $dateBirth =$_POST['dateBirth'];
        $birthPlace =$_POST['birthPlace'];
        $lastName =$_POST['lastName'];
        $sex =$_POST['sex'];
        $email =$_POST['email'];
        $passwords = $_POST["passwords"];
        $repasswords = $_POST["repasswords"];
        
        if( isset($userName) && isset($names)
            && isset($dateBirth) && isset( $birthPlace) && isset( $lastName)
            && isset( $sex) && isset($email) && isset($passwords)&&$repasswords)
         {
            if($passwords==$repasswords){

                $passwords = test_input($_POST["passwords"]);
                $q = dbConnect()->prepare('INSERT INTO membres SET userName = :userName, 
                names= :names, lastName = :lastName, dateBirth = :dateBirth,
                birthPlace= :birthPlace, sex = :sex, email = :email, passwords = :passwords');
                $q->execute(array(
                ':userName'=>$userName,
                ':names'=> $names,
                ':lastName'=>$lastName,
                ':dateBirth'=>$dateBirth,
                ':birthPlace'=>$birthPlace,
                ':sex'=>$sex,
                ':email'=>$email,
                ':passwords'=> $passwords
                ));
               
                echo  json_encode(getMember($email));
                $q->closeCursor(); 
            } else{

                echo json_encode("error");
            }
            
        }
        else{
              echo json_encode("error");
        }
    }
    addMembers()
?>