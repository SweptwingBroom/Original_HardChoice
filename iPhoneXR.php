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
                            <li class="nav-item" role="presentation"><a class="nav-link active" href="../../Phone.html">Phone</a></li>
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
                        <a class="navbar-brand"><i class="fab fa-apple"></i> iPhone XR </a>
                        <div class="justify-content-end">
                            <ul class="navbar-nav">
                                <li class="nav-item" role="presentation"><a class="nav-link disabled">Overview</a></li>
                                <li class="nav-item" role="presentation"><a class="nav-link" href="iPhoneXR/TechSpecs.php" style="width: 105px;">Tech Specs</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </section>
            <section class="section-fluid">
                <div class="container-fluid">
                    <video autoplay muted playsinline style="width: 100%;">
                        <source src="../../Videos/iPhone XR/1.mp4" type="video/mp4">
                        <source src="../../Videos/iPhone XR/1.webm" type="video/webm">
                    </video>
                </div>
            </section>
            <section class="content">
                <div class="container-fluid">
                    <h2>A range of new finishes, <br> offering more choice to more people, <br> iPhone XR.</h2>
                    <video autoplay loop playsinline muted style="width: 80%;">
                        <source src="../../Videos/iPhone XR/2.mp4" type="video/mp4">
                        <source src="../../Videos/iPhone XR/2.webm" type="video/webm">
                    </video>
                </div>
            </section>
            <section class="content">
                <div class="container-fluid">
                    <h1> Most advanced display </h1>
                    <p> The all-screen Liquid Retina display is the most advanced LCD in a smartphone and the most color accurate in the industry. <br> A new backlight design allows the display to extend into the radiused corners, enabling a larger LCD than ever before.</p>
                </div>
                <div class="container-fluid">
                    <video autoplay playsinline muted style="width: 90%;">
                        <source src="../../Videos/iPhone XR/3.mp4" type="video/mp4">
                        <source src="../../Videos/iPhone XR/3.webm" type="video/webm">
                    </video>
                </div>
            </section>
            <section class="content" style="background-color: rgb(13, 13, 13);">
                <div class="section-content-text-1">
                    <h1>More advanced <br> One camera system.</h1>
                </div>
                <div class="product-first" style="text-align: end;">
                    <p>The advanced single-camera system combined with machine learning allows iPhone XR to recognize people, map subjects, and add depth.</p>
                    <video autoplay playsinline muted style="width: 60%;">
                        <source src="../../Videos/iPhone XR/4.mp4" type="video/mp4">
                        <source src="../../Videos/iPhone XR/4.webm" type="video/webm">
                    </video>
                </div>  
            </section>
            <section class="content" style="background-color: rgb(13, 13, 13);">
                <video autoplay loop playsinline muted style="width: 100%;">
                    <source src="../../Videos/iPhone XR/5.mp4" type="video/mp4">
                    <source src="../../Videos/iPhone XR/5.webm" type="video/webm">
                </video>
            </section>
            <section class="content" style="background-color: white; margin-bottom: 35vh;">
                <div class="section-content-text-1">
                    <h1 style="margin: 0 0 0 0; color: black;">Recognize the depth of picture</h1>
                    <p style="color: black;">The depth of field is adjustable so you can take more dramatic portraits.</p> 
                </div>
                <div class="container-fluid">
                    <video autoplay loop playsinline muted style="width: 75%;">
                        <source src="../../Videos/iPhone XR/6.mp4" type="video/mp4">
                        <source src="../../Videos/iPhone XR/6.webm" type="video/webm">
                    </video>
                </div>
            </section>
            <section class="content face" style="background-color: rgb(13, 13, 13);">
                <h1>Face ID</h1>
                <p>Like on iPhone XS, <br> The TrueDepth camera system, reinvents the way to securely unlock, log in, and avaliable pay with only a glance. <br> Now it's even faster.</p>
                <video autoplay playsinline muted style="width: 80%;">
                    <source src="../../Videos/iPhone XR/7.mp4" type="video/mp4">
                    <source src="../../Videos/iPhone XR/7.webm" type="video/webm">
                </video>
            </section>
            <section class="content" style="background-color: rgb(13, 13, 13);">
                <div class="section-content-text-1">
                    <h1><i class="fab fa-apple"></i> A12 Bionic chip</h1>
                </div>
                <div class="product-first" style="text-align: end;">
                    <video autoplay playsinline muted style="width: 60%;">
                        <source src="../../Videos/iPhone XR/8.mp4" type="video/mp4">
                        <source src="../../Videos/iPhone XR/8.webm" type="video/webm">
                    </video>
                    <div>
                        <p>It's the smartest and most powerful chip ever in a smartphone. It's next-generation neural engine dedicates machine learning to everything from augmented reality to photography.</p>
                        <ul class="detail-Chip">
                            <li>4-Core GPU (Up to 50% faster)</li>
                            <li>6-Core CPU</li>
                            <li>8-Core Neural Engine (5 trillion operations per second)</li>
                            <li>Advanced Performance Controller</li>
                            <li>Enhanced ISP</li>
                        </ul>
                    </div>
                </div>  
            </section>
<?php require '../../Footer.php'; ?>