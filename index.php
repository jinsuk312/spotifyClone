<!DOCTYPE html>
<?php
include("includes/config.php");
// check to see if session variable is set (if user is logged in)
if (isset($_SESSION['userLoggedIn'])) {
    $userLoggedIn = $_SESSION['userLoggedIn'];
} else {
    header("Location: register.php");
}
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to spotifyClone</title>
</head>

<body>
    Hello!
</body>

</html>