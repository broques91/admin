<?php
// Projet PHP : Un espace membre

// INSCRIPTION

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Projet PHP : Espace membre</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <h1>Inscription</h1>
    <p>Bienvenue sur mon site, inscrivez-vous pour plus d'informations.</p>
    <p>Déjà inscrit ? <a href="Connexion.php">Connectez-vous</a>

    <form method="post" action="index.php">
        <table>
            <tr>
                <td>Pseudo</td>
                <td><input type="text" name="pseudo" placeholder="Ex : Bastien"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="email" placeholder="Ex : example@gmail.com"></td>
            </tr>
            <tr>
                <td>Mot de passe</td>
                <td><input type="password" name="password" placeholder="Ex : ***** "></td>
            </tr>
            <tr>
                <td>Confirmation du mot de passe</td>
                <td><input type="password" name="password_confirm" placeholder="Ex : *****"></td>
            </tr>
        </table>
        <button type="submit">Inscription</button>
    </form> 
</body>
</html>