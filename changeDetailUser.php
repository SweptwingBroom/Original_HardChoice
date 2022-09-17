<?php 
if(isset($_POST['changedetail-submit'])){
    session_start();
    
    require '../../Server/data.php';

    $username = $_POST['nuid'];
    $email = $_POST['nmail'];
    $password = $_POST['npwd'];
    $passwordRepeat = $_POST['npwd-repeat'];

    if(empty($username) || empty($email) || empty($password) || empty($passwordRepeat)){
        header("Location: ../UserEdit.php?error=emptyChangesfields&uid=".$username."&mail=".$email);
        exit();
    }

    elseif(!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)){
        header("Location: ../UserEdit.php?error=invalidmailuid");
        exit();
    }
    
    elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        header("Location: ../UserEdit.php?error=invalidmail&uid=".$username);
        exit();
    }

    elseif(!preg_match("/^[a-zA-Z0-9]*$/", $username)){
        header("Location: ../UserEdit.php?error=invaliduid&mail=".$email);
        exit();
    }

    elseif($password !== $passwordRepeat){
        header("Location: ../UserEdit.php?error=passwordcheck&uid=".$username."&mail=".$email);
        exit();
    }

    else{
        $sql = "SELECT usersName FROM users WHERE usersName=?";
        $stmt = mysqli_stmt_init($conn);

        if(!mysqli_stmt_prepare($stmt, $sql)){
            header("Location: ../UserEdit.php?error=sqlerror");
        exit();
        }

        else{
            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultCheck =  mysqli_stmt_num_rows($stmt);

            if($resultCheck > 0){
                header("Location: ../UserEdit.php?error=usertaken&mail".$email);
                exit();
            }

            else{
                $sql = "UPDATE users SET usersName=?, emailUsers=?, pwdUsers=? WHERE idUsers=".$_SESSION["userID"]."";
                $stmt = mysqli_stmt_init($conn);

                if(!mysqli_stmt_prepare($stmt, $sql)){
                    header("Location: ../UserEdit.php?error=sqlerror");
                    exit();
                }
                
                else{
                    $hashedPwd = password_hash($password, PASSWORD_DEFAULT); 
                
                    mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashedPwd);
                    mysqli_stmt_execute($stmt);

                    $_SESSION['userName'] = $username;

                    header("Location: ../UserEdit.php?requset=success");
                    exit();
                }
            }
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}

else{
    header("Location: ../UserEdit.php");
    exit();
}