<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Dummy user registration logic (Replace this with a database)
    $_SESSION["username"] = $username;
    header("Location: landing.html"); // Redirect to landing page
    exit();
}
?>
