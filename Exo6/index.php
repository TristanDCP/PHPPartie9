<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 6 PHP</title>
</head>
<body>

<h1>Exercice 6</h1>

<p>Afficher le nombre de jour dans le mois de février de l'année 2016.</p>

<?php
        $number = cal_days_in_month(CAL_GREGORIAN, 2, 2016); 
        echo "Il y avait  {$number} jours dans le mois de février";
    ?>

</body>
</html>