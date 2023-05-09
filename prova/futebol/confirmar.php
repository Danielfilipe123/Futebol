<?php

$nome = $_POST["nome"];
$cidade = $_POST["cidade"];
$titulos = $_POST["titulos"];
$estadio = $_POST["estadio"];


$times=fopen("times.csv", "a");
fputcsv($times,[$nome,$cidade,$titulos,$estadio]);

header("location:index.php");
?>