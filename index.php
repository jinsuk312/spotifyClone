<!DOCTYPE html>
<?php
include("includes/config.php");

// logout manually by refreshing to homepage
// session_destroy();

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
    <link rel="stylesheet" type="text/css" src="assets/css/style.css">
</head>

<body>
    <div id="nowPlayingBarContainer">

        <div id="nowPlayingBar">

            <div id="nowPlayingLeft">

            </div>

            <div id="nowPlayingCenter">

            </div>

            <div id="nowPlayingRight">

            </div>




        </div>

    </div>
</body>

</html>