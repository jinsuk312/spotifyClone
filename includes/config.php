<?php
    // output buffering - when a page load it waits for all the data until you send to server
    ob_start();
    $timezone = date_default_timezone_set("America/Chicago");
    // connection variable
    // server name, username, password, database name
    $con = mysqli_connect("localhost", "root", "", "slotify")

    if(mysqli_connect_errno()){
        echo "Failed to connect: " . mysqli_connect_errno();
    }
?>