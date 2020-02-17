<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../css/theme.css">
        <link rel="stylesheet" href="../css/index.css">
        <link rel="stylesheet" href="../css/formulaire-connexion.css">
        <title>Connexion</title>
    </head>
    <body>
        <!-- Header -->
        <?php include("header.php"); ?>
        <hr/>

        <h1 class="titre-page">Connexion</h1>

        <form class="formulaire-connexion" method="POST" action="../scripts/reponse-connexion.php">
            <div class="critere">
                <label for="mail">Adresse mail</label>
                <input type="email" placeholder="adresse@mail.com" id="mail" name="mail" required>
            </div>

            <div class="critere">
                <label for="mot-de-passe">Mot de passe</label>
                <input type="password" placeholder="mot de passe" id="mot-de-passe" name="mot-de-passe" required>
<!--                <a href="oubli-mot-de-passe.php">J'ai oublié mon mot de passe</a>-->
            </div>

            <label><input type="checkbox" id="se-souvenir"> Se souvenir de moi</label>
            <button type="submit">Se connecter</button>
            
            <a href="inscription.php">Je n'ai pas de compte, s'inscrire</a>
        </form>

        <!-- Footer -->
        <hr/>
        <?php include("footer.html"); ?>
    </body>
</html>