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
            <h3 class="titre-voyages">Mes voyages</h3>
            <ul class="liste-voyages">
                <li class="voyage">
                    <ul class="details-voyage">
                        <li class="destination">Montreal</li>
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

        <a class="lien-deconnexion" href="deconnexion">Se déconnecter</a>

        <!-- Footer -->
        <hr/>
        <?php include("footer.html"); ?>
    </body>
</html>