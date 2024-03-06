<h1>Exercice 4</h1>
<p>Ecrire un algorithme permettant de savoir si une phrase est palindrome.<br>
    La phrase « Engage le jeu que je le gagne » est palindrome
<h2>Résultat</h2>

<?php

$phrase = "Engaage le jeu que je le gagne ";
$phrase2 = str_replace(" ", "", $phrase);
$phrase2 = strtolower($phrase2);
$phrase2 = strrev($phrase2);
if($phrase2 == strrev($phrase2)) {
    $resultat= "phrase est palindrome";
}else {
    $resultat = "phrase est non palindrome";
}

echo $resultat;

