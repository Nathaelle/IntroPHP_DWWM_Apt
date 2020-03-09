<?php

var_dump($_GET);
$indice = isset($_GET['numero'])? $_GET['numero'] : 0 ;

$images = ["montagne-1.webp", "montagne-2.webp", "montagne-3.jpg", "montagne-4.jpg", "montagne-5.jpg", "montagne-6.webp", "montagne-7.jpg"];

$size = sizeof($images);
$menu = "";
for($i = 0; $i < $size; $i ++) {
    $menu .= "<li><a href='index.php?numero=$i'> Image n° ".($i + 1)."</a></li>";
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

    <p><?= $menu ?></p>

    <div><img src="img/<?= $images[$indice] ?>" alt=""></div>
    
</body>
</html>