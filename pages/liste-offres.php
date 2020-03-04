<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Tourisme Matane</title>
        <link rel="stylesheet" href="../css/index.css">
        <link rel="stylesheet" href="../css/theme.css">
        <link rel="stylesheet" href="../css/liste-offres.css">
        <base target="_parent">

        <script type="text/javascript" src="../librairies/Ajax.js"></script>
        <script type="text/javascript">
            function recevoirOffres(ajax)
            {
                console.log("recevoirOffres()");
                console.log("reponse="+ajax.responseText);
                document.getElementById('liste-offres').innerHTML = ajax.responseText;
            }

            function actualiserOffres()
            {
                console.log('actualiserOffres()');
                ajax = new Ajax();
			    console.log(ajax);
			    ajax.executer("GET", "http://localhost/projet-web/projet-web-2020-tourisme-matane/pages/tri-offres.php",
                    "ville="+document.getElementById('champ-recherche').value, recevoirOffres);
            }
        </script>
    </head>
    <body>
        <?php include("header.php"); ?>
        <hr/>
        <!-- Filtre et recherche -->
        <div> 
            <form action="#" id="recherche">
                <input id="champ-recherche" type="search" onkeyup="actualiserOffres()" class="barre-recherche" placeholder="Ville">
                <!-- <select name="filtre">
                    <option value="nouveaute">Nouveauté</option>
                    <option value="prix_moins_to_plus">Du - cher au + cher</option>
                    <option value="prix_plus_to_moins">Du + cher au - cher</option>
                    <option value="genre">Genre</option>
                    <option value="alphabétique">Ordre alphabétique</option>
                    <option value="alphabétique_inverse">Ordre alphabétique inverse</option>
                </select> -->
            </form>
        </div>
        <!-- <div>
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
        <div id="liste-offres">
            <?php include('../Scripts/recuperer-destinations.php');
            foreach (recupererDestinations() as $offres){
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
            } ?>
        </div>
        <hr/>

        <?php include("footer.html"); ?>
    </body>
</html>

