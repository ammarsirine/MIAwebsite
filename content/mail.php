<?php
  $sujet = 'envoi de mail';
  $message = '<div style="width: 50%; margin-left: auto; margin-right:
  auto;">
  <div>
  <h1> Lorem </h1>
  <p>gdfrefd</p>
  </div>
  </div>';
  $destinataire = 'labmiawebsite@gmail.com';
  $header =  "From: \"nash\"<djoufakvincent@gmail.com>\n";
  $header .= "Reply-To:djoufakvincent@gmail.com\n";
   $header .="Content-Type:text/html; charset=\"iso-8859-1\"";
   if (mail($destinataire, $sujet, $sujet, $message, $header)){
     echo "votre email a été bien envoyé";
   }else{
     echo "echec de l'envoi";

   }

?>
