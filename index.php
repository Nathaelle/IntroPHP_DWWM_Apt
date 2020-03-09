<?php

//echo '<h1>Hello World</h1>';

$titre = 'Un autre titre!';
$contenu = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae, asperiores!";
$image = "git_mug.png";

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Premiers pas en PHP</title>
</head>
<body>
    <h1><?= $titre ?></h1>
    <p><?= $contenu ?></p>
    <p><img src="img/<?= $image ?>" alt=""></p>
</body>
</html>