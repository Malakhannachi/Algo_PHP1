<h1>Exercice10</h1>
<p>A partir d’un montant à payer et d’une somme versée pour régler un achat, écrire l’algorithme qui 
affiche à un utilisateur un rendu de monnaie en nombre de billets de 10 € et 5 €, de pièces de 2 € et 
1 €.

<h2>Resultat</h2>

<?php

$MontantaPayer = 152;
$sommeversee = 200;
$ResteaPayer = $sommeversee - $MontantaPayer; // 48
$nbBillet10 = 0;
$nbBillet5 = 0;
$nbPieces2 = 0;
$nbPiece1 = 0;

if ($ResteaPayer > 0){
   while ($ResteaPayer >= 10) { //
    $nbBillet10++;
    $ResteaPayer -= 10;
   }
   while ($ResteaPayer >=5) {
    $nbBillet5++;
    $ResteaPayer -=5;
   }
   while ($ResteaPayer >= 2) {
    $nbPieces2++;  
    $ResteaPayer -= 2;
   }
} 

echo "Nb billet 10 : " . $nbBillet10;


