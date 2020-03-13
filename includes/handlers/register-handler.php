<?php
    function sanitizeFormPassword($inputText) {
        // remove html elements from input
        $inputText = strip_tags($inputText);
        return $inputText
    }    
    function sanitizeFormUserName($inputText) {
        // remove html elements from input
        $inputText = strip_tags($inputText);
        // remove all places with empty spaces
        $inputText = str_replace(" ", "", $inputText)
        return $inputText
    }
    function sanitizeFormString($inputText) {
        // remove html elements from input
        $inputText = strip_tags($inputText);
        // remove all places with empty spaces
        $inputText = str_replace(" ", "", $inputText)
        // uppercase first character(make all characters lower(inputText))
        $inputText = ucFirst(strtolower($inputText))
    }
    
    
    // register button was pressed 
    if(isset($_POST['registerButton'])){
        $username = sanitizeFormUserName($_POST['username']);
        $firstName = sanitizeFormString($_POST['firstName']);
        $lastName = sanitizeFormString($_POST['lastName']);
        $email = sanitizeFormString($_POST['email']);
        $email2 = sanitizeFormString($_POST['email2']);
        $password = sanitizeFormPassword($_POST['password']);
        $password2 = sanitizeFormPassword($_POST['password2']);

        $account = new Account();
    }
?>