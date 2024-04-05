<!--
    Author: Arham Islam
    Date Created: March 02, 2024
    File Description: Database for myfitness.
-->

<?php
    $mysql_hostname = "localhost";
    $mysql_username = "root";
    $mysql_password = "";
    $mysql_database = "myfitness";

    $dsn = "mysql:host=" . $mysql_hostname . ";dbname=" . $mysql_database;
    
    $debug = false;

    try {
        $pdo = new PDO($dsn, $mysql_username, $mysql_password, array(PDO::ATTR_EMULATE_PREPARES => false, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    }

    catch (PDOException $e) {
        echo 'PDO error: could not connect to DB, error: '.$e;
    }
?>
