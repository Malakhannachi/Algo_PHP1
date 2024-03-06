<h1>Exercice 3</h1>
<p>Soit la phrase "Notre formation DL commence aujourd'hui".<br>
écrire un algorithme permettant de remplacer le mot « aujourd hui » par le mot « demain ». Afficher l ancienne et la nouvelle phrase
<h2>Résultat</h2>

<?php

$phrase = "Notre formation DL commence aujourd'hui";
$remplacemot = str_replace ("aujourd'hui", "demain", $phrase);
echo $phrase."<br>";
echo $remplacemot;
