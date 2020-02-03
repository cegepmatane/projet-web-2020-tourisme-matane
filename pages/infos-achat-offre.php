<?php
    include('../Scripts/recuperer-destinations.php');
    $res = recupererDestinations();
    $nombre_adultes = 0;
    $nombre_enfants = 0;
    $nombre_animaux = 0;
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Tourisme Matane</title>
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" type="text/css" href="../css/infos-achat-offre.css">
	<base target="_parent">
</head>
<body>
    <?php include("header.html"); ?>
<hr/> 
<div class="ligne">
  <div class="cote">
    <?php
        echo "<img src=\"".$res[$_GET["id"] - 1]["url_image"]."\" class=\"img-destination\" alt=\"Image représentant la destination\"/>";
    ?>
  </div>

  <div class="div-principale">
    <h1 id="nom_offre">Visite de la ville de <?php echo $res[$_GET["id"] - 1]["ville"]?> </h1>
    <?php
        echo "<p class=\"text-destination\">".$res[$_GET["id"] - 1]["description"]."</p>";
    ?>
  </div>

  <div class="div-principale">
    <p>
      Du <input type="date" name="debut" <?php $date = new DateTime($res[$_GET["id"] - 1]["debut"]); echo "value=\"".$date->format("Y-m-d")."\""?> > au <input type="date" name="fin" <?php $date->add(new DateInterval("P".$res[$_GET["id"] - 1]["duree"]."D")); echo "value=\"".$date->format("Y-m-d")."\""?> > (jours selectionnés inclus)
    </p>
  </div>
  <div class="div-principale">
    <h2>Nombre de personnes</h2>
    <ul class="personnes">
      <li><input type="number" name="adultes" min="0" max="10" <?php echo "value=\"".$nombre_adultes."\""?> > adultes(+18ans)</li>
      <li><input type="number" name="enfants" min="0" max="10" <?php echo "value=\"".$nombre_enfants."\""?> > enfants(-18ans)</li>
      <li><input type="number" name="animaux" min="0" max="10" <?php echo "value=\"".$nombre_animaux."\""?> > animaux</li>
    </ul>
  </div>

  <div class="div-principale">
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
    <?php include("footer.html"); ?>
</body>
</html>