<?php
if (isset($_POST['loginButton'])) {
    $username = $_POST['loginUsername'];
    $password = $_POST['loginPassword'];

    $result = $account->login($username, $password);
    // im trying to be explicit
    if ($result == true) {
        header("Location: index.php");
    }
}
