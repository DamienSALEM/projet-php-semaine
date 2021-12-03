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
    <link rel="stylesheet" href="public/css/admin.css" />
    <title>Document</title>
</head>

<body>
<<<<<<< HEAD
=======

>>>>>>> 6cb77c77819f2ba680b0f1004a7b29a8b4579106
    <h1>Admin Dashboard</h1>
    <div class="col">
        <h3>Table de reservation</h3>
        <table class="table table-bordered" id="reservations">
            <thead>
                <tr>
                    <th>Id de l'utilisateur</th>
                    <th>Places</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($booking as $book) {
                    echo "
                        <tr>
                            <td>$book->user_id</td>
                            <td>$book->nb_people</td>
                            <td>$book->date_time</td>
                        </tr>
                    ";
                    }
                ?>
            </tbody>
        </table>
    </div>
    <hr class="solid">
    <div class="col">
        <h3>Table de produit</h3>
>>>>>>> 6cb77c77819f2ba680b0f1004a7b29a8b4579106
        <table class="table table-bordered" id="articles">
            <thead>
                <tr>
                    <th>Nom du produit</th>
                    <th>Stock</th>
                    <th>Prix</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($products as $product) {
                    echo "
                        <tr>
                            <td>$product->name</td>
                            <td>$product->stock</td>
                            <td>$product->price</td>
                        </tr>
                    ";
                    }
                ?>
            </tbody>
        </table>
        <button type="rajouter" class="btn">Rajouter</button>
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
                    <td>Termine</td>
                </tr>
                <tr>
                    <td>00000994</td>
                    <td>v-41254;99992</td>
                    <td>4015222</td>
                    <td>2/12/2022</td>
                    <td>Termine</td>
                </tr>
>>>>>>> 6cb77c77819f2ba680b0f1004a7b29a8b4579106
            </tbody>
        </table>
    </div>
    <script>
    var __basePath = './';
    </script>
    <script src="https://unpkg.com/@ag-grid-enterprise/all-modules@26.2.0/dist/ag-grid-enterprise.min.js">
    </script>
<<<<<<< HEAD

</body>
</html>
=======
    <script src="public/js/table.js">
    </script>

</body>
<script type="text/javascript" src="public/js/admin.js"></script>

</html>
>>>>>>> 6cb77c77819f2ba680b0f1004a7b29a8b4579106
