<?php
// Exercice 1.4 : Variables scalaires et echo
// Voici quelques variables :
$titre = "Mon CV";
$soustitre1 = "Formations";
$contenu1 = "<p><strong>Lycée Dubourg</strong> : Baccalauréat Mention Exceptionnelle</p>";
$soustitre2 = "Loisirs";
$contenu2 = "<p>Mes loisirs</p>";

// Utilisez "echo" et les variables ci-dessus pour créer le code HTML
// suivant :
//  <h1>Mon CV</h1>
//  <h2>Formations</h2>
//  <p><strong>Lycée Dubourg</strong> : Baccalauréat Mention Exceptionnelle</p>
//  <h2>Loisirs</h2>
//  <p>Mes loisirs</p>
echo "<h1>$titre</h1>
    <h2>$soustitre1</h2>
    $contenu1
    <h2>$soustitre2</h2>
    <p>$contenu2</p>"
?>
<!-- autre solution -->
<h1><?php echo $titre ?></h1>
<h2><?php echo $soustitre1 ?></h2>
<?php echo $contenu1 ?>
<h2><?php echo $soustitre2 ?></h2>
<p><?php echo $contenu2 ?></p>