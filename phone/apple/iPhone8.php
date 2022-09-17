<?php
    session_start();
?>
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
                        <a class="navbar-brand"><i class="fab fa-apple"></i> iPhone 8 </a>
                        <div class="justify-content-end">
                            <ul class="navbar-nav">
                                <li class="nav-item" role="presentation"><a class="nav-link disabled">Overview</a></li>
                                <li class="nav-item" role="presentation"><a class="nav-link" style="width: 105px;" href="iPhone8/TechSpecs.php">Tech Specs</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </section>
            <section class="section-fluid">
                <div class="container-fluid">
                    <video autoplay muted playsinline style="width: 100%;">
                        <source src="../../Videos/iPhone 8/1.mp4" type="video/mp4">
                        <source src="../../Videos/iPhone 8/1.webm" type="video/webm">
                    </video>
                </div>
            </section>
            <section class="content">
                <div class="container-fluid">
                    <h2 style="font-size: 4rem; font-weight: 900;">This iPhone 8</h2>
                    <h2>The best generation of iPhone with home button.</h2>
                    <video autoplay loop playsinline muted style="width: 80%;">
                        <source src="../../Videos/iPhone 8/2.mp4" type="video/mp4">
                        <source src="../../Videos/iPhone 8/2.webm" type="video/webm">
                    </video>
                </div>
            </section>
            <section class="content">
                <div class="container-fluid">
                    <h1 style="font-size: 6rem;">New retina HD display</h1>
                    <p>The new display are renowned for their incredible color accuracy and they have great <strong>Cinema wide quality color gamut</strong>. <br> <strong>3D touch</strong> technology into the display. It has <strong>True Tone Display</strong> technology thats adapts the color temperature.</p>
                </div>
                <div class="container">
                    <video autoplay loop playsinline muted style="width: 80%;">
                        <source src="../../Videos/iPhone 8/3.mp4" type="video/mp4">
                        <source src="../../Videos/iPhone 8/3.webm" type="video/webm">
                    </video>
                </div>
            </section>
            <section class="content" style="background-color: rgb(13, 13, 13);">
                <div class="section-content-text-1">
                    <h1>New system camera</h1>
                    <p>The camera is an all-new 12MP sensor. It's larger and faster. <br> It's provides 83% more light. It's provides more power efficient at the same time. It's deeper pixels and a new color filter. <br> It's having better color saturation a wider dynamic range of color and lower noise in your photos and videos.</p>
                </div>
                <div class="product-first" style="text-align: end;">
                    <video autoplay playsinline muted style="width: 60%;">
                        <source src="../../Videos/iPhone 8/4.mp4" type="video/mp4">
                        <source src="../../Videos/iPhone 8/4.webm" type="video/webm">
                    </video>
                    <div>
                        <ul class="detail-Chip">
                            <li>iPhone 8 with 12MP</li> 
                            <li>iPhone 8+ with dual 12MP</li>
                            <li>All-new sensors</li>
                            <li>f/1.8 and f/2.8 apertures</li>
                            <li>Optical image stabilization</li>
                        </ul>
                    </div>
                </div>  
            </section>
            <section class="content">
                <h1 style="font-size: 5rem; font-weight: 700; color: white;">Portrait Lighting</h1>
                <p style="font-size: 1.5rem; font-weight: 600; color: white;">Whit the machine learning of A11, you have the choice define the light in a scene. <br> Based on fundamental photographic principles, Portrait lighting produces the effect of real studio lighting. </p>
                <video autoplay loop playsinline muted style="width: 80%;">
                    <source src="../../Videos/iPhone 8/5.mp4" type="video/mp4">
                    <source src="../../Videos/iPhone 8/5.webm" type="video/webm">
                </video>
            </section>
            <section class="content" style="background-color: white;">
                <div class="container-fluid">
                    <h1 style="color: black; font-size: 5rem;">Highest-quality video capture <br> ever in a smartphone</h1>
                    <p style="color: black;">With ISP, Apple-designed video encoder, this enables faster frame rates and higher quality video. It's does real-time image and motion analysis to predict changes in the content and optimize the video encoding algorithms.</p>
                    <p style="color: black;">On video has 2 million tiles per second looking for details like texture and edges to predict every object in <strong>one capture</strong>.</p>
                </div>
                <div class="container-fluid">
                    <video autoplay playsinline muted style="width: 100%;">
                        <source src="../../Videos/iPhone 8/6.mp4" type="video/mp4">
                        <source src="../../Videos/iPhone 8/6.webm" type="video/webm">
                    </video>
                </div>
            </section>
            <section class="content" style="background-color: white;">
                <h1 style="font-size: 5rem; font-weight: 700;">Augmented Reality</h1>
                <p style="font-size: 1.5rem; font-weight: 600;">It give for camera take pictures in low-light and 60fps video. <br> There are new gyroscopes and accelerometer. And accurate motion tracking.</p>
                <video autoplay playsinline muted style="width: 100%;">
                    <source src="../../Videos/iPhone 8/7.mp4" type="video/mp4">
                    <source src="../../Videos/iPhone 8/7.webm" type="video/webm">
                </video>
            </section>
            <section class="content" style="background-color: rgb(13, 13, 13);">
                <div class="section-content-text-1">
                    <h1><i class="fab fa-apple"></i> A11 Bionic chip</h1>
                </div>
                <div class="product-first" style="text-align: end;">
                    <video autoplay playsinline muted style="width: 60%;">
                        <source src="../../Videos/iPhone 8/8.mp4" type="video/mp4">
                        <source src="../../Videos/iPhone 8/8.webm" type="video/webm">
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
<?php require '../../Footer.php'; ?>