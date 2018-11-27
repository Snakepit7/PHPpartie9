<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="style.css" />
        <title>Exo6</title>
    </head>
    <body>
        <!-- CSS pour faire joli -->
        <div class="background">
            <h1 class="text">PHP partie 9 - Exo 6 :</h1>
        </div>
        <?php
        $d=cal_days_in_month(CAL_GREGORIAN,2,2016);
        echo 'Il y avait ' . $d . ' jours en Février 2016';
        ?> 
    </body>
</html>