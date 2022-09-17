<?php 
    require 'Headers/HeaderUserPage.php';
?>
        <main id="main">
            <section class="header"> 
                <div class="container-fluid">
                    <h1 class="display-1"> Welcome </h1> <!--section of welcome go up and the next section on z-index: 4 on him.-->
                </div>
                <div class="container" style="text-align: center;">
                    <div class="row">
                        <div class="col col-button">
                            <button class="btn btn-link btn-block arrow-button" type="button" onclick="ScrollPage()">
                                <i class="fas fa-chevron-down"></i>
                            </button>
                        </div>
                    </div>
                </div> 
            </section>
            <section id="main-Overview hero">
                <nav class="navbar navbar-expand-lg navbar-light" style="font-size: 50%;">
                    <div class="container-fluid">
                        <a class="navbar-brand"><i class="far fa-user"></i> <?=$_SESSION["userName"]?> </a>
                        <div class="justify-content-end">
                            <ul class="navbar-nav">
                                <li class="nav-item" role="presentation"><a class="nav-link disabled">Overview</a></li>
                                <li class="nav-item" role="presentation"><a class="nav-link" style="width: 105px;">Edit</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </section>
<?php
    require 'Footer.php';
?>