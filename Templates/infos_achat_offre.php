<?php
    include ('../Scripts/get_all_destinations.php');
    $res = get_all_destination();
    $nombre_adultes = 0;
    $nombre_enfants = 0;
    $nombre_animaux = 0;
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Tourisme Matane</title>
    <link rel="stylesheet" href="../CSS/index.css">
    <link rel="stylesheet" type="text/css" href="../CSS/infos_achat_offre.css">
	<base target="_parent">
</head>
<body>
	<header>

    	<iframe src="header.html" align="top" frameborder="0" marginheight="0" marginwidth="0" style="margin: -0.5vw -0vw -0.5vw -0.5vw;width: 100vw;height: 8vw;"></iframe>

  </header>
<hr/> 
<div class="row">
  <div class="side">
    <?php
        echo "<img src=\"".$res[$_GET["id"] - 1]["url_image"]."\" class=\"img-destination\" alt=\"Image représentant la destination\"/>";
    ?>
  </div>

  <div class="main">
    <h1 id="nom_offre">Visite de la ville de <?php echo $res[$_GET["id"] - 1]["ville"]?> </h1>
    <?php
        echo "<p class=\"text-destination\">".$res[$_GET["id"] - 1]["description"]."</p>";
    ?>
  </div>

  <div class="main">
    <p>
      Du <input type="date" name="debut" <?php $date = new DateTime($res[$_GET["id"] - 1]["debut"]); echo "value=\"".$date->format("Y-m-d")."\""?> > au <input type="date" name="fin" <?php $date->add(new DateInterval("P".$res[$_GET["id"] - 1]["duree"]."D")); echo "value=\"".$date->format("Y-m-d")."\""?> > (jours selectionnés inclus)
    </p>
  </div>
  <div class="main">
    <h2>Nombre de personnes</h2>
    <ul class="personnes">
      <li><input type="number" name="adultes" min="0" max="10" <?php echo "value=\"".$nombre_adultes."\""?> > adultes(+18ans)</li>
      <li><input type="number" name="enfants" min="0" max="10" <?php echo "value=\"".$nombre_enfants."\""?> > enfants(-18ans)</li>
      <li><input type="number" name="animaux" min="0" max="10" <?php echo "value=\"".$nombre_animaux."\""?> > animaux</li>
    </ul>
  </div>

  <div class="main">
    <ul class="liste">
      Lieux inclus :
      <li>Une superbe école</li>
      <li>Un splendide quartier</li>
      <li>Un magnifique parc</li>
    </ul>
    <ul class="liste">
      Options incluses :
      <li>Un Wi-Fi surpuissant</li>
      <li>Un trajet rapide en bus</li>
      <li>L'entrée dans les lieux</li>
    </ul>
    <div id="achat">
      <p>
          <?php
              echo ($nombre_adultes*60+$nombre_enfants*30+$nombre_animaux*10)." €";
          ?>
      </p>
      <button>Acheter</button>
    </div>
  </div>

</div>
<hr/>
	<footer>
		<iframe src="footer.html" align="bottom" frameborder="0" marginheight="0" marginwidth="0" style="margin: -0.5vw -0vw -0.5vw -0.5vw;width: 100vw;height: 8vw;"></iframe>
	</footer>
</body>
</html>