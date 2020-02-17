<?php


header('HTTP/1.1 200 OK');


$reponse = 'cmd=_notify-validate';
foreach ($_POST as $param => $var) {
    $var = urlencode(stripslashes($var));
    $reponse .= "&$param=$var";
}


$item_name = $_POST['item_name'];
$item_number = $_POST['item_number'];
$payment_status = $_POST['payment_status'];
$amount = $_POST['mc_gross'];
$currency = $_POST['mc_currency'];
$receiver_email = $_POST['receiver_email'];
$payer_email = $_POST['payer_email'];
$custom = $_POST['custom'];


$httphead = "POST /cgi-bin/webscr HTTP/1.0\r\n";
$httphead .= "Content-Type: application/x-www-form-urlencoded\r\n";
$httphead .= "Content-Length: ".strlen($reponse)."\r\n\r\n";

$errno ='';
$errstr = '';
$file_handle = fsockopen('ssl://www.paypal.com', 443, $errno, $errstr, 30);

if(!$file_handle){
    echo "roblème d'HTTP";
} else {
    fputs($file_handle, $httphead.$reponse);
    while(!feof($file_handle)){
        $read_reponse = fgets($file_handle, 1024);
        if(strcmp($read_reponse, "VERIFIED") == 0){

            /**
             * GERER LA BDD ICI, METTRE LA FACTURE EN PAYEE OU QQCHOE DU GENRE
             * EN RECUPERANT L'ID DE LA FACTURE
             */



        } elseif (strcmp($read_reponse, "INVALID") == 0){
            echo "Problème de vérification du paiement";
        }
    }
    fclose($file_handle);
}


?>