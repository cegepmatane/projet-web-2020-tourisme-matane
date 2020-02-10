<?php
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
    <h2>Bienvenue sur la page de paiement Paypal</h2>



    <div class="div-principale">
        <div id="achat">
            <p>
                <img src="https://www.paypalobjects.com/webstatic/en_US/i/buttons/cc-badges-ppmcvdam.png" alt="Buy now with PayPal" />
            </p>
            <button>Acheter</button>
        </div>
    </div>

    <?php include("footer.html"); ?>
</body>
</html>