<?php
$nome = $_GET["nome"];
$times= fopen("times.csv", "r");
$data = [];

while (($row = fgetcsv($times)) !== false) {
    if ($row[0] == $nome) {
        $data = $row;
        break;
    }
}

if (sizeof($data) == 0) {
    header("location: /times/");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>times</title>
</head>
<body>

<h1>dados do times:<?= $nome ?></h1>

<form action="atualizar.php" method="POST">
    <input type="hidden"name="nome" value="<?= $data[0]?>">
    <input type="text" name="cidade" placeholder="Cidade" value="<?= $data[1]?>">
    <input type="nunber" name="titulos" placeholder="Titulos" value="<?= $data[2]?>">
    <input type="text" name="estadio" placeholder="Estadio" value="<?= $data[3]?>">
    <button>salvar</button>

   <br> <a href="http://localhost:8000/futebol/index.php">Voltar</a></br>
</form>