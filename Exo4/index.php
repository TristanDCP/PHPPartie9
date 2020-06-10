<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 4 PHP</title>
</head>
<body>

<h1>Exercice 4</h1>

<p>Afficher le timestamp du jour.  
Afficher le timestamp du mardi 2 août 2016 à 15h00.</p>
    

    <?php
        echo 'Timestamp actuel : ' .time(). '<br>';
        echo 'mardi 2 août 2016 à 15h00 : ' .mktime(15,00,00,2,8,2016);
    ?>


</body>
</html>