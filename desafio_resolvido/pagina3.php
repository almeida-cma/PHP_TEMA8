<?php
session_start();

//Código aqui
$nome1 = $_SESSION["nome"];
$idade1 = $_SESSION["idade"];
$peso1 = $_SESSION["peso"];
$altura1 = $_SESSION["altura"];

$nome2 = $_SESSION["nome2"];
$idade2 = $_SESSION["idade2"];
$peso2 = $_SESSION["peso2"];
$altura2 = $_SESSION["altura2"];

$maiorAltura = ($altura1 > $altura2) ? $nome1 : $nome2;
$maisVelho = ($idade1 > $idade2) ? $nome1 : $nome2;
$maiorPeso = ($peso1 > $peso2) ? $nome1 : $nome2;

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página 3</title>
</head>
<body>
    <h2>Comparação de Informações</h2>
    <p>Quem tem uma altura maior: <?php echo $maiorAltura; ?></p>
    <p>Quem é mais velho: <?php echo $maisVelho; ?></p>
    <p>Quem tem o peso maior: <?php echo $maiorPeso; ?></p>
</body>
</html>
