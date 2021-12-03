<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/paiement.css" />
    <title>Inscription</title>
</head>

<body>
    <div class="container">
        <form action="" method="POST" onsubmit="verif()">
            <h3 class="titreInscription">Inscription</h3>
            <label for="create-user">Nom</label>
            <input type="text" id="nom" name="lastname" placeholder="Xavier" pattern="[a-zA-Z]+" minlength="2" required>
            <label for="create-user">Prénom</label>
            <input type="text" id="prenom" name="firstname" placeholder="Charles" pattern="[a-zA-Z]+" minlength="2"
                required>
            <label for="email">Adresse Mail</label>
            <input type="email" id="email" name="email" placeholder="c.xavier@mail.fr" maxlength="50" required>
            <label for="create-pass">Mot de passe</label>
            <input type="password" id="pass" name="password" placeholder="Avec des chiffres"
                pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$" maxlength="30" required>
            <label for="create-pass">Confirmer Mot de passe</label>
            <input id="re-pass" type="password" maxlength="30" required>
            <div class="row">
                <p>
                    Vous êtes déja un membre ? <a href="login.php">Connectez vous</a>
                </p>

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
            <input name="register" type="submit" value="S'inscrire" class="btn">
        </form>
    </div>
    <script src="public\js\verificationMotDePasse.js"></script>
</body>

</html>