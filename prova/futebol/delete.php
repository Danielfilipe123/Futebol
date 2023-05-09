<?php 
$nome = $_POST["nome"];


$tempname = tempnam(".", "");

$temp = fopen($tempname, "w");
$origem = fopen("times.csv", "r");
while (($row = fgetcsv($origem))!==false) {
    if ($row[0] == $nome) {
        continue;
    }
    fputcsv($temp,$row);
}

fclose($temp);
fclose($origem);

rename($tempname, "times.csv");

header("location:index.php")


?>