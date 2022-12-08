<?php
    include_once 'header.php';
?>
    <section class = "sign-up-form">
        <h2>Sign Up</h2>
        <form action="includes\sign-up-form-include.php" method="post">
            <?php
            if (isset($_GET["error"])) {
                if ($_GET["error"] == "emptyInput") {
                    echo '<h2 class="errorMessage">Fill all fields</h2>';
                } else if ($_GET["error"] == "invalidUsername") {
                    echo '<h2 class="errorMessage">Invalid Username</h2>';
                } else if ($_GET["error"] == "invalidEmail") {
                    echo '<h2 class="errorMessage">Invalid Email</h2>';
                } else if ($_GET["error"] == "passwordmatch") {
                    echo '<h2 class="errorMessage">Password did not match</h2>';
                } else if ($_GET["error"] == "usernameisExist") {
                    echo '<h2 class="errorMessage">Username already taken</h2>';
                }
            }
            ?>
            <input type="text" name="name" placeholder="Full Name">
            <input type="text" name="email" placeholder="Email">
            <input type="text" name="username" placeholder="Username">
            <input type="password" name="password" placeholder="Password">
            <input type="password" name="passwordRP" placeholder="Repeat Password">
            <input type="submit" name="submit" class="button" value="Sign Up">
            
        </form>
    </section>
<?php
    include_once 'footer.php';
?>