

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $email = $_POST["email"]; // Make sure to collect email from the form
    $phoneNumber = $_POST["phoneNumber"];
    $userPassword = password_hash($_POST["password"], PASSWORD_DEFAULT); // Hash the password
    $birthday = $_POST["birthday"];
    $address = $_POST["address"];
    $postalCode = $_POST["postalCode"];
    $city = $_POST["city"];
    $country = $_POST["country"];

    // Validate form data (add more validation as needed)
    $errors = array();

    if (empty($firstName)) {
        $errors[] = "First Name is required";
    }
    if (empty($lastName)) {
        $errors[] = "Last Name is required";
    }
    if (empty($email)) {
        $errors[] = "Email is required";
    }
    // Additional validations...

    // If there are no errors, proceed to database insertion
    if (empty($errors)) {
        // Use actual database credentials and database name
        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = ""; // Default password for XAMPP is empty
        $database = "Web-Site-Georgia-log/reg"; // Updated to a valid database name format

        // Create a database connection
        $conn = new mysqli($host, $dbUsername, $dbPassword, $database);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Prepare an insert statement
        $sql = "INSERT INTO users (first_name, last_name, email, phone, password, birthday, address, postal_code, city, country) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);

        if ($stmt === false) {
            die("Error preparing the statement: " . $conn->error);
        }

        $stmt->bind_param("ssssssssss", $firstName, $lastName, $email, $phoneNumber, $userPassword, $birthday, $address, $postalCode, $city, $country);

        // Execute and check
        if ($stmt->execute()) {
            echo "Registration successful!";
        } else {
            echo "Error: " . $stmt->error;
        }

        // Close the statement and connection
        $stmt->close();
        $conn->close();
    } else {
        // Display errors
        foreach ($errors as $error) {
            echo $error . "<br>";
        }
    }
}
?>
