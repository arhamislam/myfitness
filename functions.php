<!--
    Author: Arham Islam
    File Description: PHP functions for myfitness.
    Date Created: March 02, 2024
-->

<?php
    require("database.php");

    /*
    * @desc function to get all the users in the database
    * @return array of users
    */

    function getUsers() {
        global $pdo;
        $query = $pdo -> prepare("SELECT * FROM users");
        $query -> execute();
        $users = $query -> fetchAll(PDO::FETCH_ASSOC);
        return $users;
    }

    /*
    * @desc function to validate login information
    * @param string $email, string $password
    * @return boolean validLogin
    */

    function isValidLogin($email, $password) {
        $users = getUsers();

        foreach($users as $u) {
            if($u["user_email"] == $email) {
                if($u["user_pass"] == $password) {
                    return true;
                }
            }
        }

        return false;
    }
?>
