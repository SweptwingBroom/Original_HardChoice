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
                        <a class="navbar-brand"><i class="fab fa-apple"></i> iPhone XS </a>
                        <div class="justify-content-end">
                            <ul class="navbar-nav">
                                <li class="nav-item" role="presentation"><a class="nav-link disabled">Overview</a></li>
                                <li class="nav-item" role="presentation"><a class="nav-link" href="iPhoneXS/TechSpecs.php" style="width: 105px;">Tech Specs</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </section>
            <section class="section-fluid">
                <div class="container-fluid">
                    <video autoplay muted playsinline style="width: 100%;">
                        <source src="../../Videos/iPhone XS/1.mp4" type="video/mp4">
                        <source src="../../Videos/iPhone XS/1.webm" type="video/webm">
                    </video>
                </div>
            </section>
            <section class="content">
                <div class="container-fluid">
                    <h1> It's completely uncompromising. </h1>
                    <p> The expansive, Super Retina display with OLED, delivers vivid brightness, true blacks, and high-dynamic range content. </p>
                </div>
                <div class="container-fluid">
                    <video autoplay loop muted playsinline style="width: 100%;">
                        <source src="../../Videos/iPhone XS/2.mp4" type="video/mp4">
                        <source src="../../Videos/iPhone XS/2.webm" type="video/webm">
                    </video>
                </div>
            </section>
            <section class="content" style="background-color: rgb(13, 13, 13);">
                <div class="section-content-text-1">
                    <h1>More advanced <br> dual camera system.</h1>
                </div>
                <div class="product-first" style="text-align: end;">
                    <p>With more capable sensors are combined with lenses, chips, and advanced software, delivering smart HDR across your photos, creating images like never before.</p>
                    <video autoplay muted playsinline style="width: 60%;">
                        <source src="../../Videos/iPhone XS/3.mp4" type="video/mp4">
                        <source src="../../Videos/iPhone XS/3.webm" type="video/webm">
                    </video>
                </div>  
            </section>
            <section class="content" style="background-color: rgb(13, 13, 13);">
                <video autoplay muted playsinline style="width: 100%;">
                    <source src="../../Videos/iPhone XS/4.mp4" type="video/mp4">
                    <source src="../../Videos/iPhone XS/4.webm" type="video/webm">
                </video>
            </section>
            <section class="content" style="background-color: white;">
                <h1 style="font-size: 5rem; font-weight: 700;">Portrait mode</h1>
                <p style="font-size: 1.5rem; font-weight: 600;">Gives for you more nuanced, software-enhanced, adjustable depth of field to your photo. <br> Avaliable in front and rear cameras.</p>
                <video autoplay muted playsinline style="width: 80%;">
                    <source src="../../Videos/iPhone XS/5.mp4" type="video/mp4">
                    <source src="../../Videos/iPhone XS/5.webm" type="video/webm">
                </video>
            </section>
            <section class="content">
                <div class="container-fluid">
                    <h1> Unbreakable <br> High-quality Video </h1>
                    <p> 4K video, with better low-light performance, and extended dynamic range, now records in stereo. <br> And your content plays back in widened stereo sound. </p>
                </div>
                <div class="container-fluid">
                    <video autoplay muted playsinline style="width: 100%;">
                        <source src="../../Videos/iPhone XS/6.mp4" type="video/mp4">
                        <source src="../../Videos/iPhone XS/6.webm" type="video/webm">
                    </video>
                </div>
            </section>
            <section class="content face" style="background-color: rgb(13, 13, 13);">
                <h1>Face ID</h1>
                <p>The TrueDepth camera system, reinvents the way to securely unlock, log in, and avaliable pay with only a glance. <br> Now it's even faster.</p>
                <video autoplay muted playsinline style="width: 80%;">
                    <source src="../../Videos/iPhone XS/7.mp4" type="video/mp4">
                    <source src="../../Videos/iPhone XS/7.webm" type="video/webm">
                </video>
            </section>
            <section class="content" style="background-color: rgb(13, 13, 13);">
                <div class="section-content-text-1">
                    <h1><i class="fab fa-apple"></i> A12 Bionic chip</h1>
                </div>
                <div class="product-first" style="text-align: end;">
                    <video autoplay muted playsinline style="width: 60%;">
                        <source src="../../Videos/iPhone XS/8.mp4" type="video/mp4">
                        <source src="../../Videos/iPhone XS/8.webm" type="video/webm">
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