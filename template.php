<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Navigation en PHP</title>
    
</head>
<body>
    <h1>Bonjour !</h1>
    <ul class="menu">
        <li><a href="index.php?page=news">Les news du jour</a></li>
        <li><a href="index.php?page=meteo">La météo</a></li>
        <li><a href="index.php?page=horo">Mon horoscope</a></li>
    </ul>
    <p class="date"></p>

    <div class="content">
        <?php require "html/$page.php" ?> 
    </div>

</body>
</html>