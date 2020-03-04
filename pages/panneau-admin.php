<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../css/theme.css">
        <link rel="stylesheet" type="text/css" href="../css/panneau-admin.css">
        <link rel="stylesheet" href="../css/index.css">
        <base target="_parent">
        <title>Tourisme-Matane</title>
        <script type="text/javascript" src="../librairies/Ajax.js"></script>
        <script>
            function recevoirMessageServeur(ajax)
            {
                console.log("recevoirPenseeMagique()");
                console.log("reponse="+ajax.responseText);

                let reponse = JSON.parse(ajax.responseText);

                let message = reponse.message;
                console.log("message = " + message);

                document.getElementById('message_serveur_modif').innerHTML = message;
            }
        </script>
    </head>
    <body>
        <?php include("header.php"); ?>
        <hr/>
        <h1>Panneau d'administration</h1>
		<h2>Liste des offres modifiables</h2>
        <hr/>
        <button onclick="document.location.href= 'formulaire-ajout-destination.php'" class="bouton-add-destination">Ajouter une destination</button>
        <h2>Offres</h2>
        <?php
        include ('../scripts/recuperer-destinations.php');
        foreach (recupererDestinations() as $tab) {
        ?>
                <div class="div-destination-admin" id="<?= $tab["id_offre"] ?>">
                    <div class="destination-admin-item">
                        <img src="<?= $tab["url_image"] ?>" class="img-destination" alt="Image représentant la destination"/>
                        <!--<button id="change_image">Change</button>-->
                    </div>
                    <div class="destination-admin-item">
                        <p>Ville : <?= $tab["ville"] ?></p>
                        <!--<button id="change_ville">Change</button>-->
                    </div>
                    <div class="destination-admin-item">
                        <p>Prix : <?= $tab["prix"] ?>€</p>
                        <!--<button id="change_prix">Change</button>-->
                    </div>
                    <div class="destination-admin-item">
                        <p>Début : <?= $tab["debut"] ?></p>
                        <!--<button id="change_date">Change</button>-->
                    </div>
                    <div class="destination-admin-item">
                        <p>Durée : <?= $tab["duree"] ?> jours</p>
                        <!--<button id="change_duree">Change</button>-->
                    </div>
                    <div class="destination-admin-item" onclick="">
                        <p id="<?= $tab["id_offre"] . "description"?>">Description :<br> <?= $tab["description"] ?></p>
                        <!--<button id="change_description">Change</button>-->
                    </div>
                    <div class="destination-admin-item">
                        <p>Afficher sur l'accueil :</p>
                        <label class="switch">
                            <input id="change_sur_accueil" type="checkbox";
            <?php if($tab["sur_accueil"]==1){
                echo "checked=true";
            }
            ?>
                    />
                            <span class="slider round"></span>
                        </label>
                    </div>
                    <div class="destination-admin-item">
                        <a href='../scripts/suppression-offre.php?id="<?= $tab["id_offre"] ?>"'>Supprimer</a>
                        <a href='../pages/formulaire-modifier-offre.php?id="<?= $tab["id_offre"] ?>"'>Modifier</a>
                    </div>
                </div>
        <?php } ?>
        <h2>Liste des factures</h2>
        <hr/>
            <?php
            include ('../scripts/recuperer-factures.php');
            foreach (recupererFactures() as $tab) {
            ?>
                <div class="div-destination-admin">
                    <div class="destination-admin-item">
                        <p>Utilisateur : <?= $tab["id_utilisateur"] ?></p>
                    </div>
                    <div class="destination-admin-item">
                        <p>Destination : <?= $tab["id_destination"]?></p>
                    </div>
                    <div class="destination-admin-item">
                        <p>Adultes : <?= $tab["nb_adultes"] ?></p>
                    </div>
                    <div class="destination-admin-item">
                        <p>Enfants : <?= $tab["nb_enfants"] ?></p>
                    </div>
                    <div class="destination-admin-item">
                        <p>Animaux : <?= $tab["nb_animaux"] ?></p>
                    </div>
                    <div class="destination-admin-item">
                        <p>Durée : <?= $tab["duree"] ?> jours</p>
                    </div>
                    <div class="destination-admin-item">
                        <p>Prix : <?= $tab["prix_final"] ?>€</p>
                    </div>
                </div>
            <?php } ?>
        <hr/>
        <?php include("footer.html"); ?>
    </body>
    <script>
        let idOffre = 5;
        let pDescription = document.getElementById(idOffre+"description");
        let pDescriptionEvent = function () {
            let text = pDescription.innerHTML.substr(18,pDescription.innerHTML.length);
            let idInput = Math.random() + "";
            pDescription.innerHTML ="<textarea id='"+idInput+"' style='height: 100%;'>"+text.split("<br>").join("\n")+"</textarea>";
            let input = document.getElementById(idInput);
            input.addEventListener("mouseout",function(){
                pDescription.innerHTML = "Description :<br> " + (input.value+"").split("\n").join("<br>");
                //Ajax
                let ajax = new Ajax();
                console.log(ajax);
                ajax.executer("POST", "http://localhost/scripts/ajax-modifier-offre.php","",recevoirMessageServeur());
                pDescription.addEventListener("click",pDescriptionEvent);
            });
            pDescription.removeEventListener("click",arguments.callee);
        };

        pDescription.addEventListener("click",pDescriptionEvent);
    </script>
</html>