<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="public/css/navbar.css">
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
             <i class="fas fa-bars"></i>
           </span>
        </button>
        <img class="logo" src="public/assets/logo.png" />
      </div>
      <nav class="collapse navbar-collapse row" id="navbar-content">
        <ul class="navbar-nav col-12 col-xl-10 offset-xl-1">
          <li class="nav-item">
            <a href="../templates/profil.php" class="nav-link">
              <img class="side-icon" src="public/assets/profile.png" />
            </a>
          </li>
          <li class="nav-item">
            <a href="?page=homepage" class="nav-link">Accueil</a>
          </li>
          <li class="nav-item">
            <a href="?page=booking" class="nav-link">Reserver</a>
          </li>
          <li id="logo-container" class="nav-item d-lg-block">
            <img class="logo" src="public/assets/logo.png" />
          </li>
          <li class="nav-item">
            <a href="?page=Produit" class="nav-link">Magasin</a>
          </li>
          <li class="nav-item">
            <a href="?page=login" class="nav-link">Se connecter</a>
          </li>
          <li class="nav-item">
            <a href="?page=cart" class="nav-link">
              <img class="side-icon" src="public/assets/cart.png" />
            </a>
          </li>
        </ul>
      </nav>
    </header>
  </body>
</html>
