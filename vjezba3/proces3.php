<?php
    //Za više fajlova napraviti petlju

    #var_dump($_FILES);
    #$_FILES["file"]["name"][0]
    #$_FILES["file"]["type"][0]
    #Broj fajlova: count($_FILES["file"]["type"])

    if ($_FILES["file"]["size"]<=0) {
        echo "<p style='color:red';>Pogrešna veličina fajla</p>";
    }elseif ($_FILES["file"]["type"]!=="image/jpeg" && $_FILES["file"]["type"]!=="image/png") {
        echo "<p style='color:red';>Pogrešan tip fajla</p>";
    }elseif ($_FILES["file"]["size"]>1000000) {
        echo "<p style='color:red';>Fajl prevelik za upload</p>";
    }elseif (file_exists($_FILES["file"]["name"])) {
        echo "<p style='color:red';>Fajl već postoji</p>";
    }
    else{
        move_uploaded_file($_FILES["file"]["tmp_name"],$_FILES["file"]["name"]);
    }
?>