<h1>Exercice 5</h1>
<P>Ecrire un algorithme qui déclare une valeur en francs et qui la convertit en euros<br>
Attention, la valeur générée devra être arrondie à 2 décimales.
<h2>Résultat</h2>

<?php
$montantenfranc = 100;
$montanteneuro= round($montantenfranc*0.1524, 2);

echo "$montantenfranc francs = $montanteneuro euro";

