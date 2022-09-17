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
                        <form action="includes/login.php" method="POST">
                            <div class="form-group">
                                <label>Username/E-mail</label>
                                <input class="form-control" type="text" name="mailuid" placeholder="Username/E-mail">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input class="form-control" type="password" name="pwd" placeholder="Password">
                            </div>
                            <button type="submit" class="btn btn-black" name="login-submit">Login</button>
                        </form>
                        <h6>You have not account? <a href="Signup.php">SignUp</a></h6>
                    </div>
                </div>
            </div>
        </section>
        <section class="message">
            <main>
                <p>You are logged out!</p>
                <p>You are logged in!</p>
            </main>
        </section>
<?php
    require "../Footer.php";
?>