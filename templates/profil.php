<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link
  href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
  rel="stylesheet"
  integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
  crossorigin="anonymous"
/>
<link rel="stylesheet" href="../public/css/Pofil.css">
  <title>Profil</title>
</head>
<body>
  <?php include('navbar.php'); ?>
  <div class="fondPage">
  <div class="container ">
    <h1 id="titre">Votre Profil</h1>

      <div class="blockform w-75">
      <form action="post" class="row g-3">
        <div class="col-6"><input type="text" name="Nom" placeholder="Votre nom" class="w-100" id="element"></div>
        <div class="col-6"><input type="text" name="Prenom" placeholder="Votre prénom" class="w-100" id="element"></div>
        <div class="col-12"><input type="password" name="MotDePasse" placeholder="Mot de passe" class="w-100" id="element"></div>
        <div class="col-12"><input type="text" name="Mail" placeholder="Votre Mail" class="w-100" id="element"></div>
        <div class="col"><input type="button"  name="Bouttonajour" value="Mettre à jour" id="bouttonMiseAJour"></div>

      </form>
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