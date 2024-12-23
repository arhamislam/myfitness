<!--
    Author: Arham Islam
    Date Created: March 30, 2024
    File Description: PHP file that displays the dashboard for a user.
-->

<?php
    // Making sure only users who are logged in can access the dashboard
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
    <!-- Greeting, Date, & User Menu -->
    <!-- <div class="testing3 d-flex justify-content-between align-items-center">
        <div class="testing2">
            <br>
            <span class="display-4 m-5 text" id="greeting"></span>
            <br>
            <span class="fs-4 m-5" id="date"></span>
        </div>
        <div class="btn-group me-5">
            <button type="button" class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"> -->
                <?php // echo $_SESSION["fName"] . " " . $_SESSION["lName"]; ?>
            <!-- </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="?page=profile">Profile</a></li>
                <li><a class="dropdown-item" href="?page=settings">Settings</a></li>
                <li><a class="dropdown-item" href="logout.php">Sign Out</a></li>
            </ul>
        </div>  
    </div> -->

    <!-- Greeting, Date, & User Menu -->
    <div class="d-flex flex-column flex-md-row justify-content-between align-items-center">
        <!-- Mobile Hamburger Menu (visible only on mobile) -->
        <div class="d-md-none w-100 purpleBackground">
            <nav class="navbar text whiteText">
                <div class="container-fluid d-flex justify-content-end">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mobileMenu" aria-controls="mobileMenu" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="mobileMenu">
                    <ul class="navbar-nav">
                        <li><a class="dropdown-item" href="?page=profile">Profile</a></li>
                        <li><a class="dropdown-item" href="?page=settings">Settings</a></li>
                        <li><a class="dropdown-item" href="logout.php">Sign Out</a></li>
                    </ul>
                </div>
            </nav>
        </div>

        <!-- Greeting and Date Section -->
        <div class="testing2 text-center text-md-start">
            <span class="display-4 m-5 text" id="greeting"></span>
            <br>
            <span class="fs-4 m-5" id="date"></span>
        </div>

        <!-- Desktop User Menu (visible only on desktop) -->
        <div class="btn-group d-none d-md-block me-5">
            <button type="button" class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                <?php echo $_SESSION["fName"] . " " . $_SESSION["lName"]; ?>
            </button>
            <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="?page=profile">Profile</a></li>
                <li><a class="dropdown-item" href="?page=settings">Settings</a></li>
                <li><a class="dropdown-item" href="logout.php">Sign Out</a></li>
            </ul>
        </div>
    </div>

<style>
/* Responsive Font Sizes for Greeting and Date */
@media (max-width: 576px) {
    #greeting {
        font-size: 1.5rem;
    }
    #date {
        font-size: 1.25rem;
    }
}
</style>



    <!-- Buttons Directing to the Features -->
    <!-- <div class="container-fluid d-flex align-items-center min-vh-100 testing1">
        <div class="row w-100 justify-content-center justify-content-md-start testing2">
            <div class="col-12 col-md-3 m-5 d-flex justify-content-center testing3">
                <a class="rounded-5 shadow btn btn-dark w-75 p-2 fw-bold" href="?page=logsheet"><br>Log Your Workouts<br><br></a>
            </div>
        </div>
        <div class="row w-100 justify-content-center justify-content-md-start">
            <div class="col-12 col-md-3 m-5 d-flex justify-content-center">
                <a class="rounded-5 shadow btn btn-dark w-75 p-2 fw-bold" href="?page=plans"><br>Create Workout Plans<br><br></a>
            </div>
        </div>
        <div class="row w-100 justify-content-center justify-content-md-start">
            <div class="col-12 col-md-3 m-5 d-flex justify-content-center">
                <a class="rounded-5 shadow btn btn-dark w-75 p-2 fw-bold" href="?page=goals"><br>Set Goals<br><br></a>
            </div>
        </div>
    </div> -->

    <!-- Vertically Centered Buttons -->
<!-- <div class="container-fluid d-flex flex-column align-items-center justify-content-center min-vh-100">
    <div class="row w-100 justify-content-center justify-content-md-start">
        <div class="col-12 col-md-3 mb-5 d-flex justify-content-center">
            <a class="rounded-5 shadow btn btn-dark w-75 p-2 fw-bold" href="?page=logsheet">
                Log Your Workouts
            </a>
        </div>
    </div>
    <div class="row w-100 justify-content-center justify-content-md-start">
        <div class="col-12 col-md-3 mb-5 d-flex justify-content-center">
            <a class="rounded-5 shadow btn btn-dark w-75 p-2 fw-bold" href="?page=plans">
                Create Workout Plans
            </a>
        </div>
    </div>
    <div class="row w-100 justify-content-center justify-content-md-start">
        <div class="col-12 col-md-3 mb-5 d-flex justify-content-center">
            <a class="rounded-5 shadow btn btn-dark w-75 p-2 fw-bold" href="?page=goals">
                Set Goals
            </a>
        </div>
    </div>
</div> -->


    <!-- All JS Scripts for dashboard.php -->
    <script>
        /**
         * Greets the user on the dashboard based on the user's local timezone.
         */
        function greetUser() {
            const time          = new Date();
            const timeInHours   = time.getHours();
            const morning       = 6;                                    // 06am
            const afternoon     = 12;                                   // 12pm
            const evening       = 18;                                   // 06pm
            const night         = 21;                                   // 09pm
            const fName         = "<?php echo $_SESSION["fName"]; ?>";
            let greeting = "";

            // If the current time is between morning and afternoon time...
            if(timeInHours >= morning && timeInHours < afternoon) {
                greeting = "Good morning, ";
            }

            // If the current time is between afternoon and evening time...
            else if(timeInHours >= afternoon && timeInHours < evening) {
                greeting = "Good afternoon, ";
            }

            // If the current time is between evening and night time...
            else if(timeInHours >= evening && timeInHours < night) {
                greeting = "Good evening, ";
            }

            // If the current time is between night and before morning time...
            else {
                greeting = "Hi ";
            }

            document.getElementById("greeting").textContent = greeting + fName;
        }

        /** 
         * Prints the date on the dashboard based on the user's local date.
         */
        function printDate() {
            const date = new Date();
            const options = {
                weekday:    "long",
                month:      "long",
                day:        "numeric"
            };
            const formattedDate = date.toLocaleDateString(undefined, options);

            document.getElementById("date").textContent = "Today is " + formattedDate;
        }

        // Calling the above functions
        printDate();
        greetUser();
    </script>
</body>
