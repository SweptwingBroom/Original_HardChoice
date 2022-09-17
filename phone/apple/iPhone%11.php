<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="../../CSS/General.css">
        <link rel="stylesheet" href="../../CSS/templateForEveryPhone.css">
        <link rel="stylesheet" href="../../bootstrap-4.4.1-dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="../../bootstrap-4.4.1/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="../../bootstrap-better-nav-master/dist/bootstrap-better-nav.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Sans+JP&display=swap">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="../../bootstrap-4.4.1-dist/js/bootstrap.min.js"></script>
        <script src="../../bootstrap-4.4.1/dist/js/bootstrap.min.js"></script>
        <script src="../../bootstrap-better-nav-master/dist/bootstrap-better-nav.min.js"></script>
        <script src="https://kit.fontawesome.com/4d09d666b7.js" crossorigin="anonymous"></script>
        <!--Fontawesome CDN-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        <title>HardChoice</title>
    </head>

    <body>
        <section>
            <nav class="navbar navbar-dark navbar-expand-md better-bootstrap-nav-left bg-dark">
                <div class="container-fluid">
                    <a class="navbar-brand" href="../../HardChoice.php"><i class="fab fa-gitlab" style="font-size: 4vh;"></i></a>
                    <button class="navbar-toggler" data-target=".navbar-collapse" data-toggle="collapse" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav mx-auto">
                            <li class="nav-item" role="presentation"><a class="nav-link active" href="../../Phone.php">Phone</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link disabled">Tablet</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link disabled">Computer</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link disabled">TV</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link disabled">Streamer</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link disabled">Music</a></li>
                        </ul>
                        <ul class="nav navbar-nav">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" href="../../search.php">Search</a>
                            </li>
                            <?php 
                                if(isset($_SESSION["userID"])){
                                    echo '<li class="nav-item" role="presentation"><a class="nav-link" href="../../UserPage/USER_Page.php">'.$_SESSION["userName"].'</a></li>';
                                    echo '<li class="nav-item" role="presentation"><a class="nav-link" href="../../Login_System/includes/logout.php">logout</a></li>';
                                }
                                else{
                                    echo '<li class="nav-item" role="presentation"><a class="nav-link" style="width: 110%;" href="../../Login_System/signin.php">Login In</a></li>';
                                }
                            ?>
                        </ul>
                    </div>
                </div>
            </nav>
        </section>
        <main id="main">
            <section>
                <nav class="navbar navbar-expand-lg navbar-light" style="font-size: 50%;">
                    <div class="container-fluid">
                        <a class="navbar-brand"><i class="fab fa-apple"></i> iPhone 11 </a>
                        <div class="justify-content-end">
                            <ul class="navbar-nav">
                                <li class="nav-item" role="presentation"><a class="nav-link disabled">Overview</a></li>
                                <li class="nav-item" role="presentation"><a class="nav-link" href="iPhone11/TechSpecs.php" style="width: 105px;">Tech Specs</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </section>
            <section class="section-fluid">
                <div class="container-fluid">
                    <video autoplay muted playsinline style="width: 100%;">
                        <source src="../../Videos/iPhone 11/1.mp4" type="video/mp4">
                        <source src="../../Videos/iPhone 11/1.webm" type="video/webm">
                    </video>
                </div>
            </section>
            <section class="content" style="background-color: rgb(255, 255, 255);">
                <h1 style="font-size: 6rem; font-weight: 900;">New dual cameras system</h1>
                <p style="font-size: 1.5rem; font-weight: 600;">Gives you a capture that's what happening outside the frame. <br> And Ultra wide camera gives you capture more detail photos</p>
                <video autoplay loop muted playsinline style="width: 100%;">
                    <source src="../../Videos/iPhone 11/2.mp4" type="video/mp4">
                    <source src="../../Videos/iPhone 11/2.webm" type="video/webm">
                </video>
            </section>
            <section class="content">
                <div class="container-fluid">
                    <h1 style="font-size: 6rem;">Highest-quality video</h1>
                    <p><strong>Shoot and edit.</strong> <br> With extended dynamic range now at 4K at 60 fps, you can record pro-quality video at twice as many frames per second.</p>
                </div>
                <div class="container-fluid">
                    <video autoplay loop playsinline muted style="width: 100%;">
                        <source src="../../Videos/iPhone 11/3.mp4" type="video/mp4">
                        <source src="../../Videos/iPhone 11/3.webm" type="video/webm">
                    </video>
                </div>
            </section>
            <section class="content" style="background-color: rgb(255, 255, 255);">
                <h1 style="font-size: 6rem; font-weight: 900;">Slo-mo selfies</h1>
                <p style="font-size: 1.5rem; font-weight: 600;"><strong>Slofies.</strong> <br> The new Ultra wide camera accese add more of everything to your selfies. <br> The camera automatically zooms out to fit more in.</p>
                <video autoplay loop playsinline muted style="width: 100%;">
                    <source src="../../Videos/iPhone 11/4.mp4" type="video/mp4">
                    <source src="../../Videos/iPhone 11/4.webm" type="video/webm">
                </video>
            </section>
            <section class="content" style="background-color: white;">
                <h1 style="font-size: 5rem; font-weight: 700;">All-new Night Mode</h1>
                <p style="font-size: 1.5rem; font-weight: 400;"><strong>Not enough light? No problem.</strong> <br> The new Night mode allows you shot pictures in the dark.</p>
                <video autoplay playsinline muted style="width: 100%;">
                    <source src="../../Videos/iPhone 11/5.mp4" type="video/mp4">
                    <source src="../../Videos/iPhone 11/5.webm" type="video/webm">
                </video>
            </section>
            <section class="content">
                <div class="container-fluid">
                    <h1 style="font-size: 6rem;">6.1" Liquid Retina display</h1>
                    <p>The true life all screen that design makes everything look amazing. <br> True Tone. Tap or raise to wake. Haptic Touch.</p>
                </div>
                <div class="container-fluid">
                    <video autoplay playsinline muted style="width: 100%;">
                        <source src="../../Videos/iPhone 11/6.mp4" type="video/mp4">
                        <source src="../../Videos/iPhone 11/6.webm" type="video/webm">
                    </video>
                </div>
            </section>
            <section class="content face" style="background-color: rgb(13, 13, 13);">
                <h1>Face ID</h1>
                <p>Unlock your iPhone with the new system of the Face ID on iPhone. <br> More secure than Touch ID.</p>
                <video autoplay playsinline muted style="width: 100%;">
                    <source src="../../Videos/iPhone 11/7.mp4" type="video/mp4">
                    <source src="../../Videos/iPhone 11/7.webm" type="video/webm">
                </video>
            </section>
            <section class="content" style="background-color: rgb(13, 13, 13);">
                <div class="section-content-text-1">
                    <h1><i class="fab fa-apple"></i> A13 Bionic chip</h1>
                </div>
                <div class="product-first" style="text-align: end;">
                    <video autoplay playsinline muted style="width: 60%;">
                        <source src="../../Videos/iPhone 11/8.mp4" type="video/mp4">
                        <source src="../../Videos/iPhone 11/8.webm" type="video/webm">
                    </video>
                    <div>
                        <p>The new chip is so powerful, that everything you do is fast and fluid in your iPhone.</p>
                        <ul class="detail-Chip">
                            <li>Fastest GPU</li>
                            <li>Fastest CPU</li>
                            <li>Faster Neural Engine</li>
                            <li>ML Controller</li>
                            <li>ML Accelerators</li>
                            <li>Core ML 3</li>
                            <li>8.5 Billion Transistors</li>
                        </ul>
                    </div>
                </div>  
            </section>
            <section class="content" style="background-color: white;">
                <h1 style="font-size: 5rem; font-weight: 700;">All-day battery life</h1>
                <p style="font-size: 1.5rem; font-weight: 600;">Hardware and software of battery has power work all day long.</p>
                <img src="">
            </section>
<?php require '../../Footer.php'; ?>