<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../css/theme.css">
        <link rel="stylesheet" type="text/css" href="../css/panneau-admin.css">
        <link rel="stylesheet" href="../css/index.css">
        <base target="_parent">
        <title>Tourisme-Matane</title>
    </head>
    <body>
        <?php include("header.html"); ?>
        <hr/>
        <h1>Panneau d'administration</h1>
        <hr/>
        <button onclick="document.location.href= 'formulaire-ajout-destination.php'" class="bouton-add-destination">Ajouter une destination</button>
        <h2>Offres</h2>
        <?php
        include ('../scripts/recuperer-destinations.php');
        foreach (recupererDestinations() as $tab) {
            $html = "
                <div id=\"div-destination-admin\">
                <a href='modifier-offre.php?id=".$tab["id_offre"]."'>Supprimer</a>
                    <div class=\"destination-admin-item\">
                        <img src=\"".$tab["url_image"]."\" class=\"img-destination\" alt=\"Image représentant la destination\"/>
//                        <button id=\"change_image\">Change</button>
                    </div>
                    <div class=\"destination-admin-item\">
                        <p>Ville : ".$tab["ville"]."</p>
//                        <button id=\"change_ville\">Change</button>
                    </div>
                    <div class=\"destination-admin-item\">
                        <p>Prix : ".$tab["prix"]."€</p>
//                        <button id=\"change_prix\">Change</button>
                    </div>
                    <div class=\"destination-admin-item\">
                        <p>Début : ".$tab["debut"]."</p>
//                        <button id=\"change_date\">Change</button>
                    </div>
                    <div class=\"destination-admin-item\">
                        <p>Durée : ".$tab["duree"]." jours</p>
//                        <button id=\"change_duree\">Change</button>
                    </div>
                    <div class=\"destination-admin-item\">
                        <p>Description :".$tab["description"]."</p>
//                        <button id=\"change_description\">Change</button>
                    </div>
                    <div class=\"destination-admin-item\">
                        <p>Afficher sur l'accueil :</p>
                        <label class=\"switch\">
                            <input id=\"change_sur_accueil\" type=\"checkbox\"";
            if($tab["sur_accueil"]==1){
                $html.= "checked=true";
            }else{
                //$html.= "checked=false";
            }
                $html .= ">
                            <span class=\"slider round\"></span>
                        </label>
                    </div>
                </div>
                ";
            echo $html;
        }
        ?>
    </body>
</html>