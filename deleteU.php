<?php
session_start();
require "config/konekcija.php";

if(!isset($_GET['id'])){
   header('Location: admin.php');
}

    $id =$_GET['id'];
    $upit = "DELETE FROM user WHERE idUser = :id";
    $rez = $conn->prepare($upit);

    $rez->bindParam(":id", $id);

    $rez->execute();
    
    header("Location: admin.php");
?>