<?php
    include_once 'header.php';
?>
    <section class = "sign-up-form">
        <h2>Login</h2>
        <?php
            if (isset($_GET["error"])) {
                if ($_GET["error"] == "emptyInput") {
                    echo '<h2 class="errorMessage">Fill all fields</h2>';
                } else if ($_GET["error"] == "WrongLogin") {
                    echo '<h2 class="errorMessage">Invalid Username/Email</h2>';
                } else if ($_GET["error"] == "WrongPassword") {
                    echo '<h2 class="errorMessage">Invalid Password</h2>';
                }
            }
         ?>
        <form action="includes\login-form-include.php" method="post">
            <input type="text" name="username" placeholder="Email/Username">
            <input type="password" name="password" placeholder="Password">
            <input type="submit" name="submit" class="button" value="Login">
            
        </form>
    </section>
<?php
    include_once 'footer.php';
?>