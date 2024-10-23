<!--
    Author: Arham Islam
    Date Created: May 05, 2024
    File Description: PHP file that log out's a user.
-->

<?php
    session_start();
    session_unset();
    session_destroy();
    header("Location: login.php");
?>
