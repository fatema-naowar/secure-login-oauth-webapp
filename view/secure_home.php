<?php

// Check if the user is logged in by checking the "username" session variable
if (!isset($_SESSION["username"])) {
    // If the user is not logged in, redirect to the login page
    header('Location: login.php');
    exit();
}

// Handle logout
if (isset($_GET['logout'])) {
    // Destroy the session when the user logs out
    session_destroy();
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html>
<body>

<h1>Welcome to Secure Home Page</h1>

<?php
// Echo session variables that were set on previous page
echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
echo "Favorite animal is " . $_SESSION["favanimal"] . ".<br>";
echo "Logged in user is " . $_SESSION["username"] . ".";
?>

<br><br>
<!-- Logout Link -->
<a href="?logout=true">Logout</a>

</body>
</html>
