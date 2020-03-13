<?php
    class Account {
        private $errorArray;

        public function __construct(){
            $this->errorArrray = array();
        }
        public function register($un, $fn, $ln, $em, $em2, $pw, $pw2) {
            $this->validateUsername($un);
            $this->validateFirstName($fn);
            $this->validateLastName($ln);
            $this->validateEmails($em, $em2);
            $this->validatePasswords($pw, $pw2);
        }
        private function validateUsername($un){
            if(strlen($un) > 25 || strlen($un) < 5){
                array_push($this->errorArray, "Your username must be between 5-25 characters.");
                return;
            }
        }
        private function validateFirstName($fn){
            if(strlen($fn) > 25 || strlen($fn) < 2){
                array_push($this->errorArray, "Your first name must be between 2-25 characters.");
                return;
            }
        }
        private function validateLastName($ln){
            if(strlen($ln) > 25 || strlen($ln) < 2){
                array_push($this->errorArray, "Your last name must be between 2-25 characters.");
                return;
            }
        }
        private function validateEmails($em, $em2){
            if($em != $em2){
              array_push($this->errorArray, "Your emails do not match.");
                return;  
            }
            // makes sure the email has ".com" part
            if(!filter_var($em, FILTER_VALIDATE_EMAIL)){
                array_push($this->errorArray, "Email is invalid.");
                return;
            }
        }
        private function validatePasswords($pw, $pw2){
            if($pw != $pw2){
                array_push($this->errorArray, "Your passwords do not match.");
                return; 
            }
            // if password is not in this range, do not accept
            if(preg_match('/[^A-Za-z0-9]/', $pw)){
                array_push($this->errorArray, "Your password can only contain numbers and letters.");
                return; 
            }
            if(strlen($pw) > 30 || strlen($pw) < 5){
                array_push($this->errorArray, "Your password must be between 5-30 characters.");
                return;
            }
        }
    }
?>