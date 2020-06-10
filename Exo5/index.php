<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 5 PHP</title>
</head>

<body>

    <h1>Exercice 5</h1>

    <p>Afficher le nombre de jour qui sépare la date du jour avec le 16 mai 2016.</p>

    <?php 
    $todaydate = time();
    $pastdate = strtotime('16-5-2016');

    echo ($todaydate - $pastdate) / 86400;
    ?>

 

    
</body>

</html>