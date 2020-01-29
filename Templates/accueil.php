<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../CSS/theme.css">
        <link rel="stylesheet" type="text/css" href="../CSS/accueil.css">
        <base target="_parent">
        <title>Tourisme-Matane</title>
    </head>
    <body>
        <header>
            <center>
                <iframe src="header.html" align="top" frameborder="0" marginheight="0" marginwidth="0"></iframe>
            </center>
        </header>
        <hr/>
        <h1>Tourisme-Matane</h1>
        <p>Bienvenue sur le site de l'agence de voyage Tourisme-Matane</p>
        <button id="discover-button">Découvrir notre compagnie</button>
        <center>
            <iframe id="video-accueil" src="https://www.youtube.com/embed/kppe8lJQ31Q" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </center>
        <hr/>

        <h1>Rechercher une destination</h1>
        <form id="form-search-destination" onsubmit="">
            <div>
                <input id="search-destination-depart" class="search-input" type="search">
                <img id="plane-icone" src="../img/plane.png">
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
            include ('../Scripts/get_all_destinations.php');
            foreach (get_all_destination() as $tab){
                $html = "<a href=\"#\">";
                $html .= "<div class=\"div-destination\">";
                $html .= "<img src=\"".$tab["url_image"]."\" class=\"img-destination\" alt=\"Image représentant la destination\"/>";
                $html .= "<p class=\"text-destination\">".$tab["description"]."</p>";
                $html .= "<p class=\"text-destination\">\n Prix : ".$tab["prix"]." €</p>";
                $html .= "</div></a>";
                echo $html;
            }
        ?>
        <hr/>

        <footer>
            <iframe src="footer.html" align="bottom" frameborder="0" marginheight="0" marginwidth="0" style="margin: -0.5vw -0vw -0.5vw -0.5vw;width: 100vw;height: 8vw;"></iframe>
        </footer>
    </body>
</html>