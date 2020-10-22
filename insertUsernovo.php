<?php
session_start();
require "config/konekcija.php";


if(isset($_POST['btnSend'])){
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $repeatPassword=$_POST['rePassword'];
    $email=$_POST['email'];
    

    $data=[];
    $errorss=[];
    $reFirstLast="/^[A-Z]{1}[a-z]{2,13}$/";
    $rePassword="/^(?=.*\d).{6,}$/";
    $reUsername="/^[a-zA-z0-9]{7,17}$/";

    if(empty($firstname)){
        array_push($errorss,'Field for firstname is required');
    }else if(!preg_match($reFirstLast,$firstname)){
        array_push($errorss,'Not valid form fn');
    }
    if(empty($lastname)){
        array_push($errorss,'Field for lastname is required');
    }else if(!preg_match($reFirstLast,$lastname)){
        array_push($errorss,'Not valid form ln');
    }
    if(empty($username)){
        array_push($errorss,'Field for username is required');
    }else if(!preg_match($reUsername,$username)){
        array_push($errorss,'Not valid form un');
    }
    if(empty($password)){
        array_push($errorss,'Field for password is required');
    }else if(!preg_match($rePassword,$password){
        array_push($errorss,'Not valid form pasw');
    }
    if(($_POST['repeatPassword'])!=($_POST['password'])){
        array_push($errorss,'Field for repeat and password do not match');
    }else if(empty($repeatPassword)){
        array_push($errorss,'Field for repeat password is required');
    }
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        array_push($errorss,'Not valid form email');
    }
    if(count($errorss)>0){
        var_dump($errorss);

    }else{
        
        
        $upit="INSERT INTO user(idUser,firstname,lastname,username,password,email,idRole) values (NULL,:ime,:prezime,:kor,:lozinka,:mejl,1)";

        $statement=$conn->prepare($upit);
        $statement->bindParam(":ime",$firstname);
        $statement->bindParam(":prezime",$lastname);
        $statement->bindParam(":kor",$username);
        $statement->bindParam(":lozinka",$password);
        $statement->bindParam(":mejl",$email);
       
        $uradj=$statement->execute();
        if($uradj){
            header("Location:index.php");
        }
        else{
            header("Location:index.php");
        }

    }

}

?>