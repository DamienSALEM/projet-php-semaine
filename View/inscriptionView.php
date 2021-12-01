<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/paiement.css" />
    <title>Inscription</title>
</head>

<body>
    <div class="container">
        <form action="" method="POST">
            <h3>Inscription</h3>
            <label for="create-user">Nom de l'utilisateur</label>
            <input type="text" id="user" name="username" pattern="[a-zA-Z0-9]+" minlength="5" required>
            <label for="create-pass">Mot de passe</label>
            <input type="text" id="pass" name="password" placeholder="Avec des symboles et chiffres" maxlength="30"
                required>
            <label for="create-pass">Confirmer Mot de passe</label>
            <input type="text" id="re-pass" name="re-password" placeholder="Avec des symboles et chiffres"
                maxlength="30" required>
            <label for="create-pass">Adresse Mail</label>
            <input type="text" id="pass" name="password" placeholder="dupont@mail.fr" maxlength="30" required>
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
            <input type="submit" value="S'inscrire" class="btn">
        </form>
    </div>

</body>

</html>