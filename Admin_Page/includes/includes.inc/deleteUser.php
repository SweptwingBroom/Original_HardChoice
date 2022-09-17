<?php
    require '../../../Server/data.php'; //change later the path

    $user_id = $_GET['idUsers'];

    $sql = "DELETE FROM users WHERE idUsers={$user_id}";

    if(mysqli_query($conn, $sql)){
        echo "<p>Record deleted successfully!</p>";
    }

    header("Location: ../../EditUsers.php?=success.php");
