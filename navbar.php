<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Navbar</title>
  </head>
  <body>
  <div class="container">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
      <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
      </a>

      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a href="index.php" class="nav-link px-2 link-secondary">Index</a></li>
        <li><a href="pagina1.php" class="nav-link px-2 link-dark">Pàgina 1</a></li>
        <li><a href="pagina2.php" class="nav-link px-2 link-dark">Pàgina 2</a></li>
        <li><a href="logout.php" class="nav-link px-2 link-dark">Logout</a></li>
        <li><a href="usuari.php" class="nav-link px-2 link-dark">Usuari</a></li>
        <li><a href="footer.php" class="nav-link px-2 link-dark">Footer</a></li>
        <li><a href="header.php" class="nav-link px-2 link-dark">Header</a></li>
        <li><a href="navbar.php" class="nav-link px-2 link-dark">Navbar</a></li>
      </ul>

      <div class="col-md-3 text-end">
        <button type="button" class="btn btn-outline-primary me-2" onclick="location.href='login.php'">Login</button>
        <button type="button" class="btn btn-outline-primary me-2" value="**php**"></button>
      </div>
    </header>
  </div>
  </body>


  <?php

    $nom = $_POST["nom"];
    $correu = $_POST["correu"];
    $contrasenya = $_POST["contrasenya"];



  ?>



</html>