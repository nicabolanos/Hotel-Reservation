<?php
session_start();
include 'database.php'; // Include your database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $query);
    $user = mysqli_fetch_assoc($result);

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id']; // Store user session
        $_SESSION['user_name'] = $user['name']; 
        header("Location: landing_page.php"); // Redirect to landing page
        exit();
    } else {
        echo "Invalid email or password!";
    }
}
?>
