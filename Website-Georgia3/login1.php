
<?php
require 'php/config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $email = $_POST["email"];
    $formPassword = $_POST["password"]; // Rename this variable to avoid conflict

    // Validate form data (you can add more validation based on your requirements)
    $errors = array();

    if (empty($email)) {
        $errors[] = "Email is required";
    }

    if (empty($formPassword)) {
        $errors[] = "Password is required";
    }

    if (empty($errors)) {
        $conn = dbConnect(); // Establish a connection using the dbConnect function

        // Query to check if the user exists
        $stmt = $conn->prepare("SELECT password FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows == 1) {
            $stmt->bind_result($hashedPassword);
            $stmt->fetch();
            // Verify password
            if (password_verify($formPassword, $hashedPassword)) {
                echo "Login successful!";
                // Here, you would typically set session variables and redirect to another page
            } else {
                echo "Invalid email or password";
            }
        } else {
            echo "Invalid email or password";
        }

        $stmt->close();
        $conn->close();
    } else {
        foreach ($errors as $error) {
            echo $error . "<br>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="icon" type="image/png" href="images/logo-modified.png" >
    <link rel="icon" type="image/x-icon" href="images/logo-modified.ico">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:ital@1&family=Taviraj:wght@300&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
</head>
<body>

    <section class="reg-section">
        <div class="header2">
             <h1><a href="index.php">Style in Georgia</a></h1>
             <hr class="full-width-line">

             <div class="email-reg">
             <h2>Enter your Email</h2>
             <!--<form action="/submit-your-email" method="post">-->
             <form action="php/login.php" method="post">
                <div class="form-group">
                    <input type="email" id="email" name="email" placeholder="E-mail address" required>
                </div>
                <div class="form-group">
                    <!-- Add a password field -->
                    <input type="password" id="password" name="password" placeholder="Password" required>
                  </div>
                
                <div class="form-group">
                    <a href="detail-registration.html"><input  type="submit" value="Next"></a>
                </div>
            </form>
            <div class="account-creation-link">
                <p>Don't have an account? <a href="detail-registration.php">Sign up</a></p>
               
              </div>
              <div class="forgot-pass">
              <p>Forgot your password? <a href="reset-password.php">Reset here</a></p>
               </div>
   
               

            </div>
        </div>
    </section>
    
</body>
</html>


