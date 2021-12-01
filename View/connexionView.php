<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/paiement.css" />
    <title>Connexion</title>
</head>

<body>
    <div class="container">
        <form action="" method="POST">
            <h3>Connexion</h3>
            <label for="uuser">Nom de l'utilisateur</label>
            <input type="text" id="user" name="username" placeholder="Nom d'utilisateur" pattern="[a-zA-Z0-9]+"
                minlength="5" required>
            <label for="pass">Mot de passe</label>
            <input type="text" id="pass" name="password" placeholder="Mot de Passe" pattern="[0-9]+" maxlength="30"
                required>
            <div class="row">
                <!-- <div class="col-50">
                    <div class="row">
                        <input type="radio" class="retard-btn" id="rappel"><label for="rappel">Se rappeler de
                            moi</label>
                    </div>
                    <div class="col-50">
                        <p>Mot de Passe oublie? Contacter le restaurant.</p>
                    </div>
                </div> -->
            </div>
            <input type="submit" value="Se Connecter" class="btn">
        </form>
    </div>

</body>

</html>