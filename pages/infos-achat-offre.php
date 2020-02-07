<?php
    include('../Scripts/recuperer-destinations.php');
    $res = recupererDestinations();
    $nombre_adultes = 0;
    $nombre_enfants = 0;
    $nombre_animaux = 0;
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
    if(!filter_var($_GET["id"], FILTER_VALIDATE_INT) === false){ ?>
        <div id="ligne">
            <div id="cote">
                <?php
                echo "<img src=\"".$res[$_GET["id"] - 1]["url_image"]."\" class=\"img-destination\" alt=\"Image représentant la destination\"/>";
                ?>
            </div>

            <div class="div-principale">
                <h1 id="nom_offre">Visite de la ville de <?php echo $res[$_GET["id"] - 1]["ville"]?> </h1>
                <?php
                echo "<p class=\"text-destination\">".$res[$_GET["id"] - 1]["description"]."</p>";
                ?>
            </div>

            <div class="div-principale">
                <p>
                    Du <input type="date" name="debut" <?php $date = new DateTime($res[$_GET["id"] - 1]["debut"]); echo "value=\"".$date->format("Y-m-d")."\""?> > au <input type="date" name="fin" <?php $date->add(new DateInterval("P".$res[$_GET["id"] - 1]["duree"]."D")); echo "value=\"".$date->format("Y-m-d")."\""?> > (jours selectionnés inclus)
                </p>
            </div>
            
            <div class="div-principale">
                
                <div id="achat">
                    <p>
                        <?php
                        echo ($res[$_GET["id"] - 1]["prix"])." €";
                        ?>
                    </p>
                    <form>
                        <button type="submit" formaction="paiement.html">Acheter</button>
                    </form>
                </div>
            </div>

        </div>
    <?php }else{
        echo "<h1> Il faut que ce soit un int supérieur strictement à 0 pour l'id, sinon ça ne va pas fonctionner. </h1>";
    }
?>

<hr/>
    <?php include("footer.html"); ?>
</body>
</html>