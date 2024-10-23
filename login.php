<!--
    Author: Arham Islam
    Date Created: February 23, 2024
    File Description: PHP file that displays the login page.
-->

<?php
    require("functions.php");

    session_start();

    // If the user inputted email and password are not null...
    if(isset($_POST["email"]) && isset($_POST["password"])) {
        // Check if the credentials are in the database
        $validLogin = isValidLogin($_POST["email"], $_POST["password"]);

        // If $validLogin is true, then assign a session variable, and direct the user to the dashboard page
        if($validLogin) {
            $_SESSION["email"] = $_POST["email"];
            header("Location: template.php");
        }
    }
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">

        <!-- Bootstrap -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

        <link rel="stylesheet" href="styles.css">
        <link rel="icon" href="pictures/favicon.ico">
        <title>myfitness | Sign In</title>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row align-items-center text-center logo">
                <div class="col-md p-0">
                    <span class="text logoMy">my</span><span class="text logoFitness">fitness</span>
                    <p class="text logoShortStrapline">Own Your Fitness Journey</p>
                </div>
                <div class="col-md p-0">
                    <div class="rounded-5 shadow mx-auto p-4 loginBox">
                        <p class="h2 mb-4 fw-bold">Sign In</p>

                        <p class="small m-3 redText" id="invalidLoginAlert">Incorrect email or password. Please try again.</p>

                        <form action="" method="POST">
                            <div class="mb-4 text-start">
                                <label for="email">Email address</label>
                                <input type="email" class="form-control" id="email" name="email">
                            </div>
                            <div class="mb-4 text-start">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="password">
                                <a href="#" class="small text-decoration-none forgotPassword">Forgot password?</a>
                            </div>

                            <input type="submit" class="btn btn-dark mb-3 w-100 fw-bold" value="Sign In"></input>
                            <p>Don't have an account? <a href="register.php" class="text-decoration-none fw-bold signUp">Sign up</a></p>
                        </form>
                    </div>
                </div>
            </div>
            <br><br><br><br>
            <p class="small text-center">© 2024 myfitness. All Rights Reserved.</p>
        </div>

        <!-- jQuery & Bootstrap -->
        <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

        <script>
            <?php
                // if $validLogin is false, then show the incorrect login info alert
                if(!$validLogin) {
            ?>
            document.getElementById("invalidLoginAlert").style.display = "block";
            <?php } ?>
        </script>
    </body>
</html>
