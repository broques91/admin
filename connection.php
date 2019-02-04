<?php

// CONNECTION

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Connexion</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <header>
        <h1>Connexion</h1>
    </header>

    <div class="container text-center">
        <p>Bienvenue sur mon site, inscrivez-vous <a href="index.php">ici</a> pour plus d'informations.</p>

        <form method="post" action="index.php">
            <table>
                <tr>
                    <td>Email</td>
                    <td><input type="email" name="email" placeholder="Ex : example@gmail.com"></td>
                </tr>
                <tr>
                    <td>Mot de passe</td>
                    <td><input type="password" name="password" placeholder="Ex : ***** "></td>
                </tr>
            </table>
            <button type="submit">Connexion</button>
        </form> 
    </div>
</body>
</html>