<!--
    Author: Arham Islam
    Date Created: May 05, 2024
    File Description: PHP template file for all the other PHP files.
-->

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">

        <!-- Bootstrap -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

        <link rel="stylesheet" href="styles.css">
        <link rel="icon" href="pictures/favicon.ico">
    </head>

    <?php
        require("functions.php");

        session_start();

        // Making sure only users who are logged in can access the website
        if(!isset($_SESSION["email"])) {
            header("Location: login.php");
        }

        if(isset($_GET["page"])) {
            if($_GET["page"] == "profile") {
                include "profile.php";
            }

            else if($_GET["page"] == "settings") {
                include "settings.php";
            }

            else if($_GET["page"] == "logsheet") {
                include "logsheet.php";
            }
        }

        else {
            include "dashboard.php";
        }
    ?>

    <body>
        <!-- jQuery & Bootstrap -->
        <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>
