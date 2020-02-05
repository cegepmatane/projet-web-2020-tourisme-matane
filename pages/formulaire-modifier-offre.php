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
        <?php
            include_once('../scripts/recuperer-destinations.php');
            $offre=recupererDestination($_GET["id"]);
        ?>
        <form method="post" action="../Scripts/modifier-offre.php?id=<?php echo $_GET["id"]; ?>">
        <p>Ville</p>
            <input type="text" name="ville" value="<?php echo $offre["ville"] ?>">
        <p>Description</p>
        <input type="text" name="description" value="<?php echo $offre["description"] ?>">
        <p>Image</p>
        <input type="text" name="image" value="<?php echo $offre["url_image"] ?>">
        <p>Debut</p>
        <input type="date" name="debut" value="<?php echo $offre["debut"] ?>">
        <p>Durée</p>
        <input type="text" name="duree" value="<?php echo $offre["duree"] ?>">
        <p>Prix</p>
        <input type="text" name="prix" value="<?php echo $offre["prix"] ?>">
            <br><br>
        <input type="submit" name="submit" value="Valider">
        <?php include("footer.html"); ?>
    </form>
    </body>
</html>