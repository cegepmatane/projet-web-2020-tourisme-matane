<?php
include('../Scripts/recuperer-destinations.php');
$res = recupererDestinations();
$adultes = $_GET["adultes"];
$enfants = $_GET["enfants"];
$animaux = $_GET["animaux"];
$duree = (new DateTime($_GET["debut"]))->diff(new DateTime($_GET["fin"]))->days;
$id = $_GET["id"];
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
    <?php include("header.html"); ?>

    <h1>Tourisme-Matane</h1>
    <h2>Bienvenue sur la page de paiement</h2>



    <div class="div-principale">
        <ul class="liste">
            Lieux inclus :
            <li>Une superbe école</li>
            <li>Un splendide quartier</li>
            <li>Un magnifique parc</li>
        </ul>
        <ul class="liste">
            Options incluses :
            <li>Un Wi-Fi surpuissant</li>
            <li>Un trajet rapide en bus</li>
            <li>L'entrée dans les lieux</li>
        </ul>
        <div id="achat">
            <p>
                <?php
                     echo ($adultes * $res[$id - 1]["prix_adulte"] + $enfants * $res[$id - 1]["prix_enfant"] + $animaux * $res[$id - 1]["prix_animal"] + $duree * 20)." €";
                ?>
            </p>
            <button>Acheter</button>
        </div>
    </div>

    <?php include("footer.html"); ?>
</body>
</html>