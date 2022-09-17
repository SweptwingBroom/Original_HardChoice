<?php
    require "HeaderOfLogin.php";
?>
        <section>
            <div class="sidenav">
                <div class="login-main-text">
                    <h1>Login Page</h1>
                    <p>Login or register from here to access the rest of the content of the website.</p>
                </div>
            </div>
            <div class="main">
                <div class="col-md-6 col-sm-12">
                    <div class="login-form">
                    <?php 
                            if(isset($_GET["error"])){
                                if($_GET["error"] == "emptyfields"){
                                    echo '<p class="message" style="color: red; font-size: 1.6rem;">You have empty fields!</p>';
                                }

                                elseif($_GET["error"] == "nouser"){
                                    echo '<p class="message" style="color: red; font-size: 1.6rem;">One of the fields wrong. Check it!</p>';
                                    echo '<p class="message">If you do not have a account. Please Sign Up!</p>';
                                }

                                elseif($_GET["error"] == "wrongpassword"){
                                    echo '<p class="message" style="color: red; font-size: 1.6rem;">One of the fields wrong. Check it!</p>';
                                }

                                elseif($_GET["error"] == "sqlerror"){
                                    echo '<p class="message" style="color: red; font-size: 1.6rem;">SQL problems. Try again later!</p>';
                                }
                            }
                            ?>
                        <form action="includes/login.php" method="POST">
                            <div class="form-group">
                                <label>Username/E-mail</label>
                                <input class="form-control" type="text" name="mailuid" placeholder="Username/E-mail">
                            </div>
                            <div class="form-group">
                                <label for="pwd">Password</label>
                                <input class="form-control" type="password" id="pwd" name="pwd" placeholder="Password">
                            </div>
                            <button type="submit" class="btn btn-black" name="login-submit">Login</button>
                        </form>
                        <h6>You have not account? <a href="Signup.php">SignUp</a></h6>
                    </div>
                </div>
            </div>
        </section>
<?php
    require "../Footer.php";
?>