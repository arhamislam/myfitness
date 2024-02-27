<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">

<!-- Bootstrap -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<link rel="stylesheet" href="styles.css">
<link rel="icon" href="favicon.ico">
<title>myfitness | Home</title>
<style>
/* Center the logo vertically and horizontally */
.container-md.testing {
    height: 100vh; /* Full height of the viewport */
    display: flex;
    justify-content: center; /* Center horizontally */
    align-items: center; /* Center vertically */
}

/* Style for the logo */
.text.logoMy, .text.logoFitness {
    font-size: 3rem; /* Adjust size as needed */
}

.text.logoShortStrapline {
    font-size: 1.5rem; /* Adjust size as needed */
    color: #777; /* Adjust color as needed */
}
</style>
</head>
<body>

<header>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg purple">
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
</header>

<!-- Logo -->
<div class="container-md testing">
    <div class="row text-center">
        <div class="col">
            <span class="text logoMy">my</span><span class="text logoFitness">fitness</span><br>
            <span class="text logoShortStrapline">Own Your Fitness Journey</span>
        </div>
    </div>
</div>

 <!-- jQuery & Bootstrap -->
 <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
