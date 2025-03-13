<?php
session_start();
var_dump($_SESSION);
if (!isset($_SESSION["username"])) {
    header("Location: login.html"); // Redirect to login if not logged in
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex justify-center items-center h-screen bg-gray-100">
    <div class="text-center bg-white p-10 rounded shadow-lg">
        <h1 class="text-2xl font-bold">Welcome, <?php echo $_SESSION["username"]; ?>!</h1>
        <p class="mt-4">What would you like to do?</p>
        <div class="mt-6 space-x-4">
            <a href="reserve.html" class="bg-blue-500 text-white px-4 py-2 rounded">Book a Room</a>
            <a href="logout.php" class="bg-red-500 text-white px-4 py-2 rounded">Logout</a>
        </div>
    </div>
</body>
</html>
