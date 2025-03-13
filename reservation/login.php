<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Dummy login validation (Replace this with a database check)
    if ($username === "admin" && $password === "password") {
        $_SESSION["username"] = $username;
        header("Location: landing.html"); // Redirect after login
        exit();
    } else {
        echo "Invalid login credentials!";
    }
}
?>
