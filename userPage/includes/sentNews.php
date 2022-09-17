<?php 

require 'data_users.php';

if(isset($_POST['getNews-submit'])){
    $sql = "UPDATE users SET askForNews=1 WHERE users.idUsers='". $_SESSION['userID'] ."'";

    $to = "SELECT emailUsers FROM users WHERE usersName='". $_SESSION['userName'] ."'";//email of the user
    $subject = "You're new register for our newsletter";
    $text = "Thank you for your register to our newsletter. In the future we will send newsletter for you. Enjoy!!";
    
    mail($to, $subject, $text);
    
    mysqli_query($conn, $sql);
    header("Location: ../USER_Page.php?requset=success");
}

elseif(isset($_POST['NonGetNews-submit'])){
    $sql = "UPDATE users SET askForNews='0' WHERE users.idUsers='".$_SESSION['userID']."'";

    mysqli_query($conn, $sql);
    header("Location: ../USER_Page.php?requset=success");
}