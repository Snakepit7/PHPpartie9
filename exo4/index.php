<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="style.css" />
        <title>Exo4</title>
    </head>
    <body>
        <!-- CSS pour faire joli -->
        <div class="background">
            <h1 class="text">PHP partie 9 - Exo 4 :</h1>
        </div>
        <?php
        echo 'Timestamp actuel: ' . time();
        ?><br /><?php
        $timeStamp=mktime(15,0,0,2,8,2016);
        echo 'Timestamp du 2 Août 2016 à 15h ' . $timeStamp;
        ?>
    </body>
</html>