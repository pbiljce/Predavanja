<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    try{
        $connection = new PDO("mysql:host=$servername;dbname=users;port=3307",$username,$password);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);    

        /* SELECT DATA 1
        $sql = $connection->query("SELECT * FROM users");
        while($row=$sql->fetch(PDO::FETCH_ASSOC)){
            echo "<p>" . $row['name'] . " " . $row['lastname'] . " " . $row['nickname'] . "</p>";
        }
        */

        /* SELECT DATA 2
        $sql = $connection->query("SELECT * FROM users")->fetchAll();
        foreach($sql as $row){
            echo "<p>" . $row['name'] . " " . $row['lastname'] . " " . $row['nickname'] . "</p>";
        }*/
        
        /*DELETE
        $sql = "DELETE FROM users WHERE users.id = '3'";
        $connection->exec($sql);
        */

        $sql = "UPDATE users SET nickname = 'Biljče' WHERE users.id = '6'";
        $connection->exec($sql);
    }
    catch(PDOException $e){
        echo $e->getMessage();
    }
?>