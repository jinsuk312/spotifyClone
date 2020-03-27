<?php
// with output buffering - when a page load it waits for all the data until you send to server instead of sending by pieces
ob_start();
// save variables across pages with session variables
session_start();
// php.net/manual/en/timezones.php
$timezone = date_default_timezone_set("America/Chicago");
// server name, username, password, mysql database name
$con = mysqli_connect("localhost", "admin", "admin", "slotify");

if (mysqli_connect_errno()) {
    echo "Failed to connect: " . mysqli_connect_errno();
}
