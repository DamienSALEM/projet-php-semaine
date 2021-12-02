<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../public/css/admin.css" />
    <title>Document</title>
</head>

<body>
    <?php include('navbar.php'); ?>

    <h1>Admin Dashboard</h1>
    <div class="row">
        <div class="col-3">
            <div class="container p-3 my-3 border">
                <p id="time"></p>
            </div>
        </div>
        <div class="col-4">
            <div class="container p-3 my-3 border">
                <p>Nombre de clients : 100

                </p>
            </div>
        </div>
        <div class="col-4">
            <div class="container p-3 my-3 border">
                <p>Bénéfice réalisé : 2773 €

                </p>
            </div>
        </div>
    </div>



    <div class="col">
        <h3>Table de reservation</h3>
        <table class="table table-bordered" id="reservations">
            <thead>
                <tr>
                    <th>Nom du client</th>
                    <th>Places</th>
                    <th>Date</th>
                    <th>Email</th>
                    <th>Enlever</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Dupont</td>
                    <td>2</td>
                    <td>9/12/2021</td>
                    <td>dupont@yahoo.com</td>
                    <td><button onclick="EffacerReservation()">Effacer</button></td>
                </tr>
                <tr>
                    <td>Ducon</td>
                    <td>12</td>
                    <td>19/12/2021</td>
                    <td>brrrrrrr6@papa.com</td>
                    <td><button onclick="EffacerReservation()">Effacer</button></td>
                </tr>
                <tr>
                    <td>Zemour</td>
                    <td>1</td>
                    <td>29/12/2021</td>
                    <td>futur-prez@elysee.fr</td>
                    <td><button onclick="EffacerReservation()">Effacer</button></td>
                </tr>
            </tbody>
        </table>
    </div>
    <hr class="solid">
    <div class="col">
        <h3>Table de produit</h3>
        <button type="rajouter" class="btn">Rajouter</button>
        <button type="modifier" class="btn">Modifier</button>
        <table class="table table-bordered" id="articles">
            <thead>
                <tr>
                    <th>Nom du produit</th>
                    <th>Stock</th>
                    <th>Prix</th>
                    <th>Image</th>
                    <th>Effacer</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Villageois</td>
                    <td>100</td>
                    <td>10€</td>
                    <td>villa.png</td>
                    <td><button onclick="EffacerArticle()">Effacer</button></td>
                </tr>
                <tr>
                    <td>Vodka rouge</td>
                    <td>20</td>
                    <td>20€</td>
                    <td>russia.png</td>
                    <td><button onclick="EffacerArticle()">Effacer</button></td>
                </tr>
                <tr>
                    <td>Coca</td>
                    <td>3000</td>
                    <td>4€</td>
                    <td>santa.png</td>
                    <td><button onclick="EffacerArticle()">Effacer</button></td>
                </tr>
            </tbody>
        </table>
    </div>
    <hr class="solid">

    <div class="col">
        <h3>Table de commandes</h3>
        <table class="table table-bordered" id="articles">
            <thead>
                <tr>
                    <th>ID de commande</th>
                    <th>ID du produit</th>
                    <th>ID client</th>
                    <th>Date</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>00000412</td>
                    <td>v-12341</td>
                    <td>4018512</td>
                    <td>4/1/2022</td>
                    <td>Verification</td>
                </tr>
                <tr>
                    <td>00000412</td>
                    <td>v-12341</td>
                    <td>4018512</td>
                    <td>15/12/2021</td>
                    <td>Traitement</td>
                </tr>
                <tr>
                    <td>00000123</td>
                    <td>v-20568;v-31245;v-76555</td>
                    <td>4018902</td>
                    <td>4/12/2021</td>
                    <td>Livraison</td>
                </tr>
                <tr>
                    <td>00000994</td>
                    <td>v-41254;99992</td>
                    <td>4015222</td>
                    <td>2/12/2022</td>
                    <td>Termine</td>
                </tr>
            </tbody>
        </table>
    </div>
    <script>
    var __basePath = './';
    </script>
    <script src="https://unpkg.com/@ag-grid-enterprise/all-modules@26.2.0/dist/ag-grid-enterprise.min.js">
    </script>
    <script src="../public/js/table.js">
    </script>

</body>
<script type="text/javascript" src="../public/js/admin.js"></script>

</html>