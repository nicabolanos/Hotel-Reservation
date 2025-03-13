<?php
session_start();
include 'database.php'; // Include your database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash password for security

    $query = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";
    if (mysqli_query($conn, $query)) {
        $_SESSION['user_name'] = $name;
        header("Location: landing_page.php"); // Redirect to landing page
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
