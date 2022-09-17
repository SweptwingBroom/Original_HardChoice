<?php 

require 'data_users.php';

$sql = "SELECT * FROM users WHERE usersName='".$_SESSION['userName']."'";

$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if($resultCheck > 0){
    while($row = mysqli_fetch_assoc($result)){
        echo "This home page of your user."."<br>"." Here, you can change the useful that you want enter to website in the 'Edit'."."<br>". "In addition, you can download all compares that you save from yours compares between the products in the 'Compare Download'."."<br>";
        echo "<br><span>E-mail: </span>" . $row['emailUsers'] . "<br>";
    }
}

