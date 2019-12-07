<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Učitavanje stranice</title>
    <style>
        body{
            margin:0;
        }
        .header{
            width:100%;
        }
        ul{
            background:#b93030;
            margin:0;
            padding:20px;
            text-align:center;
        }
        li{
            display:inline;
        }
        a{
            text-decoration:none;
            color: #bc3434; 
            background:#eee;
            padding:10px;
        }
    </style>
</head>
<body>
    <?php require 'header.php'; ?>

    <?php
        if(isset($_GET['page']) && !empty($_GET['page'])){
            $page = $_GET['page'];
            switch($page){
                case 1:
                    require 'stranica/1.html';
                    break;
                case 2:
                    require 'stranica/2.html';
                    break;
                case 3:
                    require 'stranica/3.html';
                    break;
                default:
                    require 'stranica/1.html';
                    break;
            }
        }
        else{
            require 'stranica/1.html';
        }
    ?>
</body>
</html>