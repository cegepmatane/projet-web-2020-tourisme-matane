<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../css/theme.css">
        <link rel="stylesheet" type="text/css" href="../css/accueil.css">
        <link rel="stylesheet" href="../css/index.css">
        <base target="_parent">
        <title>Tourisme-Matane</title>
        <script>
            function afficherOffreAleatoire(){
                /*var url='../scripts/recuperer-destination-aleatoire';
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                    document.getElementById("div-destination-aleatoire").innerHTML = this.responseText;
                };
                xhttp.open("GET", url, true);
                xhttp.send();*/
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                        document.getElementById("div-destination-aleatoire").innerHTML = xhttp.responseText;
                };
                xhttp.open("GET", '../scripts/recuperer-destination-aleatoire.php', true);
                xhttp.send();
            }
        </script>
    </head>
    <body>
        <?php include("header.php"); ?>
        <hr/>
        <h1>Tourisme-Matane</h1>
        <p>Bienvenue sur le site de l'agence de voyage Tourisme-Matane</p>
        <a href="mission.php">
            <button id="bouton-decouvrir">Découvrir notre compagnie</button>
        </a>
        <center>
            <iframe id="video-accueil" src="https://www.youtube.com/embed/kppe8lJQ31Q" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </center>
        <hr/>

        <h1>Rechercher une destination</h1>
        <form id="formulaire-recherche-destination" onsubmit="">
            <div>
                <input id="recherche-destination-depart" class="recherche-input" type="search">
                <img id="avion-icone" src="../decoration/plane.png">
                <input id="recherche-destination-arrivee" class="recherche-input" type="search">
            </div>
            <div>
                <input id="recherche-destination-date-picker" class="recherche-input" type="date">
            </div>
            <div id="div-with-submit-recherche">
                <button id="recherche-submit-recherche-destination" type="submit">Rechercher</button>
            </div>
        </form>
        <hr/>

        <h1>Trouver une destination aléatoire</h1>
        <button id="bouton-aleatoire" onclick="afficherOffreAleatoire()">Chercher</button>
        <div id="div-destination-aleatoire">

        </div>



        <h1>Nos destinations les plus visitées</h1>
        <?php
            include('../scripts/recuperer-destinations.php');
            foreach (recupererDestinations() as $tab){
                if($tab["sur_accueil"]){
                    $html = "<a href=\"./infos-achat-offre.php?id=".$tab['id_offre']."\"/>";
                    $html .= "<div class=\"div-destination\">";
                    $html .= "<img src=\"".$tab["url_image"]."\" class=\"img-destination\" alt=\"Image représentant la destination\"/>";
                    $html .= "<div>";
                    $html .= "<p>".$tab["description"]."</p>";
                    $html .= "<p>Prix : ".$tab["prix"]." €</p>";
                    $html .= "</div></div></a>";
                    echo $html;
                }
            }
        ?>
        <hr/>

        <?php include("footer.html"); ?>
    </body>
</html>