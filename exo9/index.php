<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="style.css" />
        <title>TD</title>
    </head>
    <body>
        <!-- CSS pour faire joli -->
        <div class="background">
            <h1 class="text">PHP partie 9 - TD :</h1>
        </div>
        <form method="get" action="index.php">
            <!-- Liste déroulante -->
            <select id="month" name="month" size="1">
                <option> Janvier</option>
                <option> Février</option>
                <option> Mars</option>
                <option> Avril</option>
                <option> Mai</option>
                <option> Juin</option>
                <option> Juillet</option>
                <option> Août</option>
                <option> Septembre</option>
                <option> Octobre</option>
                <option> Novembre</option>
                <option> Décembre</option>
            </select>
            <!-- Liste déroulante -->
            <select id="year" name="year" size="1">
                <option> 2017</option>
                <option> 2018</option>
            </select>

            <button name="send">Envoyer!</button>
        </form>

    </body>
</html>