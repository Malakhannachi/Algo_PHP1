<h1>Exercice7</h1>
<p1>Ecrire un algorithme permettant de renvoyer la catégorie d’un enfant en fonction de son âge :
Poussin : entre 6 et 7 ans
Pupille : entre 8 et 9 ans
Minime : entre 10 et 11 ans
Cadet : à partir de 12 ans
Si la catégorie n’est pas gérée, merci de le préciser

<h2>Résultat</h2>

<?php

$age = 5;


if ($age == 7 || $age == 6) {
    $resultat = "Poussin";
} elseif ($age == 8 || $age == 9) {
    $resultat = "Pupille";
} elseif ($age == 10 || $age ==11) {
    $resultat = "Minime";
} elseif ($age >= 12 ){
    $resultat = "Cadet" ;
} else {
    $resultat= "n'est pas gérée";
} 
    

echo "L’enfant qui a $age ans appartient à la catégorie $resultat";



