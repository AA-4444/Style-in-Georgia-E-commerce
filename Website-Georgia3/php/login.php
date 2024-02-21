<?php
session_start(); // Start the session at the very beginning

//require 'php/config.php'; // Include your config file to get database connection details
require '/Applications/XAMPP/xamppfiles/htdocs/Website-Georgia3/php/config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $errors = [];

    if (empty($email)) {
        $errors[] = "Email is required";
    }

    if (empty($password)) {
        $errors[] = "Password is required";
    }

    if (!$errors) {
        $conn = dbConnect(); // Use your dbConnect function from config.php

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT id, first_name, last_name, password FROM users WHERE email = ?";
        if ($stmt = $conn->prepare($sql)) {
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows == 1) {
                $user = $result->fetch_assoc();
                if (password_verify($password, $user['password'])) {
                    // Set session variables for logged-in user
                    $_SESSION['user_id'] = $user['id'];
                    $_SESSION['first_name'] = $user['first_name'];
                    $_SESSION['last_name'] = $user['last_name'];
                    $_SESSION['logged_in'] = true;
                    
                    // Redirect to a new page upon successful login
                    header("Location: user_profile.php"); // Replace 'welcome.php' with the path to your landing page
                    exit();
                } else {
                    $errors[] = "Invalid email or password";
                }
            } else {
                $errors[] = "Invalid email or password";
            }
            $stmt->close();
        } else {
            $errors[] = "Error preparing the statement: " . $conn->error;
        }
        $conn->close();
    }

    if ($errors) {
        foreach ($errors as $error) {
            echo $error . "<br>";
        }
    }
}
?>
