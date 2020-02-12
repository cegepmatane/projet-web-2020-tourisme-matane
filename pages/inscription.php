<?php ?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Tourisme Matane</title>
        <link rel="stylesheet" href="../css/index.css">
        <link rel="stylesheet" href="../css/theme.css">
        <link rel="stylesheet" href="../css/inscription.css">
        <base target="_parent">
    </head>
    <body>
        <?php include("header.html"); ?>
        <hr/>
        <h1>Inscription</h1>
        <form class="formulaire-inscription" method="post" action="../scripts/ajout-utilisateur.php">
            <div class="style">
                <label for="prenom">Prénom</label>
                <input type="text" name="prenom" id="prenom" required>
            </div>
            <div class="style">
                <label for="nom">Nom</label>
                <input type="text" name="nom" id="nom" required>
            </div>
            <div class="style">
                <label for="date_naissance">Date de naissance</label>
                <div class="col">
                    <div>   
                        <label for="jour">jour</label>
                        <input type="text" name="jour" id="jour" required>
                    </div>
                    <div>
                        <label for="mois">mois</label>
                        <input type="text" name="mois" id="mois" required>
                    </div>
                    <div>
                        <label for="annee">annee</label>
                        <input type="text" name="annee" id="annee" required>
                    </div>
                </div>
            </div>
            <div class="style">
                <label for="mail">Adresse mail</label>
                <input type="email" name="mail" id="mail" required>
            </div>
            <div class="style">
                <label for="mot-de-passe">Mot de passe</label>
                <input type="password" name="mot-de-passe" id="mot-de-passe" required>
            </div>
            <div class="validation">
                <input class="bouton" type="submit" name="submit" value="Valider">
            </div>
            <div class="style">
                <a class="compte" href="formulaire-connexion.php">Vous possédez déjà un compte.</a>
            </div>
        </form>
        <hr/>  
        <?php include("footer.html"); ?>
    </body>
</html>