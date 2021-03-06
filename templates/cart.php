<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
    crossorigin="anonymous"
  />
		<link rel="stylesheet" href="public/css/Panier.css" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Panier</title>
	</head>
	<body>
		<h1 class="titrePanier">Votre panier</h1>
		<div class="container blockProduit">
				<div class="element row">
					<div class="col-3"><img src="public/assets/bouteille.jpg" width="100" height="100" class="imageProduit"/></div>
						<div class="col-3"><p><i>Domaine Leroy Chambertin Grand Cru</i></p></div>
						<div class="col-3"><p class="prix">855€</p></div>
						<div class="col-3"><input type="button" value="Supprimer" class="bouttonSupprimer"></div>
				</div>
        <div class="element row">
					<div class="col-3"><img src="public/assets/bouteille_2.jpg" width="100" height="100" class="imageProduit"/></div>
						<div class="col-3"><p>Julia noventa</p></div>
						<div class="col-3"><p>15€</p></div>
						<div class="col-3"><input type="button" value="Supprimer" class="bouttonSupprimer"></div>
				</div>
        <div class="element row">
					<div class="col-3"><img src="public/assets/bouteille_3.jpg" width="100" height="100" class="imageProduit"/></div>
						<div class="col-3"><p>Vin pas ouf</p></div>
						<div class="col-3"><p>0.15€</p></div>
						<div class="col-3"><input type="button" value="Supprimer" class="bouttonSupprimer"></div>
				</div>
        <div class="element row">
					<div class="col-3"><img src="public/assets/bouteille_4.jpg" width="100" height="100" class="imageProduit"/></div>
						<div class="col-3"><p>Vin rouge LA VILLAGEOISE</p></div>
						<div class="col-3"><p>8655€</p></div>
						<div class="col-3	"><input type="button" value="Supprimer" class="bouttonSupprimer"></div>
				</div>
        
        <div class="row">
			<a href="?page=payment">
			<input type="button" value="Commander" class="bouttonCommander"/>
			</a>
        </div>
        
    		</div>


        <div class="container">
        <div class="row">
          <div class="col-12">
<div class="blockInfo">
          <p>Aucun article dans votre panier</p>


          <span>N'hésitez pas à consulter nos produits !</span>

          <a href="#" class="redirectionPlacement">
          <input type="button" value="Les produits" class="bouttonProduit"/>
        </a>
        </div>
      </div>
      </div>
        </div>
        <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"
      ></script></br>
	</body>
</html>
