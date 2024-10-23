<!--
    Author: Arham Islam
    Date Created: March 30, 2024
    File Description: PHP file that displays the dashboard for a user.
-->

<?php
    // Making sure only users who are logged in can access the website
    if(!isset($_SESSION["email"])) {
        header("Location: login.php");
    }

    $_SESSION["fName"] = getUserFirstNameWithEmail($_SESSION["email"]);
    $_SESSION["lName"] = getUserLastNameWithEmail($_SESSION["email"]);
?>

<head>
    <title>myfitness | Dashboard</title>
</head>
<body>
    <div>
        <br>
        <span class="display-4 m-5 text"><?php echo "Welcome back, " . $_SESSION["fName"]; ?></span>
        <!-- make the large buttons I wanted to do like the ones in MC1 -->

        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="btn btn-dark" href="#" data-bs-toggle="dropdown" aria-expanded="false"><?php echo $_SESSION["fName"] . " " . $_SESSION["lName"] ?></a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="?page=profile">Profile</a></li>
                            <li><a class="dropdown-item" href="?page=settings">Settings</a></li>
                            <li><a class="dropdown-item" href="logout.php">Sign Out</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

    <a href="?page=logsheet">Log Sheet</a>
</body>
