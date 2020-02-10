<?php
include('../Scripts/recuperer-destinations.php');
$res = recupererDestinations();
$id = $_GET["id"];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/theme.css">
    <link rel="stylesheet" type="text/css" href="../css/accueil.css">
    <link rel="stylesheet" type="text/css" href="../css/infos-achat-offre.css">
    <link rel="stylesheet" href="../css/index.css">
    <base target="_parent">
    <title>Tourisme-Matane</title>
</head>
<body>
    <?php include("header.html"); ?>

    <h1>Tourisme-Matane</h1>
    <h2>Choisissez le nombre de personnes venant avec vous</h2>


    <form action="./paiement2.php" method="get">

        <div class="div-principale">
            <h2>Nombre de personnes</h2>
            <ul id="personnes">
                <li><input type="number" name="adultes" min="0" max="10" <?php echo "value=\"".'0'."\""?> > adultes(+18ans) ==> Prix par jour et par adulte : <?php echo $res[$id - 1]["prix_adulte"]?></li>
                <li><input type="number" name="enfants" min="0" max="10" <?php echo "value=\"".'0'."\""?> > enfants(-18ans) ==> Prix par jour et par enfant : <?php echo $res[$id - 1]["prix_enfant"]?></li>
                <li><input type="number" name="animaux" min="0" max="10" <?php echo "value=\"".'0'."\""?> > animaux ==> Prix par jour et par animal : <?php echo $res[$id - 1]["prix_animal"]?></li>
            </ul>
        </div>

        <div class="div-principale">

            <div id="achat">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <input id="button" type="submit" value="Continuer">

            </div>
        </div>
    </form>




    <?php include("footer.html"); ?>
</body>
</html>