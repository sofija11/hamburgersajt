<?php
session_start();
require "config/konekcija.php";
if(isset($_POST['btnUpdate'])){
    
   $id=$_GET['id']; 
  

    $ime = $_POST['firstnameUp'];
    $prezime = $_POST['lastnameUp'];
    $kor = $_POST['usernameUp'];
    $la = $_POST['passwordUp'];
    $email = $_POST['emailUp'];
    
    $uloga = $_POST['idRole'];

    
    $upit = "UPDATE user SET idUser=NULL firstname = :ime, lastname = :prezime, username = :korisnicko, password = :pass, email = :email, idRole = :uloga WHERE idUser = :id";

    $rez = $conn->prepare($upit);

    $rez->bindParam(":id", $id);

    $rez->bindParam(":ime", $ime);
    $rez->bindParam(":prezime", $prezime);
    $rez->bindParam(":korisnicko", $kor);
    $rez->bindParam(":email", $email);
    $rez->bindParam(":pass", $la);
    $rez->bindParam(":uloga", $uloga);

    $rez->execute();
    header("Location:admin.php");


}
?>