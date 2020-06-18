<?php setlocale(LC_ALL, 'fr_FR.UTF8', 'fr_FR', 'fr', 'fr', 'fra', 'fr_FR@euro');?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href="styles.css">
    <title>PHP Partie 9 - TP</title>
</head>
<body>
    <h1>TP</h1>
    <p>
        Faire un formulaire avec deux listes déroulantes. La première sert à choisir le mois, et le deuxième permet d'avoir l'année.
        En fonction des choix, afficher un calendrier comme celui-ci :
    </p>
    <form action="index.php" method="post">
        <select name="months" id="monthsSelector">
            <option value="" selected disabled>Choississez une Date</option>
            <?php
            $monthsArray = [1 => 'Janvier',2 => 'Février',3 => 'Mars', 4 => 'Avril',5 => 'Mai',6 => 'Juin', 7 => 'Juillet',8 => 'Août', 9 => 'Septembre',10 => 'Octobre',11 => 'Novembre', 12 => 'Décembre',];
            foreach ($monthsArray as $key => $months) {
                echo '<option value="' . $key . '">' . $months . '</option>';
            }
            ?>
        </select>
        <select name="years" id="yearsSelector">
            <option value="" selected disabled>Choississez une Année</option>
            <?php
            for ($year = 1990; $year <= 2020; $year++) {
                echo '<option value="' . $year . '">' . $year . '</option>';
            }
            ?>
        </select>
        <input type="submit" value="Afficher le calendrier">
    </form>
    <?php if (isset($_POST['months']) and isset($_POST['years'])) {
        $dayWeek = date('N', mktime(0, 0, 0, $_POST['months'], 1, $_POST['years']));
        $daysInMonths = cal_days_in_month(CAL_GREGORIAN, $_POST['months'], $_POST['years']);
    ?>
        <table>
            <caption><?= $monthsArray[$_POST['months']] . ' ' . $_POST['years'] ?></caption>
            <?php if ($daysInMonths) { ?>
                <tr>
                    <th>Lundi</th>
                    <th>Mardi</th>
                    <th>Mercredi</th>
                    <th>Jeudi</th>
                    <th>Vendredi</th>
                    <th>Samedi</th>
                    <th>Dimanche</th>
                </tr>
                <tr>
                    <?php
                    $day = 1;
                    for ($i = 1; $i <= $daysInMonths + $dayWeek - 1 ; $i++) {
                        if ($i >= $dayWeek) {
                            echo '<td>' . $day++ . '</td>';
                        } else {
                            echo '<td></td>';
                        }if ($i % 7 == 0) {
                            echo '</tr><tr>';
                        }
                    }
                    ?>
                </tr>
            <?php } ?>
        </table>
    <?php } ?>

</body>

</html>