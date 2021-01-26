<?php

    include 'database.php';
            
        $obj = new database('localhost', 'root', '', 'project1', 'utf8');
            
?>

<html>
    <head>
        <title>Homepage</title>
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

        <!--1 Boeket, 2 Bloemenwinkel -->
        <img src="https://lifebyrosie.nl/wp-content/uploads/2016/06/Veldboeket-samenstellen.jpg" alt="Boeket" width="444" height="500">
        <img src="https://cdn.worldofflowers.eu/media/photos/7522.jpg" alt="Bloemenwinkel" width="777" height="500">

    </body>
</html>