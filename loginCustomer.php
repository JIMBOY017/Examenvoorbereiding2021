<?php

    include 'database.php';
    
?>

<html>
    <head>
        <title>Login Customer</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <!-- Menu -->
        <ul>
            <li><a href="loginEmployee.php">Inloggen medewerkers</a></li>
            <li><a href="contact.php">Contactpagina</a></li>
            <li><a href="loginCustomer.php">Inloggen klanten</a></li>
            <li><a href="signup.php">Registreren</a></li>
        </ul>

        <form action="loginCustomer.php" method="post">
            Username: <input type="text" name="uname" placeholder="Username" required/><br>
            Password: <input type="password" name="pwd" placeholder="Password" required/><br>
            <input type="submit" name='submit'><br><br>
            <a href="signup.php">Create an Account</a><br>
            <a href="lostpwd.php">Lost password?</a>
        </form>

    </body>
</html>