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
                                <li class="nav-item" role="presentation"><a href="USER_Page.php" class="nav-link">Overview</a></li>
                                <li class="nav-item" role="presentation"><a class="nav-link disabled" href="UserEdit.php" style="width: 35px;">Edit</a></li>
                                <li class="nav-item" role="presentation"><a class="nav-link" href="Compare_Mode_downlond.php" style="width: 152px;">Compare Download</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </section>
            <div class="spacer" style="height: 20px; width: 100%;">
            </div>
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <h1 class="d-flex justify-content-center">Edit Zone</h1>
                            <p class="d-flex align-items-center justify-content-center">Here are you can change you'r contant of the account.</p>
                            <br>
                            <p class="d-flex align-items-center justify-content-center">Enter the all fields for change path to login</p>
                            <?php 
                            if(isset($_GET["error"])){
                                if($_GET["error"] == "emptyChangesfields"){
                                    echo '<p style="color: red; font-size: 1.6rem;">You have empty fields!</p>';
                                }
                                
                                elseif($_GET["error"] == "invalidmailuid"){
                                    echo '<p class="message" style="color: red; font-size: 1.6rem;">One of the fields wrong. Check it!</p>';
                                }

                                elseif($_GET["error"] == "invalidmail"){
                                    echo '<p class="message" style="color: red; font-size: 1.6rem;">One of the fields wrong. Check it!</p>';
                                }

                                elseif($_GET["error"] == "invaliduid"){
                                    echo '<p class="message" style="color: red; font-size: 1.6rem;">One of the fields wrong. Check it!</p>';
                                }

                                elseif($_GET["error"] == "sqlerror"){
                                    echo '<p class="message" style="color: orange; font-size: 1.6rem;">SQL problems. Try again later!</p>';
                                }

                                elseif($_GET["error"] == "passwordcheck"){
                                    echo '<p class="message" style="color: red; font-size: 1.6rem;">One of the fields wrong. Check it!</p>';
                                }

                                elseif($_GET["error"] == "usertaken"){
                                    echo '<p class="message" style="color: red; font-size: 1.6rem;">Username taken! Please enter different username!</p>';
                                }
                            }

                            elseif(isset($_GET["requset"])){
                                echo '<p class="message" style="color: green; font-size: 1.6rem;">Changes accepted!</p>';
                            }
                            ?>
                            <div class="card">
                                <div class="d-flex justify-content-center">
                                    <form action="includes/changeDetailUser.php" method="POST">
                                        <div class="form-group">
                                            <label class="col-sm-12">Username:</label>
                                            <div class="col-sm-12">
                                                <input class="form-control" type="text" name="nuid" placeholder="Enter New Username">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-12" for="email">E-mail:</label>
                                            <div class="col-sm-12">
                                                <input class="form-control" type="email" id="email" name="nmail" placeholder="Enter New email">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-12" for="npwd">Password:</label>
                                            <div class="col-sm-12">
                                                <input class="form-control" type="password" id="npwd" name="npwd" placeholder="Enter New email" minlength="8">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-12">Repeat Password:</label>
                                            <div class="col-sm-12">
                                                <input class="form-control" type="password" name="npwd-repeat" placeholder="Enter New email" minlength="8">
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-secondary col-sm-12" name="changedetail-submit">submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
<?php
    require '../Footer.php';
?>