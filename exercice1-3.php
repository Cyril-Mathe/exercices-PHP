<?php
// Exercice 1.3 : Variables scalaires et echo
// Voici quelques variables :
$titre = "Liste de courses";
$element1 = "Du sucre";
$element2 = "Des épices";
$element3 = "Et des tas de bonnes choses";

// Utilisez "echo" et les variables ci-dessus pour créer le code HTML
// suivant (l'indentation est facultative) :
//  <h1>Liste de courses</h1>
//  <ul>
//      <li>Du sucre</li>
//      <li>Des épices</li>
//      <li>Et des tas de bonnes choses</li>
//  </ul>
echo "<h1>$titre</h1>
    <ul>
        <li>$element1</li>
        <li>$element2</li>
        <li>$element3</li>
    </ul>"
?>
<!-- autre solution -->
<h1><?php echo $titre ?></h1>
<ul>
    <li><?php echo $element1 ?></li>
    <li><?php echo $element2 ?></li>
    <li><?php echo $element3 ?></li>
</ul>