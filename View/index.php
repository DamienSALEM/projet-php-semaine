<!DOCTYPE html>
<html>
  <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../styles/index.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vin sur Vin</title>
  </head>
  <body>
    <header class="container-fluid navbar navbar-expand-lg">
      <div id="toggler-container" class="d-lg-none">
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-bs-toggle="collapse"
          data-bs-target="#navbar-content"
          aria-controls="navbar-content"
        >
           <span class="navbar-light navbar-toggler-icon">
             <i class="fas fa-bars" style="color:#000; font-size:28px;"></i>
           </span>
        </button>
        <img class="logo" src="../assets/logo.png" />
      </div>
      <nav class="collapse navbar-collapse row" id="navbar-content">
        <ul class="navbar-nav col-12 col-xl-10 offset-xl-1">
          <li class="nav-item">
            <a class="nav-link">
              <img class="side-icon" src="../assets/profile.png" />
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link">Accueil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link">Menu</a>
          </li>
          <li id="logo-container" class="nav-item d-lg-block">
            <img class="logo" src="../assets/logo.png" />
          </li>
          <li class="nav-item">
            <a class="nav-link">Magasin</a>
          </li>
          <li class="nav-item">
            <a class="nav-link">Nous contacter</a>
          </li>
          <li class="nav-item">
            <a class="nav-link">
              <img class="side-icon" src="../assets/cart.png" />
            </a>
          </li>
        </ul>
      </nav>
    </header>
    <div id="banner">
      <div>
        <img src="../assets/banner.png" />
        <h1 class="d-lg-block">Vin sur Vin</h1>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
