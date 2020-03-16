<?php
    include("includes/classes/Account.php")
    include("includes/classes/Constants.php")
    $account = new Account();
    include("includes/handlers/register-handler.php")
    include("includes/handlers/login-handler.php")

    function getInputValue($name) {
        if(isset($_POST[$name])){
            echo $_POST[$name];
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to spotifyClone</title>
</head>
<body>
    <div id="inputContainer">
        <form id="loginForm" action="register.php" method="POST">
        <h2>Login to your account.</h2>
        <p>      
            <label for="loginUsername=">Username</label>  
            <input id="loginUsername" name="loginUsername" type="text" placeholder="e.g bartSimpson" required>  
        </p>
        <p>
            <label for="loginPassword">Password</label>
            <input id="loginPassword" name="loginPassword" placeholder="Your password" type="password" required>
        </p>
        <button type="submit" name="loginButton">Login</button>
        </form>

        <form id="registerForm" action="register.php" method="POST">
        <h2>Create your free account.</h2>
        <p>      
            <?php echo $account->getError(Constants::$userNameCharacters); ?>
            <label for="username=">Username</label>  
            <input id="username" name="username" type="text" placeholder="e.g bartSimpson" value="<?php getInputValue('username')?>" required>  
        </p>
        <p>    
            <?php echo $account->getError(Constants::$firstNameCharacters); ?>
            <label for="firstName=">First name</label>  
            <input id="firstName" name="firstName" type="text" placeholder="e.g Bart" value="<?php getInputValue('firstName')?>"required>  
        </p>
         <p>      
            <?php echo $account->getError(Constants::$lastNameCharacters); ?>
            <label for="lastName=">Last Name</label>  
            <input id="lastName" name="lastName" type="text" placeholder="e.g Simpson" value="<?php getInputValue('lastName')?>" required>  
        </p>
         <p>      
            <?php echo $account->getError(Constants::$emailsDoNotMatch); ?>
            <?php echo $account->getError(Constants::$emailInvalid); ?>

            <label for="email=">Email</label>  
            <input id="email" name="email" type="email" placeholder="e.g bart@gmail" required value="<?php getInputValue('email')?>">  
        </p>
         <p>     
            <?php echo $account->getError(Constants::$passwordsDoNotMatch); ?>
            <?php echo $account->getError(Constants::$passwordsNotAlphanumeric); ?>
            <?php echo $account->getError(Constants::$passwordCharacters); ?>
 
            <label for="email2=">Confirm Email</label>  
            <input id="email2" name="email2" type="email" placeholder="e.g bart@gmail.com" value="<?php getInputValue('email2')?>" required>  
        </p>
         <p>  
    
            <label for="password=">Password</label>  
            <input id="password" name="password" placeholder="Your password" type="password" required>  
        </p>
        <p>
            <label for="password2">Confirm password</label>
            <input id="password2" name="password2" type="password" placeholder="Your password" required>
        </p>
        
        <button type="submit" name="registerButton">Sign Up</button>
        </form>
    </div>
</body>
</html>