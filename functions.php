<!--
    Author: Arham Islam
    Date Created: March 02, 2024
    File Description: PHP file that contains all the functions.
-->

<?php
    require("database.php");

    /*
    * @desc function to get the all users in the database
    * @return array $users
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
    * @return boolean
    */

    function isValidLogin($emailInput, $passwordInput) {
        $users = getUsers();

        // Loop through users array and check if the user inputted email matches one of the email's in the database,
        // then check if hashed password in the database is the same as the inputted password.
        // If both match, then return true. Otherwise, return false.
        foreach($users as $u) {
            if($u["user_email"] == $emailInput) {
                if(password_verify($passwordInput, $u["user_pass"])) {
                    return true;
                }
            }
        }

        return false;
    }

    /*
    * @desc function to create a new user
    * @param string $fName, string $lName, string $email, string $password
    * @return boolean
    */

    function createUser($fName, $lName, $email, $password) {
        $users = getUsers();

        // Loop through users array and check if user inputted email matches one of the email's in the database,
        // if it does, then return false
        foreach($users as $u) {
            if($u["user_email"] == $email) {
                return false;
            }
        }

        // Making sure new user does not make an account with null
        if($fName == "null" || $lName == "null" || $email == "null" || $password == "null") {
            return false;
        }

        // Making sure new user does not make an account with null
        if($fName == "NULL" || $lName == "NULL" || $email == "NULL" || $password == "NULL") {
            return false;
        }

        // Making sure new user does not make an account with empty input fields
        if($fName == "" || $lName == "" || $email == "" || $password == "") {
            return false;
        }

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        global $pdo;
        $query = $pdo -> prepare("INSERT INTO users (user_fname, user_lname, user_email, user_pass) VALUES (:fname, :lname, :email, :pass)");
        $query -> bindparam(":fname", $fName);
        $query -> bindparam(":lname", $lName);
        $query -> bindparam(":email", $email);
        $query -> bindparam(":pass", $hashedPassword);
        $query -> execute();

        return true;
    }
?>
