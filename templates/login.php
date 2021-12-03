<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/paiement.css" />
    <title>Connexion</title>
</head>

<body>
    <div class="container">
        <form action="" method="POST">
            <h3>Connexion</h3>
            <label for="user">Adresse email</label>
            <input type="email" id="email" name="email" placeholder="dupont@yahoo.com" pattern="[a-zA-Z0-9]+"
                minlength="5" required>
            <label for="pass">Mot de passe</label>
            <input type="text" id="pass" name="password" type="hidden" placeholder="Mot de Passe" pattern="[0-9]+"
                maxlength="30" required>
            <input type="submit" value="login" class="btn">
        </form>
        <a href="?page=register"><div class="redirectionInscription">Pas de compte ? <br>S'inscrire</div></a>
    </div>
</body>
</html>
