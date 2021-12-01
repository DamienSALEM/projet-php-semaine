<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link
			href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
			rel="stylesheet"
			integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
			crossorigin="anonymous"
		/>
		<link rel="stylesheet" href="../public/css/panier.css" />
		<title>Panier</title>
	</head>
	<body>
		<div class="container">
			<div class="panierVide">
				<div class="row">
					<div class="col">
						<h1>Votre panier</h1>
						<!--Cas le panier est vide-->

						<p>Votre panier est vide, n'hésitez pas à consulter nos produits</p>
						<a href="http://www.google.com/">
							<input type="button" value="Nos produits" />
						</a>
					</div>
				</div>
			</div>
			<div class="panierPlein">
				<div class="row">
					<div class="col">
						<h1>Votre panier</h1>

						<div class="produit">

            </div>

						<input type="button" value="Commander" />
					</div>
				</div>
			</div>
		</div>
		<script
			src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
			integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
			crossorigin="anonymous"
		></script>
	</body>
</html>
