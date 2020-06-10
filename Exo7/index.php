<?php var_dump($_FILES) ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 7 </title>
 

</head>
<body>

<p>

Afficher la date du jour + 20 jours.

</p>
<?php
echo date('d-m-Y', strtotime('+20 days'));
?>

</body>
</html>