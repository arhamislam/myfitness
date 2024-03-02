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
                <nav class="navbar navbar-expand-lg fixed-top py-0 purpleBackground">
                    <div class="container-fluid">
                        <a class="navbar-brand active" aria-current="page" href="#"><span class="text navHomeMy">my</span><span class="text navHomeFitness">fitness</span></a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                            <div class="navbar-nav ms-auto">
                                <a class="nav-link text whiteText" href="login.php">Sign In</a>
                                <a class="nav-link text whiteText" href="register.php">Sign Up</a>
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
            <section id="about">
                <div class="container-md">
                    <div class="row align-items-center sectionVP">
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
            <section id="features">
                <div class="container-md">
                    <div class="row justify-content-between text-center fs-4">
                        <p class="display-3 mb-5 text">Features</p>
                        <div class="col-md mb-5">
                            <img src="pictures/pexels-sound-on-3756879.jpg" alt="Logging workouts" class="rounded-5 shadow featureSize">
                            <p class="h3 my-4 text">Log Your Workouts</p>
                            <p class="px-5">
                                While you're having your gym session, log the exercises, repetitions, sets, 
                                and weights you've completed so that you can track your progress.
                            </p>
                        </div>
                        <div class="col-md mb-5">
                            <img src="pictures/pexels-karolina-grabowska-4467735.jpg" alt="Creating workout plans" class="rounded-5 shadow featureSize">
                            <p class="h3 my-4 text">Create Workout Plans</p>
                            <p class="px-5">
                                Create a customized workout plan using the exercises available in our database 
                                to be consistent throughout your journey.
                            </p>
                        </div>
                        <div class="col-md mb-5">
                            <img src="pictures/pexels-daniel-reche-1556654.jpg" alt="Setting goals" class="rounded-5 shadow featureSize">
                            <p class="h3 my-4 text">Set Achievable Goals</p>
                            <p class="px-5">
                                Set fitness goals that are personalized towards you. You could set a goal to increase strength or reach a specific milestone.
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Contact Us -->
            <section id="contact">
                <br><br><br><br><br><br><br><br>
                <div class="container-md">
                    <div class="row">
                        <p class="display-3 mb-4 text-center text">Contact Us</p>
                        <div class="col-md">
                            <p class="px-5 fs-4 text-center">
                                Please email us at contact@myfitness.ca if you have any questions, concerns, or feedback!
                            </p>
                        </div>
                        <div class="col-md">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Name <span class="redText">*</span></label>
                                <input type="input" class="form-control" id="exampleFormControlInput1">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput2" class="form-label">Email address <span class="redText">*</span></label>
                                <input type="email" class="form-control" id="exampleFormControlInput2">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Message <span class="redText">*</span></label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
                            </div>
                            <div class="mb-3">
                                <input type="submit" class="btn btn-dark mb-3 w-100 fw-bold" value="Send"></input>
                            </div>
                        </div>
                    </div>
                </div>
                <br><br><br><br><br><br><br><br>
            </section>
        </main>
        <footer>
            <div class="container-fluid py-4 purpleBackground">
                <div class="row text-center">
                    <div class="col-md-4 mb-3">
                        <p class="text blackText">Links</p>
                        <a href="#about" class="text-decoration-none whiteText">About</a><br>
                        <a href="#features" class="text-decoration-none whiteText">Features</a><br>
                        <a href="#contact" class="text-decoration-none whiteText">Contact Us</a><br>
                    </div>
                    <div class="col-md-4 mb-3">
                        <p class="text blackText">Legal</p>
                        <p class="whiteText">Accessibility</p>
                        <p class="whiteText">Cookie Policy</p>
                        <p class="whiteText">Privacy Policy</p>
                        <p class="whiteText">Terms of Service</p>
                    </div>
                    <div class="col-md-4 mb-3">
                        <p class="text blackText">Social</p>
                        <p class="whiteText">Instagram</p>
                        <p class="whiteText">X</p>
                    </div>
                </div>
                <div class="row mt-4 text-center">
                    <div class="col">
                        <p class="small whiteText">© 2024 myfitness. All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </footer>

        <!-- jQuery & Bootstrap -->
        <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>
