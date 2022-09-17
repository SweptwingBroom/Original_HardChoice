<?php
    require 'Headers/HeaderPhone.php';
?>
        <main id="main">
            <section class="header">
                <div class="container-fluid mx-auto" style="width: fit-content;">
                    <h1 class="display-3" style="font: bold; font-weight: 400; text-align: center; ;">Phone Devices</h1>
                </div>
                <nav class="navbar navbar-expand-sm nav2-color justify-content-center">
                    <ul class="navbar-nav">
                        <li class="nav-item2"><a class="nav-link" href="Phone/Apple.php">Apple</a></li>
                        <li class="nav-item2"><a class="nav-link" href="Phone/Samsung.php">Samsung</a></li>
                        <li class="nav-item2"><a class="nav-link disabled">Asus</a></li>
                        <li class="nav-item2"><a class="nav-link disabled">Huawie</a></li>
                        <li class="nav-item2"><a class="nav-link disabled">Meizu</a></li>
                        <li class="nav-item2"><a class="nav-link disabled">Google</a></li>
                        <li class="nav-item2"><a class="nav-link disabled">Sony</a></li>
                        <li class="nav-item2"><a class="nav-link disabled">LG</a></li>
                        <li class="nav-item2"><a class="nav-link disabled">Panasonic</a></li>
                        <li class="nav-item2"><a class="nav-link disabled">Honor</a></li>
                        <li class="nav-item2"><a class="nav-link disabled">Motorola</a></li>
                        <li class="nav-item2"><a class="nav-link disabled">HTC</a></li>
                        <li class="nav-item2"><a class="nav-link disabled">Lenovo</a></li>
                    </ul>
                </nav>
            </section>
            <section class="product product-Iphone11">
                <h1>iPhone 11 Pro</h1>
                <h2>Just The Right Amount Of Everything.</h2> 
                <div class="links">
                    <a class="learn-more" href="Phone/Apple/iPhone%2511pro.php"> Learn More <i class="fa fa-angle-right"></i></a>
                </div>
                <img class="img-fluid" src="Images/Iphone11.jpg" alt="Iphone11_picture">
            </section>
            <section class="product product-GalaxyNote10">
                <h1>Galaxy Note 10</h1>
                <h2 style="font-size: 40px;">Power Of 10.</h2> 
                <div class="links">
                    <a class="learn-more" href="Phone/Samsung/GalaxyNote/GalaxyNote10.php"> Learn More <i class="fa fa-angle-right"></i></a>
                </div>
                <img class="img-fluid" src="Images/galaxy-note-10-plus-leak-1420x799-e1563811598578.jpg" alt="GalaxyNote10_picture">
            </section>
            <section class="product">
                <div class="row no-gutters products-grid" style="margin-top: -87px;">
                    <div class="col-md-6">
                        <div class="product-small" id="Xiaomi-Product" style="background-image: url(Images/Xiaomi-Redmi-K30-New-2.jpg); color: white;">
                            <h3>Xiaomi Redmi K30</h3>
                            <h4>Full Size Screen. 4 Cameras. The New 5G Phone.</h4>
                            <div class="links">
                                <a class="learn-more"> Learn More <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="product-small" id="LG-Product" style="background-image: url(Images/LGG8X-Dual.jpg); color: white;">
                            <h3>LG G8X ThinQ™ Dual Screen</h3>
                            <h4>DO MORE AT ONCE.</h4>
                            <div class="links">
                                <a class="learn-more disabled"> Learn More <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters products-grid">
                    <div class="col-md-6">
                        <div class="product-small" id="Google4" style="background-image: url(Images/Google-Pixel-4a-4.jpg);">
                            <h3>Google Pixel 4</h3>
                            <h4>The Google Phone.</h4>
                            <div class="links">
                                <a class="learn-more disabled"> Learn More <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="product-small" id="Huawie30" style="background-image: url(Images/huawei_mate_30_pro.jpg); color: white;">
                            <h3>Huawie Mate30 Pro</h3>
                            <h4>Rethink Possibilities.</h4>
                            <div class="links">
                                <a class="learn-more disabled"> Learn More <i class="fa fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="section-compare">
                <div class="caption">
                    <h1>Find The Right<br>SmartPhone For You</h1>
                    <div class="links">
                        <a class="learn-more" href="Phone/Compare.php"> Compare all Phone Models <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
                <img class="img-fluid" src="Images/compare-phone.jpg" alt="Compare_Phone_Picture">
            </section>
        </main> 
<?php require 'Footer.php'; ?>