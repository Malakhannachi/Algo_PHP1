<h1>Exercice11</h1>
<p>Initialiser un tableau de x marques de voitures. Ecrire un algorithme permettant de parcourir ce 
tableau et d’en afficher le contenu (une marque de voiture par ligne). Il est également demandé 
d’afficher le nombre de marques de voitures présentes dans le tableau.
Exemple : tableau ➔ « Peugeot », « Renault », « BMW », « Mercedes »

<h2>Resultat</h2>

<?php

$Tableau = ["Peugeot", "Renault", "BMW", "Mercedes"];
$nbmarque = count ($Tableau);
echo "Il y a $nbmarque marques de voitures dans le tableau :";
for ($i=0; $i < $nbmarque ; $i++) { 
    echo $Tableau[$i]."<br>";
}