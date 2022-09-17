<?php
    require 'Headers/HeaderHome.php';
?>
        <main id="main">
            <section>
                <div class="video-background">
                    <div class="video-wrap">
                        <div id="video">
                            <video id="bgvid" autoplay loop muted playsinline style="width: 100%;">
                                <source src="Videos/Video_Web_Trailer.mp4" type="video/mp4">
                                <source src="Videos/Video_Web_Trailer.webm" type="video/webm">
                            </video>
                        </div>
                    </div>
                </div>   
                <div class="caption text-center" id="animated-text1">
                    <h1>MAKE YOUR DECISION !</h1>
                    <h3>The best your choice comes from the best information</h3>
                    <div class="container" style="text-align: center;">
                        <div class="row">
                            <div class="col col-button">
                                <button class="btn btn-link btn-block arrow-button" type="button" onclick="ScrollPage()">
                                    <i class="fas fa-chevron-down"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="hero">
                <h1>In the this page you can compares between different devices</h1>
            </section>

<?php require 'Footer.php'; ?>