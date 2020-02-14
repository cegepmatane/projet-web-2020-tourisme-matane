<?php
use http\Header;
require('../librairies/FPDF/tfpdf.php');
include_once ('../scripts/recuperer-factures.php');
//echo ('<head><title>Facture</title></head>');

$PRIX_ADULTE = 100;
$PRIX_ENFANT = 60;
    $PRIX_ANIMAUX = 50;

$id = filter_var($_GET["id"], FILTER_VALIDATE_INT);

$sql_command = "SELECT * from FACTURES WHERE id_facture=".$id;
$facture = array();
foreach ($db->query($sql_command) as $tab)
    $facture = array(
        'id_facture' => $tab['id_facture'],
        'id_utilisateur' => $tab['id_utilisateur'],
        'nb_adultes' => $tab['nb_adultes'],
        'nb_enfants' => $tab['nb_enfants'],
        'nb_animaux' => $tab['nb_animaux'],
        'duree' => $tab['duree'],
        'id_destination' => $tab['id_destination'],
        'prix_final' => $tab['prix_final']
    );

$sql_command = "SELECT * from UTILISATEUR WHERE id_utilisateur=".$facture["id_utilisateur"];
$utilisateur = array();
foreach ($db->query($sql_command) as $tab)
    $utilisateur = array(
        'id_utilisateur' => $tab['id_utilisateur'],
        'nom' => $tab['nom'],
        'prenom' => $tab['prenom'],
        'naisssance' => $tab['date_naissance']
    );

$pdf = new tFPDF();
$pdf->SetTitle('Facture_'.$utilisateur["nom"].'_'.$utilisateur["prenom"].'_'.$id);
$pdf->AddPage();
$pdf->AddFont('DejaVu','','DejaVuSansCondensed.ttf',true);
$pdf->SetFont('DejaVu','',30);
$pdf->Text(10,10,'Tourisme Matane');
$pdf->Text(10,25,'Facture pour la commande n°'.$id);
/** Génération de la partie identité */
$pdf->SetFont('DejaVu','',14);

$pdf->Text(10,40,'Nom : '.$utilisateur["nom"]);
$pdf->Text(10,50,'Prénom : '.$utilisateur["prenom"]);
$pdf->Text(150,40,'Naissance : '.$utilisateur["naisssance"]);
$pdf->Line(0,53,1000,53);

/** Génération de la partie paiement */
    $pdf->SetFont('DejaVu','',14);
    $pdf->Text(10,60,'Nombre d\'adultes : '.$facture["nb_adultes"]);
    $pdf->Text(180,60,($facture["nb_adultes"]*$PRIX_ADULTE).'€');
    $pdf->Text(10,70,'Nombre d\'enfants : '.$facture["nb_enfants"]);
    $pdf->Text(180,70,($facture["nb_enfants"]*$PRIX_ENFANT).'€');
    $pdf->Text(10,80,'Nombre d\'animaux : '.$facture["nb_animaux"]);
    $pdf->Text(180,80,($facture["nb_animaux"]*$PRIX_ANIMAUX).'€');
    $pdf->Text(10,90,'Durée du séjour : '.$facture["duree"].' jours');
    $sousTotal = ($facture["nb_adultes"]*$PRIX_ADULTE) + ($facture["nb_enfants"]*$PRIX_ENFANT) + ($facture["nb_animaux"]*$PRIX_ANIMAUX);
    $sousTotal *= $facture["duree"];
    $pdf->Line(0,92,1000,92);
    $pdf->Text(10,100,'Sous-total : ');
    $pdf->Text(180,100,$sousTotal.'€');
    $pdf->Text(10,110,'TVA : 30%');
    $pdf->Line(0,120,1000,110);
    $pdf->Text(180,110,$sousTotal*0.3.'€');
    $pdf->SetFont('DejaVu','',22);
    $pdf->Text(10,130,'Prix total : ' . $facture["prix_final"].'€');

$pdf->SetFont('DejaVu','',30);
$pdf->Text(10,280,'Bon voyage !');
//Header("Content-type: application/pdf");
$pdf->Output();
