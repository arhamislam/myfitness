<!--
    Author: Arham Islam
    File Description: myfitness login page.
    Date Created: February 23, 2024
-->

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">

        <!-- Bootstrap -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

        <link rel="stylesheet" href="styles.css">
        <link rel="icon" href="favicon.ico">
        <title>myfitness</title>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row align-items-center logo">
                <!-- Logo & Strapline -->
                <div class="col p-0 text-center">
                    <span class="text logoMy">my</span><span class="text logoFitness">fitness</span>
                    <p class="text logoShortStrapline">Own Your Fitness Journey</p>
                </div>

                <!-- Login Input -->
                <div class="col p-0 text-center">
                    <div class="rounded-5 shadow mx-auto p-4 loginBox">
                        <h2 class="mb-3 fw-bold">Sign In</h2>

                        <form action="" method="POST">
                            <!-- <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
                                <symbol id="info-fill" viewBox="0 0 16 16">
                                    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
                                </symbol>
                            </svg>
                            <div class="alert alert-danger align-items-center" role="alert">
                                <svg class="bi d-flex flex-shrink-0 me-2" role="img" aria-label="Info:"><use xlink:href="#info-fill"/></svg>
                                <div>Incorrect email or password.</div>
                            </div> -->
                            <div class="mb-3 text-start">
                                <label for="email">Email address</label>
                                <input type="email" class="form-control" id="email">
                            </div>
                            <div></div>
                            <div class="mb-3 text-start">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password">
                                <a href="#" class="forgotPassword"><small>Forgot password?</small></a>
                            </div>

                            <input type="submit" class="btn btn-dark mb-3 w-100 fw-bold" value="Sign In"></input>
                            <p>Don't have an account? <a href="#" class="fw-bold signUp">Sign up</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- jQuery & Bootstrap -->
        <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>
