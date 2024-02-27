<?php
// Define variables for email and password
$email = $password = "";
// Define variables for error messages
$emailErr = $passwordErr = "";

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve and sanitize form data
    $email = htmlspecialchars($_POST["email"]);
    $password = htmlspecialchars($_POST["password"]);

    // Client-side validation
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Please enter a valid email address.";
    }

    if (empty($password) || strlen($password) < 6) {
        $passwordErr = "Password must be at least 6 characters long.";
    }

    // If both email and password are valid, perform server-side validation
    if (empty($emailErr) && empty($passwordErr)) {
        // Perform further authentication (e.g., checking against a database)
        // For demonstration purposes, assume authentication fails
        $authError = "Invalid email or password. Please try again.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">
          <div class="card-body">
            <h3 class="card-title text-center">Login</h3>
            <!-- Login Form -->
            <form id="loginForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
              <!-- Email Input -->
              <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control <?php if (!empty($emailErr)) echo 'is-invalid'; ?>" id="email" name="email" placeholder="Enter email" value="<?php echo $email; ?>">
                <!-- Invalid feedback message -->
                <div class="invalid-feedback"><?php echo $emailErr; ?></div>
              </div>
              <!-- Password Input -->
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control <?php if (!empty($passwordErr)) echo 'is-invalid'; ?>" id="password" name="password" placeholder="Password">
                <!-- Invalid feedback message -->
                <div class="invalid-feedback"><?php echo $passwordErr; ?></div>
              </div>
              <!-- Sign In Button -->
              <button type="submit" class="btn btn-primary btn-block">Sign In</button>
              <!-- Authentication error message -->
              <?php if (!empty($authError)): ?>
              <div class="alert alert-danger mt-3" role="alert">
                <?php echo $authError; ?>
              </div>
              <?php endif; ?>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS (optional) -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <!-- Client-side validation script -->
  <script>
    document.getElementById('loginForm').addEventListener('submit', function(event) {
      var emailField = document.getElementById('email');
      var passwordField = document.getElementById('password');
      var isValid = true;

      // Check email format
      if (!isValidEmail(emailField.value)) {
        emailField.classList.add('is-invalid');
        emailField.nextElementSibling.textContent = 'Please enter a valid email address.';
        isValid = false;
      } else {
        emailField.classList.remove('is-invalid');
        emailField.nextElementSibling.textContent = '';
      }

      // Check password length
      if (passwordField.value.length < 6) {
        passwordField.classList.add('is-invalid');
        passwordField.nextElementSibling.textContent = 'Password must be at least 6 characters long.';
        isValid = false;
      } else {
        passwordField.classList.remove('is-invalid');
        passwordField.nextElementSibling.textContent = '';
      }

      // Prevent form submission if validation fails
      if (!isValid) {
        event.preventDefault();
      }
    });

    // Email format validation function
    function isValidEmail(email) {
      var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      return emailRegex.test(email);
    }
  </script>
</body>
</html>
