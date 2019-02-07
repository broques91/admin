<?php
    require('src/database.php');

    if(isset($_POST['pseudo']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST[ 'password_confirm'])){
        
        //VARIABLES
        $pseudo        = $_POST['pseudo'];
        $email         = $_POST['email'];
        $password      = $_POST['password'];
        $pass_confirm  = $_POST['password_confirm'];

        //TEST SI PASSWORD = PASSWORD_CONFIRM
        if($password != $pass_confirm){
            header('Location: index.php?error=1&pass=1');
        }

        //TEST SI EMAIL UTILISE
        $req = $db->prepare('SELECT count(*) as numberEmail FROM users WHERE email = ?');
        $req->execute(array($email));
        while($email_verification = $req->fetch()){
            if($email_verification['numberEmail'] != 0){
                header('Location: index.php?error=1&email=1');
            }
        }
    }
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
    <header>
        <h1>Inscription</h1>
    </header>

    <div class="container">
        <div class="text-center">
            <p>Bienvenue sur mon site, inscrivez-vous pour plus d'informations.</p>
            <p>Déjà inscrit ? <a href="connection.php">Connectez-vous</a>
            <?php
                if(isset($_GET['error'])){
                    if(isset($_GET['pass'])){
                        echo '<p id="error"> Les mots de passe ne sont pas identiques. </p>';
                    }elseif(isset($_GET['email'])){
                        echo '<p id="error"> Adresse email déjà utilisée. </p>';
                    }
                }
            ?>
        </div>

        <div class="text-center">
            <form method="post" action="index.php">
                <table>
                    <tr>
                        <td>Pseudo</td>
                        <td><input type="text" name="pseudo" placeholder="Ex : Bastien" required></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><input type="email" name="email" placeholder="Ex : example@gmail.com" required></td>
                    </tr>
                    <tr>
                        <td>Mot de passe</td>
                        <td><input type="password" name="password" placeholder="Ex : ***** " required></td>
                    </tr>
                    <tr>
                        <td>Confirmation du mot de passe</td>
                        <td><input type="password" name="password_confirm" placeholder="Ex : *****" required></td>
                    </tr>
                </table>
                <div class="text-center">
                    <button type="submit">Inscription</button>
                </div>
            </form> 
        </div>
    </div>
</body>
</html>