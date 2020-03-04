<?php
function recupererNombreDestination(){
    global $db;
    $sql_command = "SELECT id_offre FROM `offre` ORDER BY id_offre DESC LIMIT 1 ";
    $answer = $db->query($sql_command);
    $data=$answer->fetch();
    return $data['id_offre'];
}

function recupererDestination($id){
    global $db;
    global $maximum;
    $answer = "";
    if($id > 4 && $id < $maximum || $id > $maximum){
        $sql_command = "SELECT * from OFFRE WHERE id_offre=1";
    } else {
        $sql_command = "SELECT * from OFFRE WHERE id_offre=".$id;
    }
    foreach ($db->query($sql_command) as $tab) {
        $answer = array(
            'prix' => $tab['prix'],
            'description' => $tab['description'],
            'ville' => $tab['ville'],
            'url_image' => $tab['url_image'],
            'debut' => $tab['debut'],
            'duree' => $tab['duree'],
            'sur_accueil' => $tab['sur_accueil'],
            'id_offre' => $tab['id_offre'],
            'prix_adulte' => $tab['prix_adulte'],
            'prix_enfant' => $tab["prix_enfant"],
            'prix_animal' => $tab["prix_animal"]
        );
    }
    return $answer;
}

include ('connexion.php');
$maximum = recupererNombreDestination();
$answer = recupererDestination(rand(1, $maximum));

$html =  "<a href=\"./infos-achat-offre.php?id=".$answer['id_offre']."\"/>";
$html .=  "<div class=\"div-destination\">";
$html .= "<img src=\"".$answer["url_image"]."\" class=\"img-destination\" alt=\"Image représentant la destination\"/>";
$html .= "<div>";
$html .= "<p>".$answer["description"]."</p>";
$html .= "<p>Prix : ".$answer["prix"]." €</p>";
$html .= "</div></div></a>";
echo $html;
?>
<a href="">

</a>
