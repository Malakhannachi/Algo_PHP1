<h1>Exercice13</h1
<p>Calculer la moyenne générale d'un élève dont les notes sont renseignées dans un tableau (pas de 
coefficient). Elle devra être affichée avec 2 décimales
<h2>Résultat</h2>

<?php
$Tableau = [10 , 12 , 8 , 19 , 3 , 16 , 11 , 13 , 9];
$nbTableau = count ( $Tableau );
$sommeTableau = array_sum ($Tableau);
$moyenne = round ($sommeTableau / $nbTableau, 2);
echo "Sa moyenne générale est donc de : $moyenne ";

