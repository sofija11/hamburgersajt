<?php
session_start();
require "config/konekcija.php";


if(isset($_POST['btnSendU'])){
    $firstname=$_POST['firstnameU'];
    $lastname=$_POST['lastnameU'];
    $username=$_POST['usernameU'];
    $password=md5($_POST['passwordU']);
    $rePassword=md5($_POST['rePasswordU']);
    $email=$_POST['email'];
    $id_uloga=$_POST['idRole'];

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
    if(!$_POST['password']){
        array_push($errorss,'Field for password is required');
    }else if(!preg_match($rePassword,$_POST['password'])){
        array_push($errorss,'Not valid form pasw');
    }
    if(($_POST['rePassword'])!=($_POST['password'])){
        array_push($errorss,'Field for repeat and password do not match');
    }else if(!$_POST['rePassword']){
        array_push($errorss,'Field for repeat password is required');
    }
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        array_push($errorss,'Not valid form email');
    }
    if(count($errorss)>0){
        echo 'greska';

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