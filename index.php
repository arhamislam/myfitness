<!--
    Author: Arham Islam
    File Description: myfitness home page.
    Date Created: February 22, 2024
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
        <title>myfitness | Home</title>
    </head>
    <body>
        <header>
            <div class="headerImage">
                <!-- Navigation Bar -->
                <nav class="navbar navbar-expand-lg fixed-top py-0 navBackground">
                    <div class="container-fluid">
                        <a class="navbar-brand active" aria-current="page" href="#"><span class="text navHomeMy">my</span><span class="text navHomeFitness">fitness</span></a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                            <div class="navbar-nav ms-auto">
                                <a class="nav-link text navLinks" href="login.php">Sign In</a>
                                <a class="nav-link text navLinks" href="register.php">Sign Up</a>
                            </div>
                        </div>
                    </div>
                </nav>

                <!-- Logo & Strapline -->
                <div class="container-md">
                    <div class="row align-items-center headerLogo">
                        <div class="col-md text-center">
                            <span class="text logoMy">my</span><span class="text logoFitness">fitness</span><br>
                            <span class="text logoShortStrapline">Own Your Fitness Journey</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <main>
            <!-- About Us -->
            <section id="aboutUs">
                <div class="container-md">
                    <div class="row align-items-center aboutVP testing1">
                        <div class="col-md text-center">
                            <p class="display-3 mb-4 text">About Us</p>
                            <p class="fs-4">
                                At myfitness, we empower you to take control of your fitness journey. 
                                Our platform allows you to log your daily workouts, create personalized workout plans, 
                                and set achievable goals—all in one convenient place. 
                                Watch your fitness dreams come true by joining myfitness today.
                            </p>
                            <a class="btn btn-dark mt-5" href="register.php">Sign Up</a>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Features -->
            <!-- <section id="g">
                <div class="container-md px-5 text-center">
                    <div class="row testing2">
                        <p class="display-3 mb-4 text">Features</p>
                    </div>
                    <div class="row justify-content-between text-center">
                        <div class="col-md mx-5">
                            <img src="pictures/pexels-ann-poan-5797900.jpg" alt="" width="300" height="300" class="rounded-5 shadow">
                        </div>
                        <div class="col-md mx-5 p-4 rounded-5 shadow">2</div>
                        <div class="col-md mx-5 p-4 rounded-5 shadow">3</div>
                    </div>
                </div>
            </section> -->

            <!-- <section id="gg">
                <div class="container-md px-5 text-center">
                    <div class="row justify-content-between featuresHeadingVP testing2">
                        <p class="display-3 mb-5 text">Features</p>
                        <div class="col-md">
                            <img src="pictures/pexels-ann-poan-5797900.jpg" alt="Logging workouts" class="rounded-5 shadow featureSize">
                        </div>
                        <div class="col-md">
                            <img src="pictures/pexels-ann-poan-5797900.jpg" alt="Creating workout plans" class="rounded-5 shadow featureSize">
                        </div>
                        <div class="col-md">
                            <img src="pictures/pexels-ann-poan-5797900.jpg" alt="Setting goals" class="rounded-5 shadow featureSize">
                        </div>
                    </div>
                    <div class="row justify-content between featuresVP testing3">
                        <div class="col-md mt-5">This is a explanation on this feature. This is a explanation on this feature. This is a explanation on this feature.</div>
                        <div class="col-md mt-5">This is a explanation on this feature. This is a explanation on this feature. This is a explanation on this feature.</div>
                        <div class="col-md mt-5">This is a explanation on this feature. This is a explanation on this feature. This is a explanation on this feature.</div>
                    </div>
                </div>
            </section> -->

            <section id="features">
                <div class="container-md text-center">
                    <div class="row justify-content-between testing2">
                        <p class="display-3 mb-4 text">Features</p>
                        <div class="col-md">
                            <img src="pictures/pexels-ann-poan-5797900.jpg" alt="Logging workouts" class="rounded-5 shadow featureSize">
                            <p class="h3 my-4 text">Log Your Workouts</p>
                            <p class="px-5">
                                This is a explanation on this feature. 
                                This is a explanation on this feature. 
                                This is a explanation on this feature.
                            </p>
                        </div>
                        <div class="col-md">
                            <img src="pictures/pexels-ann-poan-5797900.jpg" alt="Creating workout plans" class="rounded-5 shadow featureSize">
                            <p class="h3 my-4 text">Create Workout Plans</p>
                            <p class="px-5">
                                This is a explanation on this feature. 
                                This is a explanation on this feature. 
                                This is a explanation on this feature.
                                <!-- talk about the wide variety of options on choosing a exercise from our database -->
                            </p>
                        </div>
                        <div class="col-md">
                            <img src="pictures/pexels-ann-poan-5797900.jpg" alt="Setting goals" class="rounded-5 shadow featureSize">
                            <p class="h3 my-4 text">Set Achievable Goals</p>
                            <p class="px-5">
                                This is a explanation on this feature. 
                                This is a explanation on this feature. 
                                This is a explanation on this feature.
                            </p>
                        </div>
                    </div>
                    <!-- <div class="row justify-content between testing3">
                        <div class="col-md mt-5">
                            <p class="h3 mb-4 text">Log Your Workouts</p>
                            <p>
                                This is a explanation on this feature. 
                                This is a explanation on this feature. 
                                This is a explanation on this feature.
                            </p>
                        </div>
                        <div class="col-md mt-5">
                            <p class="h3 mb-4 text">Create Workout Plans</p>
                            <p>
                                This is a explanation on this feature. 
                                This is a explanation on this feature. 
                                This is a explanation on this feature.
                            </p>
                        </div>
                        <div class="col-md mt-5">
                            <p class="h3 mb-4 text">Set Achievable Goals</p>
                            <p>
                                This is a explanation on this feature. 
                                This is a explanation on this feature. 
                                This is a explanation on this feature.
                            </p>
                        </div>
                    </div> -->
                </div>
            </section>
        </main>
        <footer></footer>

        <!-- jQuery & Bootstrap -->
        <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>
