<?php
$id = $_GET["id_destination"];
$prix = $_GET["prix_final"];
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
    <br>

    <hr>
    <h2>Cliquez sur le bouton pour passer au paiement Paypal !</h2>


    <hr>
    <div class="div-principale">
        <div id="achat">
            <p>
            Prix final = <?php echo $prix." €"; ?>
            <form action="https://www.paypal.com/cgi-bbin/webscr" method="post">
                <input type="hidden" name="charset" value="utf-8">
                <input type="hidden" name="cmd" value="_xclick"/>
                <input type="hidden" name="item_name" value="<?php echo "Voyage numéro ".$id; ?>">
                <input type="hidden" name="business" value="tourismeMataneWeb@gmail.com">
                <input type="hidden" name="amount" value="<?php echo $prix ?>">
                <input type="hidden" name="return" value="http://localhost/Tourisme%20Matane/Le%20site/projet-web-2020-tourisme-matane/pages/paiement-validation.php">
                <input type="hidden" name="currency_code" value="EUR">
                <input type="submit" value="Acheter">
            </form>

            </p>
        </div>
    </div>
    <hr>

    <?php include("footer.html"); ?>
</body>
</html>