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
        <hr/>
        <h1>Tourisme-Matane</h1>
        <p>Bienvenue sur le site de l'agence de voyage Tourisme-Matane</p>
        <a href="mission.php">
            <button id="discover-button">Découvrir notre compagnie</button>
        </a>
        <center>
            <iframe id="video-accueil" src="https://www.youtube.com/embed/kppe8lJQ31Q" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </center>
        <hr/>

        <h1>Rechercher une destination</h1>
        <form id="form-search-destination" onsubmit="">
            <div>
                <input id="search-destination-depart" class="search-input" type="search">
                <img id="plane-icone" src="../decoration/plane.png">
                <input id="search-destination-arrivee" class="search-input" type="search">
            </div>
            <div>
                <input id="search-destination-date-picker" class="search-input" type="date">
            </div>
            <div id="div-with-submit-button">
                <button id="button-submit-search-destination" type="submit">Rechercher</button>
            </div>
        </form>
        <hr/>

        <h1>Nos destinations les plus visitées</h1>
        <?php
            include('../Scripts/recuperer-destinations.php');
            foreach (recupererDestinations() as $tab){
                if($tab["sur_accueil"])$html = "<a href=\"#\">";
                $html .= "<div class=\"div-destination\">";
                $html .= "<img src=\"".$tab["url_image"]."\" class=\"img-destination\" alt=\"Image représentant la destination\"/>";
                $html .= "<div>";
                $html .= "<p class=\"text-destination\">".$tab["description"]."</p>";
                $html .= "<p class=\"text-destination\">Prix : ".$tab["prix"]." €</p>";
                $html .= "</div></div></a>";
                echo $html;
            }
        ?>
        <hr/>

        <?php include("footer.html"); ?>
    </body>
</html>