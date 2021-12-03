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
            <input type="email" id="email" name="email" placeholder="dupont@yahoo.com" minlength="5" required>
            <label for="pass">Mot de passe</label>
            <input type="password" id="pass" name="password" placeholder="Mot de Passe" maxlength="30" required>
            <p>Vous etes pas encore inscrit ? <a href="register.php">Inscrivez vous ici</a></p>
            <input type="submit" value="login" class="btn">
        </form>
    </div>
</body>

</html>