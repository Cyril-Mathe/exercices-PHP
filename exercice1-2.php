<?php
// Exercice 1.2 : Variables scalaires et echo
// Voici quelques variables :
$adresse1 = "Jean BOB";
$adresse2 = "1, rue du PHP";
$codePostal = 75010;
$ville =  "Paris";

// Utilisez "echo" et les variables ci-dessus pour créer le code HTML
// suivant (l'indentation est facultative) :
//  <p>
//      <strong>Jean BOB</strong><br/>
//      <span>1, rue du PHP</span><br/>
//      <span>75010 Paris</span>
//  </p>
echo "<p>
         <strong>$adresse1</strong><br/>
         <span>$adresse2</span><br/>
         <span>'$codePostal $ville'</span>
      </p>"
?>
<!-- autre solution -->
<p>
   <strong><?php echo $adresse1 ?></strong><br/>
    <span><?php echo $adresse2 ?></span><br/>
   <span><?php echo $codePostal . " " . $ville ?></span>
</p>