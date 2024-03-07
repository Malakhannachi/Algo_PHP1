<h1>Exercice</h1>
<p>Calculer l'âge exact d'une personne à partir de sa date de naissance (en années, mois, jours).

<h2>Resultat</h2>

<?php

$Newdate = new DateTime("21-05-2018");
$dateNaissance = new DateTime("17-01-1985") ;
$Age = $dateNaissance ->diff($Newdate);
echo "Age de la personne : ".$Age->y. " ".$Age->m;

