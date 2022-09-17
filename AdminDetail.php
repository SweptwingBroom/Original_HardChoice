<?php 

require '../Server/data.php'; //change later the path

$sql = "SELECT * FROM manager WHERE mName='".$_SESSION['userName']."'";

$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if($resultCheck > 0){
    while($row = mysqli_fetch_assoc($result)){
        echo "This your real home page, Admin."."<br>"." Here, you can change your username with pwd, email like all the users.<br>"."In addition, you have a option to delete users or change their details, on the UserEdit. <br>"."Have a good day sir!";
        echo "<br><span>E-mail: </span>" . $row['managerEmail'] . "<br>";
    }
}

