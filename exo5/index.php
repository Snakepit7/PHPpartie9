<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="style.css" />
        <title>Exo5</title>
    </head>
    <body>
        <!-- CSS pour faire joli -->
        <div class="background">
            <h1 class="text">PHP partie 9 - Exo 5 :</h1>
        </div>
        <?php
        //Stockage de la date actuelle dans une variable
        $dateDeb = ('now');
        //Stockage de la date dans une variable
        $dateFin = ('16-5-2016');
        //Opération permettant d'afficher le nombre de jours entre les deux dates
        echo intval((strtotime($dateDeb) - strtotime($dateFin)) / ((60 * 60) * 24));
        ?>
    </body>
</html>