<?php

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";




$message = '
  <p>Prenom : '.$_POST['fname'].'</p>
  <p>Nom : '.$_POST['lname'].'</p>
  <p>Téléphone : '.$_POST['phone'].'</p>
  <p>Email : '.$_POST['email'].'</p>
  <p>Status : '.$_POST['job'].'</p>
  <p>'.$_POST['msg'].'</p>
';

//https://reallygoodemails.com/emails/your-mydisney-account-has-been-updated/live
$m = file_get_contents('t.html');

$p = str_replace(['{prenom}', '{nom}'],[$_POST['fname'], $_POST['lname']], $m);


mail(
    $_POST['email'],
    'Message du site',
    $p,
    $headers
);

exit('mail envoyé');