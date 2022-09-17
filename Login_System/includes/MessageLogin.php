<?php

require 'data_users.php';
require 'logIn.php';

if(isset($_SESSION['mName']) && $_SESSION['mName'] == 'ShimonKnijnik'){
    echo "<button type=\"submit\" class=\"btn btn-black\" name=\"login-submit\" onclick=\"alert('Administor\nWelcome Back!')\">Login</button>";
}

else{
}

//*************************************************************************************************** */

if(isset($_POST['login-submit'])){
    
    require 'data_users.php';

    $mailuid = $_POST['mailuid'];
    $password = $_POST['pwd'];

    if(empty($mailuid) || empty($password)){
        echo "<button type=\"submit\" class=\"btn btn-black\" name=\"login-submit\" onclick=\"alert('Empty fields.\n Try again!')\">Login</button>";
        exit();
    }

    else{
        $sql = "SELECT * FROM users WHERE usersName=? OR emailUsers=?;";
        $stmt = mysqli_stmt_init($conn);
        
        if(!mysqli_stmt_prepare($stmt, $sql)){
            echo "<button type=\"submit\" class=\"btn btn-black\" name=\"login-submit\" onclick=\"alert('Sql problems!\ Please try again later.')\">Login</button>";
            exit();
        }
        
        else{
            mysqli_stmt_bind_param($stmt, "ss", $mailuid, $mailuid);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);

            if($row = mysqli_fetch_assoc($result)){
                $pwdCheck = password_verify($password, $row['pwdUsers']);

                if($pwdCheck == false) {
                    echo "<button type=\"submit\" class=\"btn btn-black\" name=\"login-submit\" onclick=\"alert('Wrong password.\n Try again!')\">Login</button>";
                    exit();
                }

                elseif($pwdCheck == true){
                    echo "<button type=\"submit\" class=\"btn btn-black\" name=\"login-submit\" onclick=\"alert('Your logged in!')\">Login</button>";
                    exit();
                }

                else{
                    echo "<button type=\"submit\" class=\"btn btn-black\" name=\"login-submit\" onclick=\"alert('Wrong password.\n Try again!')\">Login</button>";
                    exit();
                }
            }

            else{
                echo "<button type=\"submit\" class=\"btn btn-black\" name=\"login-submit\" onclick=\"alert('There is no your user.\n Please sign up!')\">Login</button>";
                exit();
            }
        }
    }
}