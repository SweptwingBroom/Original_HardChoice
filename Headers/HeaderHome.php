<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="CSS/General.css">
        <link rel="stylesheet" href="CSS/HomePage.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="bootstrap-4.4.1-dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="bootstrap-4.4.1/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="bootstrap-better-nav-master/dist/bootstrap-better-nav.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Sans+JP&display=swap">
        <!--Fontawesome CDN-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        <title>HardChoice</title>
    </head>
    <body>
        <section>
            <nav class="navbar navbar-dark navbar-expand-md better-bootstrap-nav-left bg-dark">
                <div class="container-fluid">
                    <a class="navbar-brand" href="HardChoice.php"><i class="fab fa-gitlab" style="font-size: 4vh;"></i></a>
                    <button class="navbar-toggler" data-target=".navbar-collapse" data-toggle="collapse" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav mx-auto">
                            <?php 
                                if(isset($_SESSION["userID"])){
                                    echo '<li class="nav-item" role="presentation"><a class="nav-link" href="Phone.php">Phone</a></li>';
                                }
                                else{
                                    echo '<li class="nav-item" role="presentation"><a class="nav-link" href="" onClick="messageforguest()">Phone</a></li>';
                                }
                            ?>
                            <li class="nav-item" role="presentation"><a class="nav-link disabled">Tablet</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link disabled">Computer</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link disabled">TV</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link disabled">Streamer</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link disabled">Music</a></li>
                        </ul>
                        <ul class="nav navbar-nav">
                            <?php 
                                if(isset($_SESSION["userID"])){
                                    echo '<li class="nav-item" role="presentation"><a class="nav-link" href="Search_System/Search.php">Search</a></li>';
                                }
                                else{
                                    echo '<li class="nav-item" role="presentation"><a class="nav-link" href="" onClick="messageforguest()">Search</a></li>';
                                }
                            ?>                
                            <?php 
                                if(isset($_SESSION["userID"])){
                                    if($_SESSION["userName"] == "ShimonKnijnik"){
                                        echo '<li class="nav-item" role="presentation"><a class="nav-link" href="Admin_Page/admin_page.php">'.$_SESSION["userName"].'</a></li>';
                                        echo '<li class="nav-item" role="presentation"><a class="nav-link" href="Login_System/includes/logout.php">logout</a></li>';
                                    }
                                    else{
                                        echo '<li class="nav-item" role="presentation"><a class="nav-link" href="UserPage/USER_Page.php">'.$_SESSION["userName"].'</a></li>';
                                        echo '<li class="nav-item" role="presentation"><a class="nav-link" href="Login_System/includes/logout.php">logout</a></li>';
                                    }
                                }
                                else{
                                    echo '<li class="nav-item" role="presentation"><a class="nav-link" style="width: 110%;" href="Login_System/signin.php">Login In</a></li>';
                                }
                            ?>
                        </ul>
                    </div>
                </div>
            </nav>
        </section>