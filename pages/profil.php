<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../css/theme.css">
        <link rel="stylesheet" href="../css/index.css">
        <link rel="stylesheet" href="../css/profil.css">
        <title>Profil</title>
    </head>
    <body>
        <!-- Header -->
        <?php include("header.html"); ?>
        <hr/>

        <h1 class="titre-page">Profil</h1>

        <h2 class="nom">Prenom Nom</h2>

        <div class="informations">
            <p class="adresse-mail">adresse@mail.fr</p>
        </div>

        <div class="factures">
            <h3 class="titre-voyages">Mes prochains voyages</h3>
            <ul class="liste-voyages">
                <li class="voyage">
                    <ul class="details-voyage">
                        <li class="destination">Montréal</li>
                        <li class="date">10/02/2019</li>
                        <li class="prix">349.99 €</li>
                    </ul>
                </li>
                <li class="voyage">
                    <ul class="details-voyage">
                        <li class="destination">Paris</li>
                        <li class="date">18/05/2009</li>
                        <li class="prix">88.99 €</li>
                    </ul>
                </li>
                <li class="voyage">
                    <ul class="details-voyage">
                        <li class="destination">Matane</li>
                        <li class="date">09/12/2020</li>
                        <li class="prix">860.00 €</li>
                    </ul>
                </li>
            </ul>
        </div>

        <!-- Mes factures -->
        <hr/>
        <h3 class="titre-voyages">Liste des factures</h3>
        <?php
        include ('../scripts/recuperer-factures.php');
        foreach (recupererFacturesWithIdUser(1) as $tab) {
            $html = "
                <div id=\"div-facture-profil\">
                    <div class=\"facture-profil-item\">
                        <p>Destination : ".$tab["id_destination"]."</p>
                    </div>
                    <div class=\"facture-profil-item\">
                        <p>Adultes : ".$tab["nb_adultes"]."</p>
                    </div>
                    <div class=\"facture-profil-item\">
                        <p>Enfants : ".$tab["nb_enfants"]."</p>
                    </div>
                    <div class=\"facture-profil-item\">
                        <p>Animaux :".$tab["nb_animaux"]."</p>
                    </div>
                    <div class=\"facture-profil-item\">
                        <p>Durée : ".$tab["duree"]." jours</p>
                    </div>
                    <div class=\"facture-profil-item\">
                        <p>Prix : ".$tab["prix_final"]."€</p>
                    </div>
                    <div class=\"facture-profil-item\">
                        <a target=\"_blank\" href='../scripts/generer-pdf-facture.php?id=".$tab["id_facture"]."'>Télécharger la facture</a>
                    </div>
                </div>
                ";
            echo $html;
        }
        ?>
        <a class="lien-deconnexion" href="deconnexion.php">Se déconnecter</a>
        <br/>
        <!-- Footer -->
        <hr/>
        <?php include("footer.html"); ?>
    </body>
</html>