<h1>Exercice</h1>
<p>Nous souhaitons savoir si une personne est imposable en fonction de son âge et de son sexe.
Si la personne est une femme dont l’âge est compris entre 18 et 35 ans ou si c’est un homme de 
plus de 20 ans, alors celle-ci est imposable (sinon ce n’est pas le cas, « non imposable »).

<h2>Resultat</h2>

<?php

$sexe = "F" ;
$age = 18 ;

if($age >= 18 && $age <=35 && $sexe == "F"  || $age >20 && $sexe == "H") {
    $resultat = "imposable" ;
} else {
    $resultat = "non imposable" ;
}

 echo "La personne est imposable $resultat";