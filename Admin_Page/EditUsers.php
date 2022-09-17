<?php 
    require '../Headers/HeaderAdminPage.php';
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
                                <li class="nav-item" role="presentation"><a class="nav-link" href="admin_page.php">Overview</a></li>
                                <li class="nav-item" role="presentation"><a class="nav-link" href="liveUsers.php">Live Users</a></li>
                                <li class="nav-item" role="presentation"><a class="nav-link" href="AdminEdit.php">Edit</a></li>
                                <li class="nav-item" role="presentation"><a class="nav-link disabled">EditUsers</a></li>
                                <li class="nav-item" role="presentation"><a class="nav-link" href="ProductsEnter.php">EnterProduct</a></li>
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
                        <div class="col-md-12">
                            <h1 class="d-flex justify-content-center">Users Page</h1>
                            <p class="d-flex justify-content-center">Admin, here you can delete OR change properties, of the USERS</p>
                            <div class="card">
                                <div class="card-body">
                                    <?= require 'includes/tableOfUsers.php'?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
<?php
    require '../Footer.php';
?>