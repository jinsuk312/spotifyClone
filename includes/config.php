<?php
// when a php page loads it sends to the server in PIECES
// with output buffering - when a page load it waits for all the data until you send to server
ob_start();
// timezone from php.net/manual/en/timezones.php
$timezone = date_default_timezone_set("America/Chicago");
// server name, username, password, mysql database name
$con = mysqli_connect("localhost", "admin", "admin", "slotify");
// handle error, the '.' handles string interpolation
if (mysqli_connect_errno()) {
    echo "Failed to connect: " . mysqli_connect_errno();
}
