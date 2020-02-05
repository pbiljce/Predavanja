<?php
    //$name = "firstname";
    //$value = "John";
    //setcookie($name,$value,time() + (60*60*24*366));
    
    #Brisanje cookie-ja
    //setcookie($name,$value,time()-300);

    #Editovanje cookie-ja
    //setcookie($name,"Jane",time() + (60*60*24*366));

    #Ispis cookie-ja
    #var_dump($_COOKIE);
    echo $_COOKIE["firstname"];

    if(isset($_COOKIE["firstname"]) && !empty($_COOKIE["firstname"])){
        echo $_COOKIE["firstname"];
    }

    #Error supressor operator (@)
    #@$ime = $_COOKIE["ime"];//Kada se stavi @ uklanja se greška iz prikaza iako ta greška i dalje postoji
?>