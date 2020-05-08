<?php
require_once 'connection2.php';
    $userID = $_REQUEST['name'];

    if($userID == 0){
        $sql = "SELECT * FROM users";
    }else{
        $sql = "SELECT * FROM users  WHERE id = '{$userID}'";
    }

$result = mysqli_query($connection,$sql);

?>
<table>

<tr>
    <th>Id</th>
    <th>Firstname</th>
    <th>Lastname</th>
    <th>Age</th>
    <th>Hometown</th>
    <th>Job</th>
</tr>
<?php
    while($row = mysqli_fetch_assoc($result)){
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['firstname'] . "</td>";
        echo "<td>" . $row['lastname'] . "</td>";
        echo "<td>" . $row['age'] . "</td>";
        echo "<td>" . $row['hometown'] . "</td>";
        echo "<td>" . $row['job'] . "</td>";
        echo "</tr>";
    }
    mysqli_close($connection);
?>
</table>