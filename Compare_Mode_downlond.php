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
            <section id="hero main-Overview">
                <nav class="navbar navbar-expand-lg navbar-light" style="width: 100% !important; height: 60px; padding: 10px; position: relative; z-index: 2; box-shadow: 0px 1px 14px -4px black; border-top: 1px #c7c7c7 solid; border-bottom: 1px #cacaca solid;">
                    <div class="container-fluid">
                        <a class="navbar-brand"><i class="far fa-user"></i> <?=$_SESSION["userName"]?> </a>
                        <div class="justify-content-end">
                            <ul class="navbar-nav">
                                <li class="nav-item" role="presentation"><a href="USER_Page.php" class="nav-link">Overview</a></li>
                                <li class="nav-item" role="presentation"><a class="nav-link" href="UserEdit.php" style="width: 35px;">Edit</a></li>
                                <li class="nav-item" role="presentation"><a class="nav-link disabled" style="width: 152px;">Compare Download</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </section>
            <div class="spacer" style="height: 20px; width: 100%;">
            </div>
            <section>
                <div class="container">
                    <div class="col-sm-12">
                        <div class="card">
                            <p class="d-flex align-items-center justify-content-center" style="font-size: 1.4rem;">Here we are allow to yourself sent the compare saves to your email and there you can downlowd it.</p>
                        </div>
                        <div class="card">
                            <form action="includes/comaprePostServer.php" method="POST">
                            <span class="d-flex align-items-center justify-content-start">"name of the kind compare"<button class="btn btn-outline-info" type="submit" name="getCompare-to-mail-submit" style="margin-left: 1rem">Send to my email</button></span>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
<?php
    require '../Footer.php';
?>