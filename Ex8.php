<h1>Exercice8</h1>
<p>Ecrire un algorithme qui renvoie la table de multiplication d’un nombre passé en paramètre sous la 
    forme :</p>

<h2>Resultat</h2>

<?php

$i = 1;
$nb = 8;

while ($i <= 12) {
    $result = $nb * $i;
    echo "$i x $nb = $result<br>";
    $i++;
}

for ($i = 1 ; $i<=12; $i++ ) {
    echo "$i x $nb = ". $nb * $i. "<br>";   
}