<?php
    $username = "admin";
    $password = md5("admin");

    if(isset($_POST["username"]) && isset($_POST["password"])){
        if(!empty($_POST["username"] && !empty($_POST["password"]))){
            if ($username===$_POST["username"] && $password===md5($_POST["password"])) {
                echo "<p style='color:green;'>Korisnik je logovan</p>";
                echo "<p>" . $password . "</p>";
            }else{
                echo "<p style='color:red;'>Username ili password nisu tačni</p>";
            }
        }else{
            echo "<p style='color:red;'>Poslani prazni parametri</p>";
        }

    }else{
        echo "<p style='color:red;'>Nisu poslani parametri</p>";
    }
?>