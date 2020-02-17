<?php
include('../Scripts/recuperer-destinations.php');
$res = recupererDestinations();
$adultes = $_GET["adultes"];
$enfants = $_GET["enfants"];
$animaux = $_GET["animaux"];
$id = $_GET["id"];
$date = new DateTime($res[$id - 1]["debut"]);
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
    <?php include("header.php"); ?>
<hr>
    <h1>Tourisme-Matane</h1><br><hr>
    <h2>Choisissez les dates de votre séjour</h2><br><hr>

    <form action="./paiement3.php" method="get">
        <div class="div-principale">
            <p>
                <input type="hidden" name="adultes" min="0" max="10" <?php echo "value=\"".$adultes."\""?> >
                <input type="hidden" name="enfants" min="0" max="10" <?php echo "value=\"".$enfants."\""?> >
                <input type="hidden" name="animaux" min="0" max="10" <?php echo "value=\"".$animaux."\""?> >
                Du <input type="date" name="debut" <?php echo "value=\"".$date->format("Y-m-d")."\""?> >
                <?php $date->add(new DateInterval("P".$res[$id - 1]["duree"]."D")); ?>
                au <input type="date" name="fin" <?php  echo "value=\"".$date->format("Y-m-d")."\""?> > (jours selectionnés inclus)
            </p>
        </div>


        <div class="div-principale">

            <div id="achat">
                <p>
                    <?php
                    echo ($adultes * $res[$id - 1]["prix_adulte"] + $enfants * $res[$id - 1]["prix_enfant"] + $animaux * $res[$id - 1]["prix_animal"])." €";
                    ?>
                </p>
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <input id="button" type="submit" value="Continuer">
                ?>
            </div>
        </div>
    </form>


<hr>
    <?php include("footer.html"); ?>
</body>
</html>