<?php 

session_start();

if (!isset($_SESSION["auth"])or $_SESSION["auth"] !== true) {
    header("location:login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logado</title>
</head>
<body>

<h1>Seja bem vindo</h1>

<br><a href="./futebol/index.php">Futebol</a><br>
<a href="logout.php">Deslogar</a>

    
</body>
</html>