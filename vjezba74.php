<?php
    echo $_SERVER['DOCUMENT_ROOT'];

    #Dobavljanje sadržaja
    //var_dump(file_get_contents('vjezba70.php'));
    //echo file_get_contents('vjezba70.php');

    #Upis sadržaja
    //file_put_contents('vjezba70.php', "Ovo stvarno radi");

    #Čitanje po redovima
    $red = fopen('vjezba71.php','r');
    while(!feof($red)){
        echo fgets($red);
    }

    #Dodavanje sadržaja
    $fajl = fopen('vjezba73.txt','a');
    fwrite($fajl,'Dodatak trenutnom sadržaju');
    fclose($fajl);

    #Brisanje 
    //unlink('vjezba73.txt');

?>