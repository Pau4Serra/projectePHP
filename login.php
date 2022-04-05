<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="index.php" method="POST">
        <input type="text" class="form-control" name="nom" placeholder="Nom">
        <p></p>
        <input type="text" class="form-control" name="correu" placeholder="Correu electrònic">
        <p></p>
        <input type="password" class="form-control" name="contrasenya" placeholder="Contrasenya">
        <p></p>
        <input type="submit" class="form-control" value="Enviar">
    </form>
</body>

<?php

      $nom = $_POST["nom"];
      $correu = $_POST["correu"];
      $contrasenya = $_POST["contrasenya"];

      

    ?>

</html>