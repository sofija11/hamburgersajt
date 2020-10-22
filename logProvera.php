<?php

require "config/konekcija.php";

if(isset($_POST['btnSendL'])){
    $usernameL = $_POST['userL'];
    $passwordL = $_POST['passL'];
    $reKorisnickoL="/^[a-zA-z0-9]{7,17}$/";
    $rePassL = "/^(?=.*\d).{6,}$/";
    $errorsL = [];
    if(!preg_match($reKorisnickoL, $usernameL)){
    $errorsL[] = " Username nije u dobrom formatu.";
    }
    if(!preg_match($rePassL, $passwordL)){
    $errorsL[] = "Password nije u dobrom formatu.";
    }
    if(count($errorsL) != 0){
    $codee = 422;
    }
    else{
        $usernameLL = $_POST['userL'];
        $passwordLL = md5($_POST['passL']);
    
    $upitL = "SELECT * FROM user WHERE
    username = :user AND password = :password";
    $pripremaL = $conn->prepare($upitL);
    $pripremaL->bindParam(':user', $usernameLL);
    $pripremaL->bindParam(':password', $passwordLL);
    $rezultatL = $pripremaL->execute();
    if($rezultatL){
    if($rezultatL->rowCount()==1){
    $korisnikL = $rezultatL->fetch();
    $_SESSION['korisnik_id'] = $korisnikL->idUser;
    $_SESSION['korisnik'] = $korisnikL;
    if($_SESSION['korisnik']->idRole==1){
    header("Location:index.html");
    }else{
    header("Location:admin.php");
    }}}
    }
    }
?> 