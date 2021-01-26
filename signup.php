<?php

include 'database.php';

?>

<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <!-- Sign up form -->
        <form action="klant.php" method="post">
            <input type="text" name="fname" placeholder="Voornaam" value="<?php echo isset($_POST["fname"]) ? htmlentities($_POST["fname"]) : ''; ?>" required /><br>
            <input type="text" name="mname" placeholder="Tussenvoegsel" value="<?php echo isset($_POST["mname"]) ? htmlentities($_POST["mname"]) : ''; ?>"/><br>
            <input type="text" name="lname" placeholder="Achternaam" value="<?php echo isset($_POST["lname"]) ? htmlentities($_POST["lname"]) : ''; ?>" required /><br>
            <input type="email" name="email" placeholder="Email" value="<?php echo isset($_POST["email"]) ? htmlentities($_POST["email"]) : ''; ?>" required /><br>
            <input type="text" name="uname" placeholder="Gebruikersnaam" value="<?php echo isset($_POST["uname"]) ? htmlentities($_POST["uname"]) : ''; ?>" required /><br>
            <input type="password" name="pwd" placeholder="Wachtwoord" required /><br>
            <input type="password" name="cpwd" placeholder="Herhaal wachtwoord" required /><br>

            <input type="submit" name="submit" value="Sign up"/>
        </form>

    </body>
</html>
