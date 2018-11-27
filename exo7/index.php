<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="style.css" />
        <title>Exo7</title>
    </head>
    <body>
        <!-- CSS pour faire joli -->
        <div class="background">
            <h1 class="text">PHP partie 9 - Exo 7 :</h1>
        </div>
        <?php
        $date = date('Y-m-d');
        $datesum =date('Y-m-d', strtotime($date .  '+20 days'));
        echo 'Dans vingt jours nous serons le ' . $datesum;
        ?>
    </body>
</html>