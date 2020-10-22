window.onload=function(){
    document.getElementById("submit").addEventListener("click",provera);
    function provera(){
        let ime=document.getElementById("name").value;
        let mejl=document.getElementById("email").value;
        let reImeNaslov=/^[A-Z]{1}[a-z]{2,11}$/;
        let remejl= /^[a-z]+\.[a-z]+\.([1-9][0-9]{0,3})\.(1[0-8])\@ict\.edu\.rs$/;
        let poruka=document.getElementById("message").value;
        let rePoruka=/^[A-Za-z\s]{10,20}$/;
    
        if(ime.match(reImeNaslov)){
                document.querySelector("#nameggreske").innerHTML="";
    
        } 
        else if(ime==""){
            document.querySelector("#nameggreske").innerHTML="You must enter your name";
        }
        else{
                document.querySelector("#nameggreske").innerHTML="Your name isn't in right form";
        }
        if(mejl.match(remejl)){
            document.querySelector("#emailgreske").innerHTML="";
    
        } 
        else if(mejl==""){
            document.querySelector("#emailgreske").innerHTML="You must enter your email";
        }
        else{
                document.querySelector("#emailgreske").innerHTML="Wrong email";
        }
       
    if(poruka.match(rePoruka)){
        document.querySelector("#porukaGreske").innerHTML=""
    }
    else if(poruka=""){
        document.querySelector("#porukaGreske").innerHTML="You must enter message";
    }
    else{
        document.querySelector("#porukaGreske").innerHTML="Message isn't in right form";
    }
    }
    
        
        
    
    
}