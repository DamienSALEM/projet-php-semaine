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
    </div>
    <script>
    var __basePath = './';
    </script>
    <script src="https://unpkg.com/@ag-grid-enterprise/all-modules@26.2.0/dist/ag-grid-enterprise.min.js">
    </script>

</body>
</html>
