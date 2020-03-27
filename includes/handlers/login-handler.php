<?php
if (isset($_POST['loginButton'])) {
    $username = $_POST['loginUsername'];
    $password = $_POST['loginPassword'];

    $result = $account->login($username, $password);
    // im trying to be explicit i know i can - use if($result) 
    if ($result == true) {
        // session variable
        $_SESSION['userLoggedIn'] = $username;
        header("Location: index.php");
    }
}
