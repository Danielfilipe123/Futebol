<?php

$nome = $_POST["nome"];
$cidade= $_POST["cidade"];
$titulos = $_POST["titulos"];
$estadio= $_POST["estadio"];

$tempName = tempnam(".","");
$temp = fopen($tempName, "w");
$origem = fopen("times.csv", "r");
while (($row = fgetcsv($origem)) !== false) {
    if ($row[0] == $nome) {
        fputcsv($temp, [$nome,$cidade,$titulos,$estadio]);
        continue;
    }
    fputcsv($temp,$row);
}

fclose($temp);
fclose($origem);

rename($tempName, "times.csv");
header("location:index.php");
?>