<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="style.css" />
        <title>Exo3</title>
    </head>
    <body>
        <!-- CSS pour faire joli -->
        <div class="background">
            <h1 class="text">PHP partie 9 - Exo 3 :</h1>
        </div>
        <?php
        //Déclaration du format de la date
        $date = date("l-F-y");
        //Déclaration de l'heure
        $heure = date("H:i");
        //affichage de la date (Enfin à une vache près, c'est pas une science exacte !)
        Print("Nous sommes le $date et il est $heure");
        ?>
    </body>
</html>