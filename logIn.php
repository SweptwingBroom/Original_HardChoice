<?php
if(isset($_POST['login-submit'])){
    
    require 'data_users.php';

    $mailuid = $_POST['mailuid'];
    $password = $_POST['pwd'];

    if(empty($mailuid) || empty($password)){
        echo '<p class="message">You have empty fields!</p>';
        header("Location: ../Signin.php?error=emptyfields");
        exit();
    }

    else{
        $sql = "SELECT * FROM users WHERE usersName=? OR emailUsers=?;";
        $stmt = mysqli_stmt_init($conn);
        
        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("Location: ../Signin.php?error=sqlerror");
            exit();
        }
        
        else{
            mysqli_stmt_bind_param($stmt, "ss", $mailuid, $mailuid);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);

            if($row = mysqli_fetch_assoc($result)){
                $pwdCheck = password_verify($password, $row['pwdUsers']);

                if($pwdCheck == false){
                    header("Location: ../Signin.php?error=wrongpassword");
                    exit();
                }

                elseif($pwdCheck == true){
                    session_start();
                    $_SESSION['userID'] = $row['idUsers'];
                    $_SESSION['userName'] = $row['usersName'];
                    
                    $dateUser = date("Y-m-d H:i:s", STRTOTIME(date('h:i:sa')));
                    $liveUser = "INSERT INTO login_time (idUsers, lastActivity) VALUES (" .$_SESSION['userID']. ", $dateUser)";
                    
                    mysqli_query($conn, $liveUser);

                    header("Location: ../../HardChoice.php?login=success");
                    exit();
                }

                else{
                    header("Location: ../Signin.php?error=wrongpassword");
                    exit();
                }
            }
        }

        $sql = "SELECT * FROM manager WHERE mName=? OR managerEmail=?;";
        $stmt = mysqli_stmt_init($conn);
        
        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("Location: ../Signin.php?error=sqlerror");
            exit();
        }
        
        else{
            mysqli_stmt_bind_param($stmt, "ss", $mailuid, $mailuid);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);

            if($row = mysqli_fetch_assoc($result)){
                $pwdCheck = password_verify($password, $row['managerPwd']);

                if($pwdCheck == false){
                    header("Location: ../Signin.php?error=wrongpassword");
                    exit();
                }

                elseif($pwdCheck == true){
                    session_start();
                    $_SESSION['userID'] = $row['mId'];
                    $_SESSION['userName'] = $row['mName'];

                    header("Location: ../../HardChoice.php?loginmng=success");
                    exit();
                }

                else{
                    header("Location: ../Signin.php?error=wrongpasswordmng");
                    exit();
                }
            }

            else{
                header("Location: ../Signin.php?error=nouser");
                exit();
            }
        }
    }
}