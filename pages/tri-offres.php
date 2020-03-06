<?php
    include('../Scripts/recuperer-destinations.php');
    foreach (recupererDestinationParVille($_GET['ville']) as $offres){
        $html = "<div class=\"offre\">";
        $html .= "<img src=\"".$offres['url_image']."\" class=\"img-destination\" alt=\"Image représentant la destination\"/>";
        $html .= "<h1>Ville : ".$offres['ville']."</h1>";
        $html .= "<p> Départ : ".$offres['debut']."</p>";
        $html .= "<p> Durée en jours : ".$offres['duree']."</p>";
        $html .= "<p> Prix initial : ".$offres['prix']." €</p>";
        $html .= "<form action=\"./infos-achat-offre.php\" method=\"get\">";
        $html .= "<input type=\"hidden\" name=\"id\" value=\"".$offres['id_offre']."\"> ";
        $html .= "<input id=\"button\" type=\"submit\" value=\">> Plus d'info\">";
        $html .= "</form> ";
        $html .= "</div>";
        echo $html;
    }
?>
