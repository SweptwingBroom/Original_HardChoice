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
                        <a class="navbar-brand"><i class="fab fa-apple"></i> iPhone X </a>
                        <div class="justify-content-end">
                            <ul class="navbar-nav">
                                <li class="nav-item" role="presentation"><a class="nav-link disabled">Overview</a></li>
                                <li class="nav-item" role="presentation"><a class="nav-link" href="iphoneX/TechSpecs.php" style="width: 105px;">Tech Specs</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </section>
            <section class="section-fluid">
                <div class="container-fluid">
                    <video autoplay muted playsinline style="width: 100%;">
                        <source src="../../Videos/iPhone X/1.mp4" type="video/mp4">
                        <source src="../../Videos/iPhone X/1.webm" type="video/webm">
                    </video>
                </div>
            </section>
            <section class="content">
                <div class="container-fluid">
                    <h2>A physical object that disappears into the experience.</h2>
                    <h2 style="margin: -5vh 0 0 0; font-size: 4rem; font-weight: 900;">This iPhone X.</h2>
                    <video autoplay playsinline muted style="width: 80%;">
                        <source src="../../Videos/iPhone X/2.mp4" type="video/mp4">
                        <source src="../../Videos/iPhone X/2.webm" type="video/webm">
                    </video>
                </div>
            </section>
            <section class="content" style="background-color: white;">
                <h1 style="font-size: 5rem; font-weight: 700;">New Super Retina XDR display</h1>
                <p style="font-size: 1.5rem; font-weight: 600;">A screen of iPhone X, defines a whole new integration, <br> making the boundary between the device and the screen hard to discern.</p>
                <video autoplay playsinline muted style="width: 100%;">
                    <source src="../../Videos/iPhone X/3.mp4" type="video/mp4">
                    <source src="../../Videos/iPhone X/3.webm" type="video/webm">
                </video>
            </section>
            <section class="content" style="background-color: white;">
                <h1 style="font-size: 5rem; font-weight: 700;">A new feel of the iPhone</h1>
                <p style="font-size: 1.5rem; font-weight: 600;">The custom OLED panel seamlessly combine with the external surfaces.</p>
                <video autoplay loop playsinline muted style="width: 100%;">
                    <source src="../../Videos/iPhone X/4.mp4" type="video/mp4">
                    <source src="../../Videos/iPhone X/4.webm" type="video/webm">
                </video>
            </section>
            <section class="content" style="background-color: rgb(13, 13, 13);">
                <div class="section-content-text-1">
                    <h1>The changer game of the holl iPhone</h1>
                </div>
                <div class="product-first" style="text-align: end;">
                    <p>Mechanical buttons give way to touch and gestures. There's no home button. <br> A single swipe take you to the Home screen. <br> A more responsive touch system means the gestures in the iPhone that's are more fluid.</p>
                    <video autoplay loop playsinline muted style="width: 60%;">
                        <source src="../../Videos/iPhone X/5.mp4" type="video/mp4">
                        <source src="../../Videos/iPhone X/5.webm" type="video/webm">
                    </video>
                </div>  
            </section>
            <section class="content" style="background-color: white;">
                <h1 style="font-size: 5rem; font-weight: 700;">Radically new cameras</h1>
                <p style="font-size: 1.5rem; font-weight: 600;">A new generation of useful at iPhone.</p>
                <video autoplay loop playsinline muted style="width: 100%;">
                    <source src="../../Videos/iPhone X/13.mp4" type="video/mp4">
                    <source src="../../Videos/iPhone X/13.webm" type="video/webm">
                </video>
            </section>
            <section class="content" style="background-color: rgb(13, 13, 13);">
                <div class="section-content-text-1">
                    <h1>Dual camera system redesigned.</h1>
                </div>
                <div class="product-first" style="text-align: end;">
                    <p>The camera is made even smarter by the A11 bionic chip. Have the wide lens and Telephoto lens in your choice for capture your photo.</p>
                    <video autoplay playsinline muted style="width: 60%;">
                        <source src="../../Videos/iPhone X/6.mp4" type="video/mp4">
                        <source src="../../Videos/iPhone X/6.webm" type="video/webm">
                    </video>
                </div>  
            </section>
            <section class="content">
                <video autoplay loop playsinline muted style="width: 100%;">
                    <source src="../../Videos/iPhone X/15.mp4" type="video/mp4">
                    <source src="../../Videos/iPhone X/15.webm" type="video/webm">
                </video>
            </section>
            <section class="content">
                <div class="container-fluid">
                    <h1 style="font-size: 6rem;">The camera capture photos</h1>
                    <p>With machine learning, the camera detects elements in the scene to optimise the image before the photo is even taken.</p>
                </div>
                <div class="container-fluid">
                    <video autoplay playsinline muted style="width: 100%;">
                        <source src="../../Videos/iPhone X/7.mp4" type="video/mp4">
                        <source src="../../Videos/iPhone X/7.webm" type="video/webm">
                    </video>
                </div>
            </section>
            <section class="content" style="background-color: white;">
                <h1 style="font-size: 5rem; font-weight: 700;">The camera now delivers <br> so much more.</h1>
                <p style="font-size: 1.5rem; font-weight: 600;">With it and as IOS becomes the world's largest platfrom for augmented reality, it will redefine what's possible.</p>
                <video autoplay playsinline muted style="width: 80%;">
                    <source src="../../Videos/iPhone X/8.mp4" type="video/mp4">
                    <source src="../../Videos/iPhone X/8.webm" type="video/webm">
                </video>
            </section>
            <section class="content face" style="background-color: rgb(13, 13, 13);">
                <h1>Face ID</h1>
                <p>The new TrueDepth camera system, contained within this tiny space, <br> uses extraordinary depth sensing technology to let you unlock your phone with a glance. It called FaceID. <br> It maps the unique geometry of your face with over 30,000 invisible dots.</p>
                <video autoplay playsinline muted style="width: 80%;">
                    <source src="../../Videos/iPhone X/9.mp4" type="video/mp4">
                    <source src="../../Videos/iPhone X/9.webm" type="video/webm">
                </video>
            </section>
            <section class="content">
                <h1 style="font-size: 5rem; font-weight: 700; color: white;">Portrait Lighting</h1>
                <p style="font-size: 1.5rem; font-weight: 600; color: white;">You have the choice define the light in a scene. <br> Based on fundamental photographic principles, Portrait lighting produces the effect of real studio lighting. </p>
                <video autoplay playsinline muted style="width: 80%;">
                    <source src="../../Videos/iPhone X/10.mp4" type="video/mp4">
                    <source src="../../Videos/iPhone X/10.webm" type="video/webm">
                </video>
            </section>
            <section class="content" style="background-color: white;">
                <h1 style="font-size: 5rem; font-weight: 700;">New experiences <br> of the TrueDepth camera</h1>
                <p style="font-size: 1.5rem; font-weight: 600;">The TrueDepth camera bringing emojis to life by mapping more than 50 facial muscles in real time. <br> So you can be happy, or sad, or cross.</p>
                <video autoplay playsinline muted style="width: 100%;">
                    <source src="../../Videos/iPhone X/11.mp4" type="video/mp4">
                    <source src="../../Videos/iPhone X/11.webm" type="video/webm">
                </video>
            </section>
            <section class="content" style="background-color: rgb(13, 13, 13);">
                <div class="section-content-text-1">
                    <h1><i class="fab fa-apple"></i> A11 Bionic chip</h1>
                </div>
                <div class="product-first" style="text-align: end;">
                    <video autoplay playsinline muted style="width: 60%;">
                        <source src="../../Videos/iPhone X/12.mp4" type="video/mp4">
                        <source src="../../Videos/iPhone X/12.webm" type="video/webm">
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