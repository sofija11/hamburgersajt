<?php

 session_start();
 include  "config/konekcija.php";
 
            $status = 404;
            if(isset($_POST['btnSlika'])){
            $ime = $_POST['naziv'];
            $cena = $_POST['cena'];
            $opis = $_POST['opis'];
            $slika = $_FILES['slika'];
            $ime_fajla = $slika['name'];
            $tip_fajla = $slika['type'];
            $velicina_fajla = $slika['size'];
            $tmp_putanja = $slika['tmp_name'];
            $errors = [];
            $dozvoljeni_formati = array("image/jpg", "image/jpeg",
            "image/png");
                if(!in_array($tip_fajla, $dozvoljeni_formati)){
                        $errors[] = "Type is not good!";
                        }
                        if($velicina_fajla > 3000000){
                        $errors[] = "File must be less than 3MB";
                        }
                        if(empty($ime)){
                        $errors[] = "Name is required field.";
                        }
                        if(empty($cena)){
                        $errors[] = "Price is required field.";
                        }
                        if(empty($opis)){
                        $errors[] = "Description  is required field.";
                        }
                        if(count($errors)>0){
                        $status = 422; 
                    
                        }
                        else{
                        $naziv_fajla = time().$ime_fajla;
                        $nova_putanja = "assets/img/".$naziv_fajla;
                        if(move_uploaded_file($tmp_putanja, $nova_putanja)){
                        $upitReg = "INSERT INTO proizvodi(idProizvod, proizvodNaziv,cena,src,opis) values (NULL, :naziv,
                        :cena, :putanja,:opis)";
                        $rez_Reg = $conn->prepare($upitReg);
                        $rez_Reg->bindParam(":putanja", $nova_putanja);
                        $rez_Reg->bindParam(":naziv", $ime);
                        $rez_Reg->bindParam(":cena", $cena);
                        $rez_Reg->bindParam(":opis", $opis);
                        try{
                        $izvesen_Reg = $rez_Reg->execute();
                        if($izvesen_Reg){
                            header("Location:admin.php");
                        }else{
                      echo 'greska';
                        }
                        }
                        catch(PDOException $ex){
                        
                        }
                        }
                        }
                        };
                        
                        ?>