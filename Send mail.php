<?php
/**
* Send mail from PHP
*/
$to = 'bob@example.com';

$subject = 'Website Change Reqest';

$headers = "From: " . strip_tags($_POST['req-email']) . "rn";
$headers .= "Reply-To: ". strip_tags($_POST['req-email']) . "rn";
$headers .= "CC: susan@example.comrn";
$headers .= "MIME-Version: 1.0rn";
$headers .= "Content-Type: text/html; charset=ISO-8859-1rn";
mail($to,$subject,$body,$headers);
?>