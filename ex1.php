<h1>Exercice 1</h1>
<p>Soit la phrase "Notre formation DL commence aujourd'hui".<br>
Ecrire un algorithme permettant de compter le nombre de caractéres contenus dans cette phrase 
<h2>Résultat</h2>

<?php

$phrase = "Notre formation DL commence aujourd'hui";
$longueur = strlen ($phrase);
echo "La phrase $phrase contient $longueur caractéres<br>";
echo "La phrase $phrase contient ". strlen ($phrase)." caractéres<br>";