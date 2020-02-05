<?php
    if(isset($_POST['firstname']) && isset($_POST['lastname'])){
        if(!empty($_POST['firstname']) && !empty($_POST['lastname'])){
            setcookie("firstname", $_POST['firstname'], time() + (60 * 60 * 24 * 366));
            setcookie("lastname", $_POST['lastname'], time() + (60 * 60 * 24 * 366));

            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
        }else{
            if(isset($_COOKIE['firstname']) && isset($_COOKIE['lastname'])){
                if(!empty($_COOKIE['firstname']) && !empty($_COOKIE['lastname'])){
                   $firstname = $_COOKIE['firstname'];
                   $lastname = $_COOKIE['lastname'];
                }
            }else{
                $firstname = " ";
                $lastname = " ";
            }
        }
    }else{
        if(isset($_COOKIE['firstname']) && isset($_COOKIE['lastname'])){
            if(!empty($_COOKIE['firstname']) && !empty($_COOKIE['lastname'])){
               $firstname = $_COOKIE['firstname'];
               $lastname = $_COOKIE['lastname'];
            }
        }else{
            $firstname = " ";
            $lastname = " ";
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vježba 70</title>
</head>
<body>
    <h1>
        <?php
           echo "Dobrodošli, " . $firstname . " " . $lastname;
        ?>
    </h1>

    <form action="#" method="POST">
        <input type="text" name="firstname">
        <input type="text" name="lastname">
        <input type="submit">
    </form>
</body>
</html>