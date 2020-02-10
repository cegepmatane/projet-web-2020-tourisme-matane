<?php
    include('../Scripts/recuperer-destinations.php');
    $res = recupererDestinations();
    $id = $_GET["id"];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Tourisme Matane</title>
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" type="text/css" href="../css/infos-achat-offre.css">
	<base target="_parent">
</head>
<body>
    <?php include("header.html"); ?>
<hr/>
<?php
    if(!filter_var($id, FILTER_VALIDATE_INT) === false){ ?>
        <div id="ligne">
            <div id="cote">
                <?php
                echo "<img src=\"".$res[$id - 1]["url_image"]."\" class=\"img-destination\" alt=\"Image représentant la destination\"/>";
                ?>
            </div>

            <div class="div-principale">
                <h1 id="nom_offre">Visite de la ville de <?php echo $res[$id - 1]["ville"]?> </h1>
                <?php
                echo "<p class=\"text-destination\">".$res[$id - 1]["description"]."</p>";
                ?>
            </div>

            <form action="./paiement1.php" method="get">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <input id="button" type="submit" value="Acheter">
                </form>



        </div>
    <?php }else{
        echo "<h1> Il faut que ce soit un int supérieur strictement à 0 pour l'id, sinon ça ne va pas fonctionner. </h1>";
    }
?>

<hr/>
    <?php include("footer.html"); ?>
</body>
</html>