<header style="overflow-y: hidden;">
   	<a href="accueil.php">
       	<img id="image-accueil" src="../decoration/logo-temporaire.jpg" alt="Logo Tourisme Matane" title="Tourisme Matane">
	</a>
	
	<nav role="navigation"> 
   		<ul>
   			<!-- Dans le css, organiser la liste à l'horizontale -->
           	<li> 
      			<a href="accueil.php" title="Accueil">Accueil</a> |
           	</li>
       		<li>
      			<a href="liste-offres.php" title="Offres">Offres</a> |
           	</li>
       		<li>
  				<a href="mission.php" title="A propos de nous" >A propos de nous</a>
           	</li>
        </ul>
	</nav>
	  
  	<!-- Mettre en forme le form avec le CSS -->
  	<!-- <form id="navigation-recherche">
  		<input type="text" name="recherche">
  		<input type="submit" name="rechercher" value="Recherche">
  	</form> -->

	<nav id="navigation-droite" role="navigation">
    	<ul>
    		<!-- Dans le css, organiser la liste à l'horizontale -->
           	<li> 
      			<a href="" title="FR">FR</a> |
           	</li>
       		<li>
      			<a href="" title="EN">EN</a>
           	</li>
	    </ul>
	</nav>

	<?php
		session_start();
		if (isset($_SESSION['id']))
		{
			echo '<a href="profil.php">Mon profil</a>';
		}
		else
		{
			echo '<a href="formulaire-connexion.php">Connexion</a>';
		}
	?>

</header>