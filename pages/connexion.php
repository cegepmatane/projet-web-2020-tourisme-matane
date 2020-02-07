<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../css/theme.css">
        <link rel="stylesheet" href="../css/index.css">
        <link rel="stylesheet" href="../css/connexion.css">
        <title>Connexion</title>
    </head>
    <body>
        <!-- Header -->
        <?php include("header.html"); ?>
        <hr/>

        <h1 class="titre-page">Connexion</h1>

        <form class="formulaire-connexion" method="POST" action="reponse-connexion.php">
            <div class="critere">
                <label for="mail">Adresse mail</label>
                <input type="text" placeholder="adresse@mail.com" id="mail" required>
            </div>

            <div class="critere">
                <label for="mot-de-passe">Mot de passe</label>
                <input type="password" placeholder="mot de passe" id="mot-de-passe" required>
            </div>

            <label><input type="checkbox" id="se-souvenir"> Se souvenir de moi</label>
            <button id="bouton-se-connecter" type="submit">Se connecter</button>
            
            <a href="oubli-mot-de-passe.php">J'ai oublié mon mot de passe</a>
        </form>

        <!-- Footer -->
        <hr/>
        <?php include("footer.html"); ?>
    </body>
</html>