<?php 
    require '../Headers/HeaderUserPage.php';
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
                <nav class="navbar navbar-expand-lg navbar-light" style="width: 100% !important; height: 60px; padding: 10px; position: relative; z-index: 2; box-shadow: 0px 1px 14px -4px black; border-top: 1px #c7c7c7 solid; border-bottom: 1px #cacaca solid;">
                    <div class="container-fluid">
                        <a class="navbar-brand"><i class="far fa-user"></i> <?=$_SESSION["userName"]?> </a>
                        <div class="justify-content-end">
                            <ul class="navbar-nav">
                                <li class="nav-item" role="presentation"><a class="nav-link disabled">Overview</a></li>
                                <li class="nav-item" role="presentation"><a class="nav-link" href="UserEdit.php" style="width: 35px;">Edit</a></li>
                                <li class="nav-item" role="presentation"><a class="nav-link" href="Compare_Mode_downlond.php" style="width: 152px;">Compare Download</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </section>
            <div class="spacer" style="height: 20px; width: 100%;">
            </div>
            <section id="hero">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <h3> Details </h3>
                                    <hr>
                                    <b> About </b>
                                    <br>
                                    <?php require 'includes/userDetails.php';?>
                                </div>
                            </div>
                            <div class="spacer" style="height: 20px; width: 100%;"></div>
                            <div class="card">
                                <div class="card-body">
                                    <h3> Survey </h3>
                                    <hr>
                                    <form name="form1" action="includes/surveyApp.php" method="POST">
                                        <b> How much are you enjoy with our platform? </b>
                                        <br>
                                        <input type="radio" id="yes-selection" value="a1">
                                        <label for="yes-selection">Yes it's great!!</label>
                                        <br>
                                        <input type="radio" id="middle-selection" value="a2">
                                        <label for="middle-selection">Yes but not the best</label>
                                        <br>
                                        <input type="radio" id="bad-selection" value="a3">
                                        <label for="bad-selection">I can't call this site great</label>
                                        <br>
                                        <input type="radio" id="trash-selection" value="a4">
                                        <label for="trash-selection">This site is trash!!</label>
                                        <br>
                                        <button type="submit" name="submit-survey" class="btn btn-info">Submit</button>
                                    </form>
                                    <br>
                                    <form name="resultForm" action="includes/surveyApp.php" method="$_GET">
                                        <label></label>
                                        <label></label>
                                        <label></label>
                                        <label></label>
                                    </form>
                                    <br>                           
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <?php 
                                    if(!isset($_POST['getNews-submit'])){
                                ?>
                                <form action="includes/sentNews.php" method="POST">
                                    <span class="d-flex align-items-center justify-content-center">Are you want get our newspaper every month? 
                                        <button class="btn btn-outline-info" type="submit" name="getNews-submit" style="margin-left: 1rem">Give Me Please</button>
                                    </span>
                                </form>
                                <br>
                                <p class="d-flex justify-content-center">Why are you asking yourself?</p>
                                <br>
                                <p>Let's me explain! <br> We give the one greates news then ever about every product that you want know and need know!</p>
                                <br>
                                <p>Home Products, phones, tablets, hardwards, handphones, streamers, laptops, cars, how to use smarter with you'r money and more!!!!!</p>
                                <?php } 
                                    else{
                                        echo '<form action="includes/sentNews.php" method="POST">
                                                <span class="d-flex align-items-center justify-content-center">Are you want cancel your newspaper subscribion? 
                                                    <button class="btn btn-outline-info" type="submit" name="NonGetNews-submit" style="margin-left: 1rem">Cancel</button>
                                                </span>
                                            </form>';
                                ?>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
<?php
    require '../Footer.php';
?>