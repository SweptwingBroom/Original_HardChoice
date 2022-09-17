<?php 

require '../../Server/data.php';

$sql = "SELECT * FROM users;";

$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if($resultCheck > 0){
    while($row = mysqli_fetch_assoc($result)){
        echo "<span>E-mail: </span>" . $row['emailUsers'] . "<br>";
        echo "<span>First Name: </span>" . $row['fNameUsers'] . "<br>";
        echo "<span>Last Name: </span>" . $row['lNameUsers'] ."<br>";
    }
}

