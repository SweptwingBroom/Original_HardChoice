<?php
    require "HeaderOfLogin.php";
?>
        <section>
            <div class="sidenav">
                <div class="login-main-text">
                    <h1>Register Page</h1>
                    <p>Register from here to access the rest of the content of the website.</p>
                </div>
            </div>
            <div class="main">
                <div class="col-md-6 col-sm-12">
                    <div class="login-form">
                        <?php 
                            if(isset($_GET["error"])){
                                if($_GET["error"] == "emptyfields"){
                                    echo '<p style="color: red; font-size: 1.6rem;">Fill in all fields!</p>';
                                }

                                elseif($_GET["error"] == "invalidmailuid"){
                                    echo '<p style="color: red; font-size: 1.6rem;">Invalid username and e-mail!</p>';
                                }

                                elseif($_GET["error"] == "invalidmail"){
                                    echo '<p style="color: red; font-size: 1.6rem;">Invalid e-mail!</p>';
                                }

                                elseif($_GET["error"] == "invaliduid"){
                                    echo '<p style="color: red; font-size: 1.6rem;">Invalid username!</p>';
                                }

                                elseif($_GET["error"] == "passwordcheck"){
                                    echo '<p style="color: red; font-size: 1.6rem;">Your password do not match!</p>';
                                }

                                elseif($_GET["error"] == "usertaken"){
                                    echo '<p style="color: red; font-size: 1.6rem;">UserName is already taken!</p>';
                                }

                                elseif($_GET["error"] == "sqlerror"){
                                    echo '<p style="color: red; font-size: 1.6rem;">There is problem in the site<br>We are checking it!<br>Have a good day!!!</p>';
                                }
                            }
                            
                        ?>
                        <form action="includes/signUp.php" method="POST">
                            <div class="form-group">
                                <label>Username</label>
                                <input class="form-control" type="text" name="uid" placeholder="Username">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input class="form-control" type="text" id="email" name="mail" placeholder="E-mail">
                            </div>
                            <div class="form-group">
                                <label for="pwd">Password</label>
                                <input class="form-control" type="password" id="pwd" name="pwd" placeholder="Password" minlength="8">
                            </div>
                            <div class="form-group">
                                <label for="pwd">Repeat Password</label>
                                <input class="form-control" type="password" id="pwd" name="pwd-repeat" placeholder="Repeat password" minlength="8">
                            </div>
                            <button type="submit" class="btn btn-secondary" name="signup-submit">Signup</button>
                        </form>
                        
                    </div>
                </div>
            </div>
        </section>
<?php
    require "../Footer.php";
?>