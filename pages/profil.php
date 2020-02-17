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
        <?php include("header.php"); ?>
        <hr/>

        <h1 class="titre-page">Profil</h1>

        <h2 class="nom"><?php echo $_SESSION['prenom'].' '.$_SESSION['nom']; ?></h2>

        <div class="informations">
            <p class="adresse-mail"><?php echo $_SESSION['mail']; ?></p>
        </div>

        <hr/>
        <div class="voyages">
            <h3 class="titre-voyages">Mes prochains voyages</h3>
            <ul class="liste-voyages">
                <?php include ('../scripts/recuperer-factures.php');
                foreach (recupererFacturesWithIdUser($_SESSION['id']) as $tab)
                {
                    echo '
                        <li class="voyage">
                            <ul class="details-voyage">
                                <li class="destination">'.$tab["id_destination"].'</li>
                                <li class="date">10/02/2019</li>
                                <li class="prix">'.$tab["prix_final"].' €</li>
                            </ul>
                        </li>
                    ';
                }
                ?>
            </ul>
        </div>

        <!-- Mes factures -->
        <hr/>
        <h3 class="titre-factures">Liste des factures</h3>
        <?php
        foreach (recupererFacturesWithIdUser($_SESSION['id']) as $tab) {
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
        <a class="lien-deconnexion" href="../scripts/reponse-deconnexion.php">Se déconnecter</a>
        <br/>
        <!-- Footer -->
        <hr/>
        <?php include("footer.html"); ?>
    </body>
</html>