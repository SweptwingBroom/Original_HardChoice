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
                        <a class="navbar-brand"><i class="fab fa-apple"></i> iPhone 11 Pro</a>
                        <div class="justify-content-end">
                            <ul class="navbar-nav">
                                <li class="nav-item" role="presentation"><a class="nav-link disabled">Overview</a></li>
                                <li class="nav-item" role="presentation"><a class="nav-link" href="iPhone11pro/TechSpecs.php" style="width: 105px;">Tech Specs</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </section>
            <section class="section-fluid">
                <div class="container-fluid">
                    <video autoplay muted playsinline style="width: 100%;">
                        <source src="../../Videos/iPhone 11 Pro/1.mp4" type="video/mp4">
                        <source src="../../Videos/iPhone 11 Pro/1.webm" type="video/webm">
                    </video>
                </div>
            </section>
            <section class="content">
                <div class="container-fluid">
                    <h2>This new line of iPhone has been pushed to extremes <br> like never before, <br> ensuring that each part is worthy of the name.</h2>
                    <video autoplay playsinline muted style="width: 80%;">
                        <source src="../../Videos/iPhone 11 Pro/2.mp4" type="video/mp4">
                        <source src="../../Videos/iPhone 11 Pro/2.webm" type="video/webm">
                    </video>
                </div>
            </section>
            <section class="content">
                <div class="container-fluid">
                    <h1>The triple-camera system.</h1>
                    <p>It's combines cutting-edge technology with extraordinary ease of iPhone.</p>
                </div>
                <div class="container-fluid">
                    <video autoplay playsinline muted style="width: 100%;">
                        <source src="../../Videos/iPhone 11 Pro/3.mp4" type="video/mp4">
                        <source src="../../Videos/iPhone 11 Pro/3.webm" type="video/webm">
                    </video>
                </div>
            </section>
            <section class="content" style="background-color: rgb(13, 13, 13);">
                <div class="section-content-text-1">
                    <h1 style="margin: 0 0 0 0;">The triple-camera system</h1>
                    <p>The redesigned camera interface complements the new hardware with a more immersive and intuitive experience. </p> 
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-4">
                            <h2>Telephoto</h2>
                            <video autoplay loop playsinline muted style="width: 105%;">
                                <source src="../../Videos/iPhone 11 Pro/4.mp4" type="video/mp4">
                                <source src="../../Videos/iPhone 11 Pro/4.webm" type="video/webm">
                            </video>
                        </div>
                        <div class="col-4">
                            <h2>Wide</h2>
                            <video autoplay loop playsinline muted style="width: 105%;">
                                <source src="../../Videos/iPhone 11 Pro/5.mp4" type="video/mp4">
                                <source src="../../Videos/iPhone 11 Pro/5.webm" type="video/webm">
                            </video>
                        </div>
                        <div class="col-4">
                            <h2>Ultra wide</h2>
                            <video autoplay loop playsinline muted style="width: 105%;">
                                <source src="../../Videos/iPhone 11 Pro/6.mp4" type="video/mp4">
                                <source src="../../Videos/iPhone 11 Pro/6.webm" type="video/webm">
                            </video>
                        </div>
                    </div>
                </div>
            </section>
            <section class="content" style="background-color: rgb(13, 13, 13);">
                <video autoplay loop playsinline muted style="width: 100%;">
                    <source src="../../Videos/iPhone 11 Pro/7.mp4" type="video/mp4">
                    <source src="../../Videos/iPhone 11 Pro/7.webm" type="video/webm">
                </video>
            </section>
            <section class="content" style="background-color: white;">
                <h1 style="font-size: 5rem; font-weight: 700;">All-new Night Mode</h1>
                <p style="font-size: 1.5rem; font-weight: 600;">Allows you to capture images never before possible on an iPhone in drastically lower light.</p>
                <img src="">
            </section>
            <section class="content">
                <div class="container-fluid">
                    <h1 style="font-size: 6rem;">Highest-quality Video <br> is now even better.</h1>
                    <p>With extended dynamic range now at 4K at 60 fps, you can record pro-quality video at twice as many frames per second.</p>
                </div>
                <div class="container-fluid">
                    <video autoplay loop playsinline muted style="width: 100%;">
                        <source src="../../Videos/iPhone 11 Pro/8.mp4" type="video/mp4">
                        <source src="../../Videos/iPhone 11 Pro/8.webm" type="video/webm">
                    </video>
                </div>
            </section>
            <section class="content" style="background-color: white; margin-bottom: 35vh;">
                <h1 style="font-size: 5rem; font-weight: 700;">New Super Retina XDR display</h1>
                <p style="font-size: 1.5rem; font-weight: 600;">This has the highest pixel density of any Apple device.</p>
                <video autoplay loop playsinline muted style="width: 80%;">
                    <source src="../../Videos/iPhone 11 Pro/9.mp4" type="video/mp4">
                    <source src="../../Videos/iPhone 11 Pro/9.webm" type="video/webm">
                </video>
            </section>
            <section class="content face" style="background-color: rgb(13, 13, 13);">
                <h1>Face ID</h1>
                <p>Privacy is built into every iPhone from the ground up. <br> The most secure facial authentication in a smartphone, which now works from greater angles and is even faster.</p>
                <video autoplay playsinline muted style="width: 80%;">
                    <source src="../../Videos/iPhone 11 Pro/10.mp4" type="video/mp4">
                    <source src="../../Videos/iPhone 11 Pro/10.webm" type="video/webm">
                </video>
            </section>
            <section class="content" style="background-color: rgb(13, 13, 13);">
                <div class="section-content-text-1">
                    <h1><i class="fab fa-apple"></i> A13 Bionic chip</h1>
                </div>
                <div class="product-first" style="text-align: end;">
                    <video autoplay playsinline muted style="width: 60%;">
                        <source src="../../Videos/iPhone 11 Pro/11.mp4" type="video/mp4">
                        <source src="../../Videos/iPhone 11 Pro/11.webm" type="video/webm">
                    </video>
                    <div>
                        <p>It's the most ambitious to date. It's the fastest chip ever in a smartphone yet more efficient than ever.</p>
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
                <h1 style="font-size: 5rem; font-weight: 700;">The new optimized batteries</h1>
                <p style="font-size: 1.5rem; font-weight: 600;">This give you up for extra hours in your day, you get more pro performance in an iPhone for longer than ever.</p>
                <video autoplay playsinline muted style="width: 80%;">
                    <source src="../../Videos/iPhone 11 Pro/12.mp4" type="video/mp4">
                    <source src="../../Videos/iPhone 11 Pro/12.webm" type="video/webm">
                </video>
            </section>
<?php require '../../Footer.php'; ?>