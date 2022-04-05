<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuari</title>
</head>
<body>
    
</body>
</html>

<?php
session_start();
$_SESSION[“var”]=‘foo’;
 $_SESSION[‘var’];
session_destroy();

$nom = $_POST["nom"];
$correu = $_POST["correu"]; 
$contrasenya = $_POST["contrasenya"];
      

?>