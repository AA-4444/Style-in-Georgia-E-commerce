<?php
require 'php/config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $phoneNumber = $_POST["phoneNumber"];
    $userPassword = password_hash($_POST["password"], PASSWORD_DEFAULT); // Hash the password
    $birthday = $_POST["birthday"];
    $address = $_POST["address"];
    $postalCode = $_POST["postalCode"];
    $city = $_POST["city"];
    $country = $_POST["country"]; // Collecting new field
    $email = $_POST["email"]; // Make sure to add the 'email' field to your form

    // Validate form data (you can add more validation based on your requirements)
    $errors = array();

    if (empty($firstName)) { $errors[] = "First Name is required"; }
    // ... additional validations ...

    if (empty($errors)) {
        $conn = dbConnect();

        // Insert data into the database using prepared statements
        $stmt = $conn->prepare("INSERT INTO users (first_name, last_name, phone, password, birthday, address, postal_code, city, country, email) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssssssss", $firstName, $lastName, $phoneNumber, $userPassword, $birthday, $address, $postalCode, $city, $country, $email);

        if ($stmt->execute()) {
            echo "Registration successful!";
            // Redirect to login page or display success message
        } else {
            echo "Error: " . $stmt->error;
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
    <link rel="stylesheet" href="detregstyle.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> <!-- Font Awesome CDN -->
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

    <section class="freg-section">
        <div class="header2">
            <h1><a href="index.php">Style in Georgia</a></h1>
            <hr class="full-width-line">
            <div class="detail-reg">
              <h1>Create your personal account</h1>
              <p>You are about to create your account. This will allow us<br>
                   offer you a personalized and tailored experience like<br>
                    online and in store, to provide you with products, services<br>
                     and information you request from us, communicate<br>
                      with you and provide you with access to exclusive services<br>
                       and benefits reserved for registered members.</p>
            </div>
            <div class="detail-form">
            <form action="php/registration.php" method="post">
                <div class="form-group">
                
                  <input placeholder="First Name" type="text" id="firstName" name="firstName">
                </div>
            
                <div class="form-group">
                
                  <input   placeholder="Last Name" type="text" id="lastName" name="lastName">
                </div>
            
                <div class="form-group">
                 
                  <input  placeholder="Phone" type="tel" id="phoneNumber" name="phoneNumber">
                </div>

                <div class="form-group">
                <input placeholder="Email" type="email" id="email" name="email">
               </div>

            
                <div class="form-group">
                  
                    <div class="password-input">
                        <input placeholder="Password" type="password" id="password" name="password">
                       <!--  <span class="toggle-password">
                            <button class="btn-show" type="button" id="togglePassword">
                              <i class="fas fa-eye-slash"></i> 
                            </button>
                          </span> -->
                        
                      </div>
                </div>
            
                <div class="form-group">
               
                  <input type="date" id="birthday" name="birthday">
                </div>

                <div class="form-group">
               
                    <input placeholder="Your address" type="address" id="address" name="address">
                  </div>

                  <div class="form-group">
                    <input placeholder="Postal Code" type="text" id="postalCode" name="postalCode">
                </div>
                
                <div class="form-group">
                    <input placeholder="City" type="text" id="city" name="city">
                </div>

                <div class="form-group">
    <input placeholder="Country" type="text" id="country" name="country">
</div>
                
            
                <input class="sbm" type="submit" value="Submit">
              </form>
            </div>
        </div>
    </section>
</body>
</html>


<script>
    const togglePassword = document.getElementById('togglePassword');
    const passwordField = document.getElementById('password');

    togglePassword.addEventListener('click', function() {
      const type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
      passwordField.setAttribute('type', type);
      togglePassword.querySelector('i').classList.toggle('fa-eye-slash');
      togglePassword.querySelector('i').classList.toggle('fa-eye');
    });
  </script>