<?php

var_dump($_GET);

$nb1 = $_GET['nb1'];
$nb2 = $_GET['nb2'];

// Si le nb1 est inférieur à 0 ET le nb2 est inférieur à 0, OU le nb1 supérieur à 0 ET le nb2 supérieur à 0....
if(($nb1 < 0 && $nb2 < 0) || ($nb1 > 0 && $nb2 > 0)) { // alors.....
    $result = "positif";
} else { // sinon....
    $result = "négatif";
}



?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Premiers pas en PHP</title>
</head>
<body>
    <h1>Bonjour!</h1>
    <p>Le résultat sera <?= $result ?></p>
    
</body>
</html>