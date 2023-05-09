<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Times</title>
</head>
<body>
    <h1>Lista de Times</h1>

    <table>
        <tr>
            <th>Nome</th>
            <th>Cidade</th>
            <th>Numeros de titulos</th>
            <th>Estadio</th>
        </tr>
 <?$times = fopen("times.csv", "r");?>
<?php while(($row = fgetcsv($times))!==false):?>
     <tr>
        <td><?= $row[0]?></td>
        <td><?= $row[1]?></td>
        <td><?= $row[2]?></td>
        <td><?= $row[3]?></td>
            <td>
            <button><a href="editar.php?nome=<?=$row[0]?>">Editar</a></button>
            </td>
            <td>
            <form action="delete.php" method="POST">
                <input type="hidden" name="nome" value="<?=$row[0]?>">
                <button>Deletar</button>
            </form>
        </td>
    </tr> 
<?php endwhile ?>
    </table>

    <form action="confirmar.php" method="POST">
    <input type="text" name="nome" placeholder="Nome">
     <input type="text" name="cidade" placeholder="Cidade">
    <input type="number" name="titulos" placeholder="Titulos">
     <input type="text" name="estadio" placeholder="Estadio">
     <input type="submit">
        
    </form>

    
    <a href=http://localhost:8000/home.php>Voltar</a>




</body>
</html>