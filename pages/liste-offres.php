<?php
$id = 1;
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Tourisme Matane</title>
        <link rel="stylesheet" href="../css/index.css">
        <link rel="stylesheet" href="../css/theme.css">
        <link rel="stylesheet" href="../css/liste-offres.css">
        <base target="_parent">
    </head>
    <body>
        <?php include("header.html"); ?>
        <hr/>
        <!-- Filtre et recherche -->
        <!-- <div> 
            <form action="GET" class="formulaire">
                <input type="text" value="Destination"/>
                <select name="filtre">
                    <option value="nouveaute">Nouveauté</option>
                    <option value="prix_moins_to_plus">Du - cher au + cher</option>
                    <option value="prix_plus_to_moins">Du + cher au - cher</option>
                    <option value="genre">Genre</option>
                    <option value="alphabétique">Ordre alphabétique</option>
                    <option value="alphabétique_inverse">Ordre alphabétique inverse</option>
                </select>
            </form>
        </div>
        <div>
            <form action="">
                <input type="date">
                Prix : <input class="prix" type="range" name="points" min="0" max="10">
                <select name="genre">
                    <option value="musique">Musique</option>
                    <option value="soiree">Soirée</option>
                    <option value="culture">Culture</option>
                    <option value="exploration">Exploration</option>
                </select>
                <input type="button" value="Rechercher" />
            </form>
        </div> -->
        
        <!-- listage des offres -->
        <div id="lig">
            <input type="hidden" name="id" value="">
            <!-- Boucle pour chaque activité -->
            <?php
            include('../Scripts/recuperer-destinations.php');
            foreach (recupererDestinations() as $tab){
                $html = "<div class=\"offre\">";
                $html .= "<img src=\"".$tab["url_image"]."\" class=\"img-destination\" alt=\"Image représentant la destination\"/>";
                $html .= "<h1>Ville : ".$tab["ville"]."</h1>";
                $html .= "<p> Départ : ".$tab["debut"]."</p>";
                $html .= "<p> Durée en jours : ".$tab["duree"]."</p>";
                $html .= "<p> Prix initial : ".$tab["prix"]." €</p>";
                $html .= "<form action=\"./infos-achat-offre.php\" method=\"get\">";
                $html .= "<input type=\"hidden\" name=\"id\" value=\"".$id."\"> ";
                $html .= "<input id=\"button\" type=\"submit\" value=\">> Plus d'info\">";
                $html .= "</form> ";
                $html .= "</div>";
                echo $html;
                $id++;
            }
            ?>

        </div>
        <hr/>
        <?php include("footer.html"); ?>
    </body>
</html>

