$(document).ready(function(){
    $('#posalji').click(function(){
            var errors = []; 
   $ime=$('#first').val();
   $reIme=/^[A-Z]{1}[a-z]{2,13}$/;
   if($ime.match($reIme)){
        document.querySelector("#firstG").innerHTML="";
    }
    else if($ime==""){
        document.querySelector("#firstG").innerHTML="Your must enter your firstname";
        errors.push('gr'); 
        
    }
    else{
        document.querySelector("#firstG").innerHTML="Your firstname isn't in right form";
        errors.push('gr'); 
    }
    $prezime=$('#last').val();
    $rePrezime=/^[A-Z]{1}[a-z]{2,13}$/;
    if($prezime.match($rePrezime)){
        document.querySelector("#lastG").innerHTML="";
    }
    else if($prezime==""){
        document.querySelector("#lastG").innerHTML="Your must enter your lastname";
        errors.push('gr'); 
    }
    else{
        document.querySelector("#lastG").innerHTML="Your lastname isn't in right form";
        errors.push('gr'); 
    }
    $korisnicko=$('#user').val();
    $reKorisnicko=/^[a-zA-z0-9]{7,17}$/;
    if($korisnicko.match($reKorisnicko)){
        document.querySelector("#userG").innerHTML="";
    }
    else if($korisnicko==""){
        document.querySelector("#userG").innerHTML="Your must enter your username";
        errors.push('gr'); 
    }
    else{
        document.querySelector("#userG").innerHTML="Your username isn't in right form";
        errors.push('gr'); 
    }
    $sifra=$('#pass').val();
    $reSifra= /^(?=.*\d).{6,}$/;
    if($sifra.match($reSifra)){
        document.querySelector("#passG").innerHTML="";
    }
    else if($sifra==""){
        document.querySelector("#passG").innerHTML="Your must enter your password";
        errors.push('gr'); 
    }
    else{
        document.querySelector("#passG").innerHTML="Your password isn't in right form";
        errors.push('gr'); 
    }
    $reSifra1=$('#rePass').val();
    if($reSifra==""){
        document.querySelector("#rePG").innerHTML="This is required field";
        errors.push('gr'); 
    }
    else if($reSifra1!=$sifra){
        document.querySelector("#rePG").innerHTML="Passwords do not match";
        errors.push('gr'); 
    }
    $mejl=$('#mail').val();
    $reMejl=/^(?:(?:[\w`~!#$%^&*\-=+;:{}'|,?\/]+(?:(?:\.(?:"(?:\\?[\w`~!#$%^&*\-=+;:{}'|,?\/\.()<>\[\] @]|\\"|\\\\)*"|[\w`~!#$%^&*\-=+;:{}'|,?\/]+))*\.[\w`~!#$%^&*\-=+;:{}'|,?\/]+)?)|(?:"(?:\\?[\w`~!#$%^&*\-=+;:{}'|,?\/\.()<>\[\] @]|\\"|\\\\)+"))@(?:[a-zA-Z\d\-]+(?:\.[a-zA-Z\d\-]+)*|\[\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}\])$/
    if($mejl.match($reMejl)){
        document.querySelector("#emailG").innerHTML="";
    }
    else if($sifra==""){
        document.querySelector("#emailG").innerHTML="Your must enter your email";
        errors.push('gr'); 
    }
    else{
        document.querySelector("#emailG").innerHTML="Your email isn't in right form";
        errors.push('gr'); 
    }
    console.log(errors);
    function dohvati(){
        var obj={
            firstname:$("#first").val(),
            lastname:$("#last").val(),
            username:$("#user").val(),
            password:$("#pass").val(),
            rePassword:$("#rePass").val(),
            email:$("#mail").val(),
            send:true

        };
     return obj;
    }
    function pozoviAjax(obj){
        $.ajax({
            url:"proveraReg.php",
            type:"post",
            data:obj,
            success:function(data,xhr){
                $("#feed").html("<h1>Success registration.</h1>");
            },
            error:function(xhr,status,error){
                var poruka="Doslo je do greske!";
                switch(xhr.status){
                    case 404:
                        poruka="Page not found";
                        break;
                    case 409:
                        poruka="Username or email already exists";
                        break;
                    case 422:
                        poruka="Data not valid";
                        console.log(xhr.responseText);
                        break;
                    case 500:
                        poruka="Error";
                        break;
                }
                $("#feed").html(poruka);

            }
        });
}
    var formData=dohvati();
    pozoviAjax(formData);


    });
});
