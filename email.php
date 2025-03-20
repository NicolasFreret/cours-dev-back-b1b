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

$m = file_get_contents('t.html');

$m = str_replace($_POST['fname'],"{nom}",$m);

mail(
    'tonemail@gmail.com',
    'Message du site',
    $m,
    $headers
);

exit('mail envoyé');