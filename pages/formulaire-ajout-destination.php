<?php ?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Tourisme Matane</title>
        <link rel="stylesheet" href="../CSS/index.css">
        <link rel="stylesheet" href="../CSS/theme.css">
        <link rel="stylesheet" href="../CSS/formulaire_ajout.css">
        <base target="_parent">
    </head>
    <body>
        <?php include("header.html"); ?>
        <hr/>
        <form method="post" action="../Scripts/ajout_destination.php">
        <p>Ville</p>
        <input type="text" name="ville">
        <p>Description</p>
        <input type="text" name="description">
        <p>Image</p>
        <input type="text" name="image">
        <p>Debut</p>
        <input type="date" name="debut">
        <p>Durée</p>
        <input type="text" name="duree">
        <p>Prix</p>
        <input type="text" name="prix"><br><br>
        <input type="submit" name="submit" value="Valider">
        <?php include("footer.html"); ?>
    </form>
    </body>
</html>