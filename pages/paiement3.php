<?php
include('../Scripts/recuperer-destinations.php');
$res = recupererDestinations();
$adultes = $_GET["adultes"];
$enfants = $_GET["enfants"];
$animaux = $_GET["animaux"];
$id = $_GET["id"];
$duree = (new DateTime($_GET["debut"]))->diff(new DateTime($_GET["fin"]))->days;
$prix = ($adultes * $res[$id - 1]["prix_adulte"] + $enfants * $res[$id - 1]["prix_enfant"] + $animaux * $res[$id - 1]["prix_animal"] + $duree * 20);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/theme.css">
    <link rel="stylesheet" type="text/css" href="../css/accueil.css">
    <link rel="stylesheet" href="../css/index.css">
    <base target="_parent">
    <title>Tourisme-Matane</title>
</head>
<body>
    <?php include("header.php"); ?>
<hr>
    <h1>Tourisme-Matane</h1><br><hr>
    <h2>Acceptez les termes d'achat</h2><br><hr>

    <p>
        Vous acceptez tous les termes du contrat.<br>
        La totalité de l'argent payé nous sera remis.<br>
        Vous pouvez annuler le voyage sous la condition de le faire au minimum 8 jours à l'avance.<br>
        Si vous venez avec plus de personnes que prévu, envoyez un mail à supportdetourismematane@gmail.com.<br>
    </p>
<hr>
    <form action="./paiement4.php" method="post">
        <div class="div-principale">

            <div id="achat">
                <p>
                    <input type="hidden" name="prix_final" value="<?php echo $prix; ?>">
                    <input type="hidden" name="nb_enfants" value="<?php echo $enfants; ?>">
                    <input type="hidden" name="nb_adultes" value="<?php echo $adultes; ?>">
                    <input type="hidden" name="nb_animaux" value="<?php echo $animaux; ?>">
                    <input type="hidden" name="duree" value="<?php echo $duree; ?>">
                    <input type="hidden" name="id_utilisateur" value="0">
                    <input type="hidden" name="id_destination" value="<?php echo $id; ?>">
                    <?php
                        echo $prix." €";
                    ?>
                </p>
                <input id="button" type="submit" value="Accepter">
            </div>
        </div>
    </form><br><hr>

    <?php include("footer.html"); ?>
</body>
</html>