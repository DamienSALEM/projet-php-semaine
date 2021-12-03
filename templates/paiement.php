<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../public/css/paiement.css" />
    <title>Paiment</title>
</head>

<body>
    <div class="container">
        <form action="" method="post">
            <h3>Paiement</h3>
            <div class="icon-container">
                <input type="radio" id="huey" checked>
                <i class="fa fa-cc-visa"></i>
                <input type="radio" id="dewey">
                <i class="fa fa-cc-mastercard"></i>
            </div>
            <label for="cname">Nom sur la carte</label>
            <input type="text" id="cname" name="cardname" placeholder="Carl Dupont" pattern="[a-zA-Z]+" minlength="5"
                required>
            <label for="ccnum">Numero de carte bancaire</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444" pattern="[0-9]+"
                maxlength="16" required>
            <div class="row">
                <div class="col-50">
                    <label for="expyear">Date d'expiration</label>
                    <input type="text" id="expyear" name="expyear" placeholder="10/24" maxlenght="5"
                        pattern="^(0[1-9]|1[0-2])\/?([0-9]{4}|[0-9]{2})$" required>
                </div>
                <div class="col-50">
                    <label for="cvv">CVV</label>
                    <input type="text" id="cvv" name="cvv" maxlength="3" placeholder="352" pattern="[0-9]+" required>
                </div>
            </div>
            <input type="submit" value="Payer la commande" class="btn">
        </form>
    </div>



</body>

</html>