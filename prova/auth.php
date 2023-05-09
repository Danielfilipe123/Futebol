<?php 
session_start();
// if (!isset($_POST['email']) || !isset($_POST['nome']) || !isset($_POST['sobrenome']));

$email = $_POST["email"];
$senha = $_POST["senha"];

$usuarios = fopen("usuarios.csv", "r");
while(($row= fgetcsv($usuarios))!== false){
    if($row[0] == $email && $row[1] == $senha) {
         $_SESSION["auth"] = true;
    }
       
    }

                        
$usuarios = fopen("usuarios.csv", "a");
fputcsv($usuarios,[$email,$senha]);
if($_SESSION["auth"] == true){
    header("location:home.php");
}else{
    header("location:login.php");
}


?>