<?php

 session_start();
 include  "config/konekcija.php";
 if(isset($_GET['id'])){
    header('Location:admin.php');
}
 $id = $_GET['id'];
 $upitPO = "DELETE FROM proizvodi WHERE idProizvod = :id";
    $rez = $conn->prepare($upitPO);

    $rez->bindParam(":id", $id);

    $rez->execute();
    
 header("Location:admin.php");
 ?>